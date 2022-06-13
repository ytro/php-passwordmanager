<?php

/* --
Author: Yann Trottier
File  : libs/model.class.php
Desc. : If connection is successful, provides a database handler 
		to perform queries.
*/

class Model {

    protected $dbh;
	protected $sth;
	
	function __construct() {
		$this->dbConnect();
	}
	
	//Create a new database handler
	function dbConnect() {
		try {
			$this->dbh = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS);
			$this->dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
		} catch (PDOException $e) {
			echo 'Database connection error';
		}
	}

	function query($query) {

		$this->sth = $this->dbh->prepare($query);
		//Do something, sanitize, etc.
		$this->sth->execute();
		
		//If query contains SELECT, return the object created by fetchAll()
		if (strpos($query, 'SELECT') !== false) {
			$result = $this->sth->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		//If query contains INSERT, returns the last inserted ID
		else if (strpos($query, 'INSERT') !== false) 
			return $this->dbh->lastInsertID();
	}
}
