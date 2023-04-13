<?php

namespace AlbertoBottarini\LaravelNovaTraits;

use Illuminate\Http\Request;

trait Uncreatable
{

    public function authorizedToCreate(Request $request)
    {
        return false;
    }
}
