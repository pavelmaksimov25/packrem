<?php
/**
 * This file is part of the Everon components.
 *
 * (c) Oliwier Ptak <everonphp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Everon\Component\Factory\Tests\Unit\Doubles;

use Everon\Component\Factory\Dependency\Setter;

class FuzzStub
{

    use Dependency\Foo;
    use Setter\Factory;

    /**
     * @param FooStub $Foo
     */
    public function __construct(FooStub $Foo)
    {
        $this->Foo = $Foo;
    }

}
