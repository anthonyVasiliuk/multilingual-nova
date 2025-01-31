<?php

namespace Anthonyvasiliuk\MultilingualNova;

use Illuminate\Http\Request;
use Laravel\Nova\Tool;

class NovaLanguageTool extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('nova-language-tool::navigation');
    }


    public function menu(Request $request)
    {

    }
}
