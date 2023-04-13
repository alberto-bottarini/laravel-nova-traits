<?php

namespace AlbertoBottarini\LaravelNovaTraits;

use Illuminate\Http\Request;

trait Uncreatable
{

    public static function authorizedToReplicate(Request $request)
    {
        return false;
    }
}
