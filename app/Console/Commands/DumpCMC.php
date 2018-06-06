<?php

namespace App\Console\Commands;

use App\CoinMarketCap;
use Illuminate\Console\Command;

class DumpCMC extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pascal:dumpcmc';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $cfg = config('pascal.cmc');

        foreach($cfg['currencies'] as $symbol)
        {
            $curl = curl_init();
            $url = sprintf('https://api.coinmarketcap.com/v2/ticker/%d/?%s',
                $cfg['id'], http_build_query(['convert' => $symbol])
            );

            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

            $result = curl_exec($curl);

            curl_close($curl);

            $data = json_decode($result, true);

            $cmc = new CoinMarketCap();
            $cmc->symbol = $symbol;
            $cmc->price = array_get($data, "data.quotes.$symbol.price", 0);
            $cmc->volume_24h = array_get($data, "data.quotes.$symbol.volume_24h", 0);
            $cmc->market_cap = array_get($data, "data.quotes.$symbol.market_cap", 0);
            $cmc->percent_change_1h = array_get($data, "data.quotes.$symbol.percent_change_1h", 0);
            $cmc->percent_change_24h = array_get($data, "data.quotes.$symbol.percent_change_24h", 0);
            $cmc->percent_change_7d = array_get($data, "data.quotes.$symbol.percent_change_7d", 0);
            $cmc->rank = array_get($data, 'data.rank', 1);
            $cmc->supply = array_get($data, 'data.total_supply', 1);

            $cmc->save();
        }
    }
}
