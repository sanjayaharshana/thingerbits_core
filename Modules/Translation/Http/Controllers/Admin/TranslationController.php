<?php

namespace Modules\Translation\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Modules\Translation\Entities\Translation;

class TranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $translations = Translation::retrieve();

        return view('translation::admin.translations.index', compact('translations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param string $key
     * @return \Illuminate\Http\Response
     */
    public function update($key)
    {
        Translation::firstOrCreate(['key' => $key])
            ->translations()
            ->updateOrCreate(
                ['locale' => request('locale')],
                ['value' => request('value', '')]
            );

        return trans('admin::messages.resource_saved', ['resource' => trans('translation::translations.translation')]);
    }
}
