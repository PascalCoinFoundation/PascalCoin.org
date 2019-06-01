<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GrahamCampbell\GitHub\Facades\GitHub;
use Illuminate\Support\Str;

class DumpReleases extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pascal:releases';

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
        //\Storage::delete(\Storage::files('PIP'));

        // fetch remote files
        $releases = GitHub::repo()->releases()->all('PascalCoin', 'PascalCoin');
        foreach($releases as $release) {
            if(Str::startsWith($release['tag_name'], 'TESTNET')) {
                continue;
            } else {
                $latestRelease = $release;
                break;
            }
        }

        $data = [
            'url' => $latestRelease['html_url'],
            'version' => $latestRelease['tag_name'],
            'date' => new \DateTime($latestRelease['published_at']),
            'files' => [
                'ubuntu_64bit' => null,
                'windows_32bit' => null,
                'windows_64bit' => null,
                'macos_64bit' => null,
                'source_zip' => $latestRelease['zipball_url'],
                'source_tgz' => $latestRelease['tarball_url'],
            ]
        ];

        foreach($latestRelease['assets'] as $asset) {
            if(Str::endsWith($asset['name'], '.exe')) {
                if(Str::contains(strtolower($asset['name']), '32b')) {
                    $data['files']['windows_32bit'] = $asset['browser_download_url'];
                } else {
                    $data['files']['windows_64bit'] = $asset['browser_download_url'];
                }
            } else if(Str::endsWith($asset['name'], '.dmg')) {
                $data['files']['macos_64bit'] = $asset['browser_download_url'];
            } else {
                if(Str::contains(strtolower($asset['name']), 'ubuntu')) {
                    $data['files']['ubuntu_64bit'] = $asset['browser_download_url'];
                }
            }
        }

        \Storage::put('release.json', json_encode($data));
    }
}
