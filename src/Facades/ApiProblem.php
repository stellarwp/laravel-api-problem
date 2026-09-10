<?php

declare(strict_types=1);

namespace ApiSkeletons\Laravel\ApiProblem\Facades;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Facade;
use Override;

/**
 * @method static array toArray()
 * @method static JsonResponse response(mixed ...$params)
 * @method static \ApiSkeletons\Laravel\ApiProblem\ApiProblem setDetailIncludesStackTrace(bool $flag)
 * @psalm-api
 */
class ApiProblem extends Facade
{
    #[Override]
    protected static function getFacadeAccessor(): string
    {
        return 'ApiProblem';
    }
}
