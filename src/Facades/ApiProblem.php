<?php

declare(strict_types=1);

namespace ApiSkeletons\Laravel\ApiProblem\Facades;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Facade;

/**
 * @method static array toArray()
 * @method static JsonResponse response(string ...$params)
 * @method static \ApiSkeletons\Laravel\ApiProblem\ApiProblem setDetailIncludesStackTrace(bool $flag)
 */
class ApiProblem extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'ApiProblem';
    }
}
