<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GreetUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:greet-user';
protected $signature = 'greet';
protected $description = 'This command greets the user';

    /**
     * The console command description.
     *
     * @var string
     */
    // protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
   $name = $this->ask("What is your name?");
    $this->info("Hello, $name!");
    }
}
