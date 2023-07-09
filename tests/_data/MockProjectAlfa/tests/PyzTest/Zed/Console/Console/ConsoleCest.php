<?php


declare(strict_types=1);

namespace PyzTest\Zed\Console\Console;

use PHPUnit\Framework\Assert;
use PyzTest\Zed\Console\ConsoleConsoleTester;

/**
 * Auto-generated group annotations
 *
 * @group PyzTest
 * @group Zed
 * @group Console
 * @group Console
 * @group ConsoleCest
 * Add your own group annotations below this line
 */
class ConsoleCest
{
    /**
     * @param \PyzTest\Zed\Console\ConsoleConsoleTester $i
     *
     * @return void
     */
    public function testICanRunConsoleApplication(ConsoleConsoleTester $i): void
    {
        $i->wantTo('See that console is running');

        $output = $i->runConsoleApplication();
        Assert::assertRegExp('/Store/', $output);
        Assert::assertRegExp('/Environment/', $output);
    }
}
