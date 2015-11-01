<?php
namespace Ethereal;

require_once dirname(dirname(__DIR__)).'/vendor/autoload.php';

class CacheTest extends \PHPUnit_Framework_TestCase
{
	public $cache;

	public function setup()
	{
		$this->cache = new Cache([
	        'scheme' => 'tcp',
	        'host'   => 'redis',
	        'port'   => 6379,
	    ], [
	    	'profile' => '3.0.3'
	    ]);
	    $this->cache->setNamespace('CacheTest');
	}

	public function testCacheRetrieve()
	{
		$varName = 'testfield';
		$varValue = 'testValue';
		$this->cache->set($varName, $varValue);
		$this->assertTrue(($this->cache->get($varName) == $varValue));
	}
}