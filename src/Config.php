<?php
namespace lefuturiste\config;

class Config
{
	public $config;
	/**
	 * Get all configs keys
	 *
	 * @param string $dir (slash is required)
	 * @return mixed
	 */
	public function __construct($dir = __DIR__ . '/config/', $envFilePath = false)
	{
		if (!$envFilePath) {
			$envFilePath = dirname(__DIR__);
		}

		//instance of dotenv lib
		//racine of the project we could find the .env file
		$dotenv = new \Dotenv\Dotenv($envFilePath);
		$dotenv->load();

		//find all file with .php extension in $dir
		$allConfigFiles = include $dir . 'map.php';

		//include it in the config array
		$i = 0;
		$config = [];
		while ($i < count($allConfigFiles)) {
			$config = array_merge($config, include $dir . $allConfigFiles[$i]);
			$i++;
		}

		//finish and return
		$this->config = $config;
	}
}