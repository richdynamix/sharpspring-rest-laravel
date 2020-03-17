<?php

namespace Richdynamix\SharpspringRestLaravel\Tests;

use Orchestra\Testbench\TestCase;
use Richdynamix\SharpspringRestLaravel\SharpspringRestLaravelServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [SharpspringRestLaravelServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
