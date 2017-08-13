<?php
declare(strict_types=1);

namespace Tests\Example;

use PHPUnit\Framework\TestCase;
use Example\Greeting;

class GreetingTest extends TestCase
{
    public function testItGreetsUserWhenNameProvided()
    {
        $greeting = new Greeting();
        $greeting->setArguments(
            [
                'file.php',
                'Ada Lovelace'
            ]
        );

        $expectedResult = 'Hello Ada Lovelace' . PHP_EOL;
        $actualResult = $greeting->sayHello();

        $this->assertEquals($expectedResult, $actualResult);
    }

    public function testItGreetsUserWhenNoNameProvided()
    {
        $greeting = new Greeting();
        $greeting->setArguments(
            [
                'file.php'
            ]
        );

        $expectedResult = 'Hello Stranger' . PHP_EOL;
        $actualResult = $greeting->sayHello();

        $this->assertEquals($expectedResult, $actualResult);
    }
}