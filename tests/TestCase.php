<?php

namespace Kanhaiyanigam05\ReviewRateable\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Kanhaiyanigam05\ReviewRateable\ReviewRateableServiceProvider;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            ReviewRateableServiceProvider::class,
        ];
    }
}
