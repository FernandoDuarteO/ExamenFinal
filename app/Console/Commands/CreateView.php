<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class CreateView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:view {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new set of resource views';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $name = Str::plural(Str::lower($name));

        $views = ['create', 'edit', 'show', 'form', 'index'];

        foreach ($views as $view) {
            $this->call('make:view', ['name' => $name . '/' . $view]);
        }
    }
}
