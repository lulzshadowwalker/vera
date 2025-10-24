<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InitApp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize the app by running all necessary upserting commands.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Initializing application for production ...');
        $this->newLine();

        $this->call('upsert:role');

        $this->newLine();
        $this->info('⏺ Application initialized successfully.');
    }
}
