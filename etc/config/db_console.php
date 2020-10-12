  
<?php
return [
	'class' => 'yii\db\Connection',
	'dsn' => 'mysql:host=barebone_mysql:3306;dbname=barebonedb',
	'username' => 'root',
	'password' => 'verysecret',
	'charset' => 'utf8',
	'enableSchemaCache' => true,
	'schemaCacheDuration' => 3600,
	'schemaCache' => 'cache'
];