<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shop:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Установка приложения';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // - php artisan storage:link
        // - php artisan migrate
        $this->call('storage:link');
        $this->call('migrate');
        return self::SUCCESS;
    }
}
