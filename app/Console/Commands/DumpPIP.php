<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GrahamCampbell\GitHub\Facades\GitHub;

class DumpPIP extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pascal:pip';

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
        // remove old versions
        \Storage::delete(\Storage::files('PIP'));

        // fetch remote files
        $pips = GitHub::repo()->contents()->show('PascalCoin', 'PascalCoin', 'PIP');

        $database = [];
        foreach($pips as $pip)
        {
            if(substr($pip['name'], 0, 3) !== 'PIP' || $pip['name'] === 'PIP-template.md') {
                continue;
            }

            $contents = GitHub::repo()->contents()->show('PascalCoin', 'PascalCoin', $pip['path']);
            $decoded = base64_decode($contents['content']);
            \Storage::put('PIP/' . $pip['name'], $decoded);

            $dbEntry = [];
            $linesInFile = explode("\n", $decoded);
            foreach($linesInFile as $line) {
                $line = trim($line);
                if($line === '</pre>') {
                    break;
                }

                if(trim($line) === '') {
                    continue;
                }
                if($line !== '<pre>' && strpos($line, ':') !== false) {
                    $data = explode(':', $line);
                    $dbEntry[strtolower(trim(array_shift($data)))] = trim(implode(':', $data));
                }
            }

            // normalize PIP entry
            if(is_numeric($dbEntry['pip'])) {
                $dbEntry['pip_no'] = (int)$dbEntry['pip'];
                $dbEntry['pip'] = 'PIP-' . str_pad($dbEntry['pip'], 4, '0', STR_PAD_LEFT);
            } else {
                $dbEntry['pip_no'] = (int)str_replace('PIP-', '', $dbEntry['pip']);
                $dbEntry['pip'] = 'PIP-' . str_pad($dbEntry['pip_no'], 4, '0', STR_PAD_LEFT);
            }
            $dbEntry['file'] = $pip['name'];

            $database[] = $dbEntry;
        }

        \Storage::deleteDirectory('public/PIP');

        // fetch remote files
        $resources = GitHub::repo()->contents()->show('PascalCoin', 'PascalCoin', 'PIP/resources');
        foreach($resources as $resource) {
            if($resource['type'] === 'dir') {
                $files = GitHub::repo()->contents()->show('PascalCoin', 'PascalCoin', $resource['path']);
                foreach($files as $file) {
                    $contents = GitHub::repo()->contents()->show('PascalCoin', 'PascalCoin', $file['path']);
                    \Storage::put('public/' . $file['path'], base64_decode($contents['content']));
                }
            }
        }


        \Storage::put('PIP/database.php', '<?php return ' . var_export($database, true) . ';');
    }
}
