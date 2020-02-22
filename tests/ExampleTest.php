<?php

namespace Nickfairchild\StripeConnect\Tests;

use Orchestra\Testbench\TestCase;
use Nickfairchild\StripeConnect\StripeConnectServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [StripeConnectServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
