<?php

namespace Nfe\Validation\Tests;

use Nfe\Validation\ClientValidation;
use PHPUnit\Framework\TestCase;

class ClienteTest extends TestCase
{
    public function testClassExists()
    {
        $this->assertTrue(class_exists(ClientValidation::class));
    }
}