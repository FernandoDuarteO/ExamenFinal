<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CleanCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Limpiar la caché de la aplicación';

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Limpiando la caché...');

        $this->call('cache:clear');
        $this->call('route:clear');
        $this->call('view:clear');
        $this->call('event:clear');
        $this->call('config:clear');
        $this->call('optimize:clear');
        $this->call('clear-compiled');

        $this->info('La caché de la app fue limpiada.');
        return Command::SUCCESS;
    }
}
