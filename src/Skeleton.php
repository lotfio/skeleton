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

namespace Lotfio;

/**
 * Class Skeleton.
 */
class Skeleton
{
    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function negate()
    {
        return new self(-1 * $this->amount);
    }
}
