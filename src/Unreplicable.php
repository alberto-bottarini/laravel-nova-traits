<?php

namespace AlbertoBottarini\LaravelNovaTraits;

use Illuminate\Http\Request;

trait Unreplicable
{

    public function authorizedToReplicate(Request $request)
    {
        return false;
    }
}
