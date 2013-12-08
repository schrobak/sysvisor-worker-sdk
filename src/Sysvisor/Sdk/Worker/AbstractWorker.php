<?php

/*
 * This file is part of the Sysvisor SDK package.
 *
 * (c) Sławomir Chrobak <slawomir.chrobak@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sysvisor\Sdk\Worker;

use Psr\Log\LoggerAwareInterface;

/**
 * SysVisor Abstract Worker
 *
 * Extend this class to use pre-defined implementation
 *
 * @author Sławomir Chrobak <slawomir.chrobak@gmail.com>
 * @package Sysvisor\Sdk\Worker
 * @version 0.1.0
 */
abstract class AbstractWorker implements WorkerInterface, LoggerAwareInterface
{

}