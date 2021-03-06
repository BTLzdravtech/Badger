<?php

declare(strict_types=1);

/*
 * This file is part of Cachet Badger.
 *
 * (c) apilayer GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Badger;

use CachetHQ\Badger\Badger;
use CachetHQ\Badger\Calculator\TextSizeCalculatorInterface;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;

/**
 * This is the service provider test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testBadgerIsInjectable()
    {
        $this->assertIsInjectable(Badger::class);
    }

    public function testCalculatorIsInjectable()
    {
        $this->assertIsInjectable(TextSizeCalculatorInterface::class);
    }
}
