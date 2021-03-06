<?php

/**
 * Interface for config writers
 *
 * Specifies the methods that a config writer must implement
 *
 * @package KO7
 * @author  Kohana Team
 * @copyright  (c) Kohana Team
 * @license    https://koseven.ga/LICENSE.md
 */
interface KO7_Config_Writer extends KO7_Config_Source
{
	/**
	 * Writes the passed config for $group
	 *
	 * Returns chainable instance on success or throws
	 * KO7_Config_Exception on failure
	 *
	 * @param string      $group  The config group
	 * @param string      $key    The config key to write to
	 * @param array       $config The configuration to write
	 * @return boolean
	 */
	public function write($group, $key, $config);

}
