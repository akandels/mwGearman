<?php
/**
 * mwGearman
 *
 * @category mwGearman
 * @package mwGearman
 */

namespace mwGearman;

/**
 * Task Interface
 *
 * @category mwGearman
 * @package mwGearman
 */
interface Task
{
    /**
     * Get Priority
     *
     * @return string
     */
    public function getPriority();

    /**
     * Set Priority
     *
     * @param string $priority
     * @return \mwGearman\Task
     */
    public function setPriority($priority);

    /**
     * Is Background Task
     *
     * @return bool
     */
    public function isBackground();

    /**
     * Set Background
     *
     * @param bool $isBg
     * @return \mwGearman\Task
     */
    public function setBackground($isBg);

    /**
     * Get Function
     *
     * @return string
     */
    public function getFunction();

    /**
     * Set Function
     *
     * @param string $func
     * @return \mwGearman\Task
     * @throws \mwGearman\Exception\InvalidArgumentException
     */
    public function setFunction($func);

    /**
     * Get Workload
     *
     * @return string
     */
    public function getWorkload();

    /**
     * Set Workload
     *
     * @param string $workload
     * @return \mwGearman\Task
     * @throws \mwGearman\Exception\InvalidArgumentException
     */
    public function setWorkload($workload);

    /**
     * Get Unique
     *
     * @return scalar
     */
    public function getUnique();

    /**
     * Set Unique
     *
     * @param scalar $uniq
     * @return \mwGearman\Task
     * @throws \mwGearman\Exception\InvalidArgumentException
     */
    public function setUnique($uniq);

    /**
     * Get Context
     *
     * @return string
     */
    public function getContext();

    /**
     * Has Context
     *
     * @return bool
     */
    public function hasContext();

    /**
     * Set Context
     *
     * @param string $context
     * @return \mwGearman\Task
     * @throws \mwGearman\Exception\InvalidArgumentException
     */
    public function setContext($context);
}
