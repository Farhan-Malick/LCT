<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function change(Request $request)
{
    $language = $request->input('language');
    if (in_array($language, ['en', 'es'])) {
        App::setLocale($language);
        session()->put('locale', $language);
        // Debugging statements
        logger("Selected language: $language");
        logger("Current locale: ".App::getLocale());
    }
    return back();
}

}
