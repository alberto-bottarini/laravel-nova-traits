<?php

namespace AlbertoBottarini\LaravelNovaTraits;

use Illuminate\Http\Request;

trait Unreplicable
{

    public static function authorizedToReplicate(Request $request)
    {
        return false;
    }
}
