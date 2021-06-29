<?php

namespace Siteorigin\LaravelOpenAI;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Siteorigin\LaravelOpenAI\LaravelOpenAI
 */
class LaravelOpenAIFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-openai';
    }
}
