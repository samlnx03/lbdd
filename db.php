-rw-rw-r-- 1 sperez sperez 240 Mar 24 11:17 db.php
-rw-rw-r-- 1 sperez sperez 712 Mar 24 11:12 index.php
-rw-rw-r-- 1 sperez sperez 330 Mar 24 11:53 numveces.php


sperez@ProxyNETLAB:~/public_html/q$ cat db.php 

<?php
class Escuela extends mysqli {
	private $host="localhost";
	private $user="sperez";
	private $pass="";
	private $db="sperez";
	
	function __construct(){
		parent::__construct($this->host, $this->user, $this->pass, $this->db);
	}
}
?>
