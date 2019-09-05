<?php

namespace Bin;

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

use Composer\Script\Event;

/**
 * Installer
 *
 */
class Installer
{
    public static function postUpdate(Composer\Script\Event $event)
    {
        $composer = $event->getComposer();
        // do stuff
    }

    public static function postPackageInstall(Composer\Script\Event $event)
    {
        $installedPackage = $event->getOperation()->getPackage();
        // do stuff
    }

    public static function warmCache(Composer\Script\Event $event)
    {
        // make cache toasty
    }
}
