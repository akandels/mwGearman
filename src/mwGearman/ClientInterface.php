<?php

namespace mwGearman;

interface ClientInterface
{
    // task related
    public function addTask(\mwGearman\Task $task);
    public function doTask(\mwGearman\Task $task);
    public function runTasks();

    // global task callbacks (tasks additionally can have callbacks)
    /**
     * @todo implementation of callbacks
    public function clearCallbacks();
    public function getCallbacks($type = null);
    public function setCallback($type, $callback);
    public function setCallbacks(array $callbacks);
     */

    // application specific
    public function getContext();
    public function setContext($context);
    public function getTimeout();
    public function setTimeout($timeout);

    public function ping($workload);
}
