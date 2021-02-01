<?php

namespace Tests;

use Styde\Enlighten\Tests\EnlightenSetup;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, EnlightenSetup;

    protected function setUp() : void
    {
        parent::setUp();

        $this->setUpEnlighten();
    }
}
