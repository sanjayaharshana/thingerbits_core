<?php

namespace Modules\Core\Listeners;

use Illuminate\Support\Facades\Artisan;

class ClearConfigCache
{
    /**
     * Handle the event.
     *
     * @return void
     */
    public function handle()
    {
        Artisan::call('config:clear');
    }
}
