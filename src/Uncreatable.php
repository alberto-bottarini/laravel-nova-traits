<?php

namespace AlbertoBottarini\LaravelNovaTraits;

use Illuminate\Http\Request;

trait Uncreatable
{

    public static function authorizedToCreate(Request $request)
    {
        return false;
    }
}
