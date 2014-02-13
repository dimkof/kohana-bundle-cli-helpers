<?php defined('SYSPATH') or die('No direct script access.');

class Task_Cache extends Minion_Task {

	protected $_options = array(
		'clear' => NULL,
	);

	protected function _clear()
	{
		if (Cache::instance()->delete_all())
		{
			Minion_CLI::write(Minion_CLI::color('Cache has been deleted', 'green'));
		}
		else
		{
			Minion_CLI::write(Minion_CLI::color('Could not remove cache', 'red'));
		}
	}

	protected function _execute(array $params)
	{
		if (array_key_exists('clear', $params))
		{
			$this->_clear();
		}
	}
}
