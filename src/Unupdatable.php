<?php

namespace AlbertoBottarini\LaravelNovaTraits;

use Illuminate\Http\Request;

trait Unupdatable
{

    public function authorizedToUpdate(Request $request)
    {
        return false;
    }
}
