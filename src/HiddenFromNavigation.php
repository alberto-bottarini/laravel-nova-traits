<?php

namespace AlbertoBottarini\LaravelNovaTraits;

use Illuminate\Http\Request;

class HiddenFromNavigation
{

    public static function availableForNavigation(Request $request)
    {
        return false;
    }
}
