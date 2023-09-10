<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Pvtl\VoyagerFrontend\Providers\VoyagerFrontendServiceProvider;

class VoyagerFrontendProvider extends VoyagerFrontendServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    protected function strapViews(Request $request)
    {
        // Provide user data to all views
        View::composer('*', function ($view) use ($request) {
            $view->with('currentUser', \Auth::user());
//            $view->with('breadcrumbs', PageController::getBreadcrumbs($request));
        });

        // Front-end views can be used like:
        //  - @include('voyager-frontend::partials.meta') OR
        //  - view('voyager-frontend::modules/posts/post');
        $this->loadViewsFrom(self::PACKAGE_DIR . 'resources/views', 'voyager-frontend');
        $this->loadViewsFrom(self::PACKAGE_DIR . 'resources/views/vendor/voyager', 'voyager');

        // Use our own paginator view
        Paginator::defaultView('voyager-frontend::partials.pagination');
    }
}
