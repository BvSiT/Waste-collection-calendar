<?php
	$localserver=false;
	if (isset($_SERVER)){
		if ($_SERVER['SERVER_NAME']=='localhost'){
			$localserver=true;	
		}
	}
	
	if ($localserver) {
		$host='localhost';
		$user='root';
		$password='';
		$dbname = 'wastecollection';
	}
	else {
		//28-6-2018 after all DBs have disappeared on mijndomein.nl
		$host='db.bvsit.nl';
		$user='md320754db427551';
		$password='3o6iyghf';
		$dbname = 'md320754db427551';
	}
	

	$variables = [
		'DB_HOST' => $host,
		'DB_USERNAME' => $user,
		'DB_PASSWORD' => $password,
		'DB_NAME' => $dbname
		//,'DB_PORT' => '3306',
	];

	foreach ($variables as $key => $value) {
		putenv("$key=$value");
	}
?>