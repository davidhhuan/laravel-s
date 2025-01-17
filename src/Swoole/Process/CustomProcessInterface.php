<?php

namespace Hhxsv5\LaravelS\Swoole\Process;

use Swoole\Http\Server;
use Swoole\Process;

interface CustomProcessInterface
{
    /**
     * The name of process
     * @return string
     */
    public static function getName();

    /**
     * The run callback of process
     * @param Server $swoole
     * @param Process $process
     * @return void
     */
    public static function callback(Server $swoole, Process $process);

    /**
     * Trigger this method on receiving the signal SIGUSR1
     * @param Server $swoole
     * @param Process $process
     * @return mixed
     */
    public static function onReload(Server $swoole, Process $process);

    /**
     * Trigger this method on receiving the signal SIGTERM
     * @param Server $swoole
     * @param Process $process
     * @return mixed
     */
    public static function onStop(Server $swoole, Process $process);
}