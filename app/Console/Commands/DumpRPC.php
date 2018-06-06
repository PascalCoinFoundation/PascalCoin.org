<?php

namespace App\Console\Commands;

use GrahamCampbell\GitHub\Facades\GitHub;
use Illuminate\Console\Command;

class DumpRPC extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pascal:rpc';

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
        $rpc = file_get_contents('https://raw.githubusercontent.com/wiki/PascalCoin/PascalCoin/JSON-RPC-API.md');
        \Storage::put('RPC.md', $rpc);
    }
}
