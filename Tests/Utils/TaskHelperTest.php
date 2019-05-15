<?php

namespace Goksagun\SchedulerBundle\Tests\Utils;

use Goksagun\SchedulerBundle\Utils\TaskHelper;
use PHPUnit\Framework\TestCase;

class TaskHelperTest extends TestCase
{
    public function testParseName()
    {
        $actual = TaskHelper::parseName('foo:command bar --baz');

        $expected = ['foo:command', 'bar', '--baz'];

        $this->assertSame($expected, $actual);
    }

    public function testParseNameNotSame()
    {
        $actual = TaskHelper::parseName('foo:command bar --baz');

        $expected = ['foo:command', 'bar', '--buzz'];

        $this->assertNotSame($expected, $actual);
    }

    public function testGetCommandName()
    {
        $actual = TaskHelper::getCommandName('foo:command bar --baz');

        $expected = 'foo:command';

        $this->assertEquals($expected, $actual);
    }

    public function testGetCommandNameNotEquals()
    {
        $actual = TaskHelper::getCommandName('foo:command bar --baz');

        $expected = 'buzz:command';

        $this->assertNotEquals($expected, $actual);
    }
}