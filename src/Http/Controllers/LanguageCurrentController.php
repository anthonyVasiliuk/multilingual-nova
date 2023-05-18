<?php

namespace Anthonyvasiliuk\MultilingualNova\Http\Controllers;

use Illuminate\Support\Facades\App;

class LanguageCurrentController extends Controller
{
    /**
     * @return string
     */
    public function __invoke()
    {
        return App::getLocale();
    }

}
