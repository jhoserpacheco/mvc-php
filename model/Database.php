<?php
class Database {

	public static function start() {

		$pdo = new PDO('mysql:host=localhost;dbname=semillero;charset=utf8', 'root', '');
    	$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	return $pdo;

	}
}
?>
