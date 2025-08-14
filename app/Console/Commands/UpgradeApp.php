<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpgradeApp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upgrade';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para generar archivos de caché y optimizar la aplicación';

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Optimizando la Aplicación...');

        $this->call('route:cache');
        $this->call('config:cache');
        $this->call('event:cache');
        $this->call('view:cache');
        $this->call('optimize');

        $this->info('Se ejecutarón las configuraciones correctamente.');
        return Command::SUCCESS;
    }
}
