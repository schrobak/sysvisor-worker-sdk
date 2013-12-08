<?php

/*
 * This file is part of the Sysvisor SDK package.
 *
 * (c) Sławomir Chrobak <slawomir.chrobak@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sysvisor\Sdk\Logger;

/**
 * SysVisor Logger Aware Interface
 *
 * @author Sławomir Chrobak <slawomir.chrobak@gmail.com>
 * @package Sysvisor\Sdk\Logger
 * @version 0.2.0
 */
interface LoggerAwareInterface extends \Psr\Log\LoggerAwareInterface
{
    public function getLogHandler();
} 