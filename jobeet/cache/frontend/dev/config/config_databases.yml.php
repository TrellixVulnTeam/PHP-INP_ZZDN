<?php
// auto-generated by sfDatabaseConfigHandler
// date: 2018/01/17 18:27:03

return array(
'propel' => new sfPropelDatabase(array (
  'classname' => 'DebugPDO',
  'dsn' => 'mysql:dbname=jobeet;host=localhost',
  'username' => 'root',
  'password' => NULL,
  'encoding' => 'utf8',
  'persistent' => true,
  'pooling' => true,
  'debug' => 
  array (
    'realmemoryusage' => true,
    'details' => 
    array (
      'time' => 
      array (
        'enabled' => true,
      ),
      'slow' => 
      array (
        'enabled' => true,
        'threshold' => 0.10000000000000001,
      ),
      'mem' => 
      array (
        'enabled' => true,
      ),
      'mempeak' => 
      array (
        'enabled' => true,
      ),
      'memdelta' => 
      array (
        'enabled' => true,
      ),
    ),
  ),
  'name' => 'propel',
)),);
