<?php

namespace AlbertoBottarini\LaravelNovaTraits;

use Illuminate\Http\Request;

trait Unviewable
{

    public function authorizedToView(Request $request)
    {
        return false;
    }
}
