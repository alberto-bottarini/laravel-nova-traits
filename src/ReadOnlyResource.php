<?php

namespace AlbertoBottarini\LaravelNovaTraits;

use Illuminate\Http\Request;

trait ReadOnlyResource
{
    use Uncreatable;
    use Unupdatable;
    use Undeletable;
}