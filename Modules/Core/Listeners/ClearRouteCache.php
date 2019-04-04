<?php

namespace Modules\Core\Listeners;

use Illuminate\Support\Facades\Artisan;

class ClearRouteCache
{
    /**
     * Handle the event.
     *
     * @return void
     */
    public function handle()
    {
        Artisan::call('route:trans:clear');
    }
}
