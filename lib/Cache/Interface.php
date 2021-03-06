<?php
namespace Ethereal;

interface CacheInterface
{
  public function get($term);
  
  public function set($term, $value);
  
  public function setNamespace($term);
}
