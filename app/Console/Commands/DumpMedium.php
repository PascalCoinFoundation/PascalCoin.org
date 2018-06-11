<?php

namespace App\Console\Commands;

use App\MediumArticles;
use Illuminate\Console\Command;
use Zend\Feed\Reader\Entry\Rss;
use Zend\Feed\Reader\Reader;

class DumpMedium extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pascal:medium';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $feed = Reader::import('https://medium.com/feed/@pascalcoinmktg');

        /** @var Rss $entry */
        foreach ($feed as $entry) {

            $article = MediumArticles::firstOrNew(['posted_at' => $entry->getDateCreated()]);
            $article->fill([
                'title' => $entry->getTitle(),
                'link' => $entry->getLink()
            ]);
            $article->save();
        }
    }
}
