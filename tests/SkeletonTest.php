<?php

/*
 * This file is a part of skelton package
 *
 * @package     skelton
 * @version     0.1.0
 * @author      Lotfio Lakehal <contact@lotfio.net>
 * @copyright   Lotfio Lakehal 2018
 * @license     MIT
 * @link        https://github.com/lotfio/skeleton
 *
 */

namespace Tests;

use Lotfio\Skeleton;
use PHPUnit\Framework\TestCase;

class SkeletonTest extends TestCase
{
    public function testCanBeNegated()
    {
        // Arrange
        $a = new Skeleton(1);

        // Act
        $b = $a->negate();

        // Assert
        $this->assertEquals(-1, $b->getAmount());
    }
}
