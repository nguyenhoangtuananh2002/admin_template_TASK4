<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        'App\Repositories\Setting\SettingRepositoryInterface' => 'App\Repositories\Setting\SettingRepository',
        'App\Admin\Repositories\Employee\EmployeeRepositoryInterface' => 'App\Admin\Repositories\Employee\EmployeeRepository',
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach($this->repositories as $interface => $implement){
            $this->app->singleton($interface, $implement);
        }
    }
     /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(){

    }
}
