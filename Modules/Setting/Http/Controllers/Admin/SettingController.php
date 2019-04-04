<?php

namespace Modules\Setting\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Modules\Setting\Entities\Setting;
use Modules\Admin\Ui\Facades\TabManager;
use Modules\Setting\Http\Requests\UpdateSettingRequest;

class SettingController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $settings = setting()->all();
        $tabs = TabManager::get('settings');

        return view('setting::admin.settings.edit', compact('settings', 'tabs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSettingRequest $request)
    {
        setting($request->except('_token', '_method'));

        return redirect(non_localized_url())
            ->with('success', trans('admin::messages.resource_saved', ['resource' => trans('setting::settings.settings')]));
    }
}
