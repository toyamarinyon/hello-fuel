<?php
/**
 * The production database settings. These get merged with the global settings.
 */

$dbopts = parse_url(getenv('DATABASE_URL'));
return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"] . ';port=' . $dbopts["port"],
			'username'   => $dbopts["user"],
			'password'   => $dbopts["pass"],
		),
	),
);
