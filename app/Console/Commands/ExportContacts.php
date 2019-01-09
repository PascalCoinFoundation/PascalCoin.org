<?php

namespace App\Console\Commands;

use App\Mail\Contact;
use Illuminate\Console\Command;

class ExportContacts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pascal:export-contacts';

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

        \App\Contact::orderBy('created_at')->get()->each(function(\App\Contact $contact) {
            echo str_slug($contact->created_at) . '.' . $contact->id.'.txt';

            \Storage::disk('local')->put('contacts/' . str_slug($contact->created_at) . '.' . $contact->id.'.txt',
                "Created at: " . $contact->created_at . "\n" .
                "Email: " . $contact->email . "\n" .
                "Phone: " . $contact->phone . "\n" .
                "Message:\n" . $contact->message
            );
        });
    }
}
