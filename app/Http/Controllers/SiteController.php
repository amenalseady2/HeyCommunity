<?php

namespace App\Http\Controllers;

use App\SitePage;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * SitePage
     */
    public function page($id)
    {
        $page = SitePage::findOrFail($id);

        if (!$page) abort(404);

        return view('site.page', compact('page'));
    }

    /**
     * About page
     */
    public function about()
    {
        $page = SitePage::where('unique_name', 'about')->first();

        if (!$page) abort(404);

        return view('site.page', compact('page'));
    }

    /**
     * Help page
     */
    public function help()
    {
        $page = SitePage::where('unique_name', 'help')->first();

        if (!$page) abort(404);

        return view('site.page', compact('page'));
    }

    /**
     * Terms page
     */
    public function terms()
    {
        $page = SitePage::where('unique_name', 'terms')->first();

        if (!$page) abort(404);

        return view('site.page', compact('page'));
    }

    /**
     * Privacy page
     */
    public function privacy()
    {
        $page = SitePage::where('unique_name', 'privacy')->first();

        if (!$page) abort(404);

        return view('site.page', compact('page'));
    }

    /**
     * Weather forecast page
     */
    public function weatherForecast()
    {
        return view('site.weather-forecast');
    }
}
