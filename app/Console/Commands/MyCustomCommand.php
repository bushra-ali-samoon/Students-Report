<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MyCustomCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * Example: php artisan my:custom
     */
protected $signature = 'greet:user {bushra ali} {--yell}';

    /**
     * The console command description.
     */
    protected $description = 'This is my first custom Artisan command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Hello! Your custom command is working 🚀');
    }
}
