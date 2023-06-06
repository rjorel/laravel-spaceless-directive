<?php

namespace Rjorel\LaravelSpacelessBlade\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Rjorel\LaravelSpacelessBlade\ServiceProvider;

class TestCase extends OrchestraTestCase
{
    /**
     * @inheritDoc
     */
    protected function getPackageProviders($app): array
    {
        return [
            ServiceProvider::class
        ];
    }
}
