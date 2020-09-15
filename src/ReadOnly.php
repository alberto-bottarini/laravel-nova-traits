<?php

namespace AlbertoBottarini\LaravelNovaTraits;

use Illuminate\Http\Request;

trait ReadOnly
{
    use Uncreatable;
    use Unupdatable;
    use Undeletable;
}