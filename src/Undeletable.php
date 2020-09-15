<?php

namespace AlbertoBottarini\LaravelNovaTraits;

use Illuminate\Http\Request;

trait Undeletable
{

    public function authorizedToDelete(Request $request)
    {
        return false;
    }
}
