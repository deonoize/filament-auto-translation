<?php

namespace Deonoize\FilamentAutoTranslation\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Deonoize\FilamentAutoTranslation\FilamentAutoTranslation
 */
class FilamentAutoTranslation extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Deonoize\FilamentAutoTranslation\FilamentAutoTranslation::class;
    }
}
