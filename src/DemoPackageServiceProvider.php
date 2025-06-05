<?php

namespace Shovit\DemoPackage;

use Illuminate\Support\Facades\Route;
use Shovit\DemoPackage\Http\Controllers\MyPackageController;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Shovit\DemoPackage\Commands\DemoPackageCommand;

class DemoPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('demopackage')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_wish_table')
            ->hasCommand(DemoPackageCommand::class);
    }

    public function packageRegistered(){
    Route::macro('demo_package', function(string $baseUrl = 'demo-package'){
            Route::prefix($baseUrl)->group(function(){
                Route::get('/', [MyPackageController::class, 'index']);
                Route::post('/store', [MyPackageController::class, 'store'])->name('demopackage.store');
            });
        });
    }
}
