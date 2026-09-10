<?php

declare(strict_types=1);

namespace ApiSkeletons\Laravel\ApiProblem;

use Doctrine\Instantiator\Instantiator;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Override;

/** @psalm-api */
class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Register any application services.
     */
    #[Override]
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind('ApiProblem', static function () {
            return (new Instantiator())->instantiate(ApiProblem::class);
        });
    }
}
