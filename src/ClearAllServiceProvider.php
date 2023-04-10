<?php


namespace Multiqos\ClearAll;

use Illuminate\Support\ServiceProvider;

class ClearAllServiceProvider extends ServiceProvider
{
    /**
     *
     */
    public function boot()
    {
        $publicDir = __DIR__ . '/../../../../app/Console/Commands/';
        $manifestTemplate = file_get_contents(__DIR__ . '/../commands/ClearAllCommand.php');
        $newManifestTemplate = str_replace("namespace Multiqos\ClearAll", "namespace App\Console\Commands", $manifestTemplate);
        $this->createFile($publicDir. DIRECTORY_SEPARATOR, 'ClearAllCommand.php', $newManifestTemplate);
    }

    /**
     *
     */
    public function register()
    {
        $this->app->singleton(ClearAllCommand::class, function () {
            return new ClearAllCommand();
        });
    }

    public static function createFile($path, $fileName, $contents)
    {
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }
        $path = $path.$fileName;
        file_put_contents($path, $contents);
    }
}
