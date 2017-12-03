<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $apiNamespace = 'App\Http\Controllers';
    protected $adminNamespace = 'App\Http\Controllers\Admin';

    // protected $namespace = 'App\Http\Controllers/chat';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {

        //patterns

        //Route::pattern('id', '[0-9]+');

        parent::boot();

        //binding

        // Route::model('user', App\User::class);
        // Route::model('user', App\User::class);
        // Route::model('user', App\User::class);
        // Route::model('user', App\User::class);
        // Route::model('user', App\User::class);
        // Route::model('user', App\User::class);
        // Route::model('user', App\User::class);
        // Route::model('user', App\User::class);
        // Route::model('user', App\User::class);
        // Route::model('user', App\User::class);

        // Route::bind('user', function ($value) {
        //     return App\User::where('name', $value)->first() ?? abort(404);
        // });
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();
        $this->mapAdminRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::middleware('api')
             ->namespace($this->apiNamespace)
             ->group(function($router){
                // require base_path('routes/api/auth.php');
                // require base_path('routes/api/automatization.php');
                require base_path('routes/api/blocks.php');
                // require base_path('routes/api/channels.php');
                // require base_path('routes/api/chat.php');
                require base_path('routes/api/clients.php');
                // require base_path('routes/api/files.php');
                // require base_path('routes/api/reports.php');
                require base_path('routes/api/settings.php');
                require base_path('routes/api/tickets.php');
                require base_path('routes/api/wiki.php');
             });



        //  Route::group([
        //     'middleware' => 'web',
        //     'namespace' => $this->namespace,
        // ], function ($router) {
        //     require base_path('routes/admin.php');
        //     require base_path('routes/web.php');
        // });
    }


    /**
     * Define the "admin" routes for the application.
     *
     * @return void
     */
    protected function mapAdminRoutes()
    {
        Route::prefix('admin')
             ->middleware('admin')
             ->namespace($this->adminNamespace)
             ->group(function($router){
                // require base_path('routes/admin/auth.php');
                // require base_path('routes/admin/config.php');
                // require base_path('routes/admin/management.php');
                // require base_path('routes/admin/companies.php');
             });
    }
}
