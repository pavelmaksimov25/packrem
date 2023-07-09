<?php


declare(strict_types=1);

namespace PyzTest\Zed\Touch\Business;

use Codeception\Test\Unit;
use Orm\Zed\Touch\Persistence\SpyTouchQuery;

/**
 * Auto-generated group annotations
 *
 * @group PyzTest
 * @group Zed
 * @group Touch
 * @group Business
 * @group TouchTest
 * Add your own group annotations below this line
 */
class TouchTest extends Unit
{
    /**
     * @return void
     */
    public function testDatabaseAccessWorks(): void
    {
        $query = SpyTouchQuery::create();
        $query->count();
    }
}
