<?php

namespace ITHilbert\NewProject\Console\Commands;

use Illuminate\Console\Command;

class install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'newproject:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installiert Komponenten für ein neues Project';

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
     * @return int
     */
    public function handle()
    {
        $this->info('Install orangehill/iseed');
        exec('composer require orangehill/iseed');

        $this->info('Install yajra/laravel-datatables-oracle');
        exec('composer require yajra/laravel-datatables-oracle');

        return 0;
    }
}
