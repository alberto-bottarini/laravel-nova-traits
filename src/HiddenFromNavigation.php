<?php

namespace AlbertoBottarini\LaravelNovaTraits;

use Illuminate\Http\Request;

trait HiddenFromNavigation
{

    public static function availableForNavigation(Request $request)
    {
        return false;
    }
}
