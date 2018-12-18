<?php

namespace App\Providers;

use App\CoinMarketCap;
use App\Service\DynamicTextService;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(100);

        if(getenv('APP_ENV') === 'prod') {
            \URL::forceScheme('https');
        }

        if(php_sapi_name() !== 'cli') {
            $symbols = config('pascal.cmc.currencies', []);
            $tickers = CoinMarketCap::whereIn('symbol', $symbols)
                ->orderBy('created_at', 'DESC')
                ->take(count($symbols))
                ->get();

            foreach ($tickers as $ticker) {
                \View::share('cmc_' . $ticker->symbol, $ticker);
            }
            \View::share('latest_release', json_decode(\Storage::get('release.json'), true));

        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(IdeHelperServiceProvider::class);
        }
        $this->app->singleton(DynamicTextService::class, function() {
            return new DynamicTextService();
        });

        \Blade::directive('dt', function ($expression) {
            return '<?php echo app(' . DynamicTextService::class . '::class)->get(' . $expression . '); ?>';
        });
    }
}
