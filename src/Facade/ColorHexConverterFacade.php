<?php

namespace Aboodma\ColorHexConvert\Facade;

use Illuminate\Support\Facades\Facade;


class ColorHexConverterFacade extends Facade
{
   
    protected static function getFacadeAccessor()
    {
        return 'colorhexconverter';
    }
}