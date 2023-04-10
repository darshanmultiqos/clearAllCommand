<?php

namespace Multiqos\ClearAll;

use Illuminate\Console\Command;

class ClearAllCommand extends Command
{
    protected $signature = "clear:all";

    protected $description ="Clear all cache & temp files";

    /*public $composer;

    public function __construct()
    {
        parent::__construct();
        $this->composer == app()['composer'];
    }*/

    public function handle()
    {
        $this->comment(PHP_EOL.'Clearing All'.PHP_EOL);
        \Artisan::call('config:clear');
        \Artisan::call('cache:clear');
        \Artisan::call('view:clear');
        \Artisan::call('route:clear');
        exec('composer dump-autoload');
        $this->info('Cache and temp data successfully cleared.');
    }

}
