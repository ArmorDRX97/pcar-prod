<?php

namespace App\Http\Middleware;

use App\Models\Language;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLanguage
{
    /**
     * use Illuminate\Support\Facades\Session;
     *
     * @param  Request  $request
     * @param  Closure  $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $langId = Session::get('frontLanguageChange');
        if (!empty($langId)) {
            App::setLocale(Language::find($langId)->iso_code);
        } else {
            $defaultLangId = getSettingValue()['front_language'];
            App::setLocale(Language::find($defaultLangId)->iso_code);
        }
        return $next($request);
    }
}
