<?php

namespace App\Admin\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        'App\Admin\Repositories\Admin\AdminRepositoryInterface' => 'App\Admin\Repositories\Admin\AdminRepository',
        'App\Admin\Repositories\User\UserRepositoryInterface' => 'App\Admin\Repositories\User\UserRepository',
        'App\Admin\Repositories\Employee\EmployeeRepositoryInterface' => 'App\Admin\Repositories\Employee\EmployeeRepository',
        'App\Admin\Repositories\Setting\SettingRepositoryInterface' => 'App\Admin\Repositories\Setting\SettingRepository',
        'App\Admin\Repositories\Category\CategoryRepositoryInterface' => 'App\Admin\Repositories\Category\CategoryRepository',
        'App\Admin\Repositories\Post\PostRepositoryInterface' => 'App\Admin\Repositories\Post\PostRepository',
        'App\Admin\Repositories\Slider\SliderRepositoryInterface' => 'App\Admin\Repositories\Slider\SliderRepository',
        'App\Admin\Repositories\Slider\SliderItemRepositoryInterface' => 'App\Admin\Repositories\Slider\SliderItemRepository',
        'App\Admin\Repositories\Page\PageRepositoryInterface' => 'App\Admin\Repositories\Page\PageRepository',
        'App\Admin\Repositories\Tag\TagRepositoryInterface' => 'App\Admin\Repositories\Tag\TagRepository',
        'App\Admin\Repositories\Baiviet\BaivietRepositoryInterface' => 'App\Admin\Repositories\Baiviet\BaivietRepository',
        'App\Admin\Repositories\Danhmuc\DanhmucRepositoryInterface' => 'App\Admin\Repositories\Danhmuc\DanhmucRepository',
        'App\Admin\Repositories\userpost\userpostRepositoryInterface' => 'App\Admin\Repositories\userpost\userpostRepository',
    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        foreach ($this->repositories as $interface => $implement) {
            $this->app->singleton($interface, $implement);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
