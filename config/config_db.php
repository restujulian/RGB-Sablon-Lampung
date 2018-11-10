<?php
class database{
 
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "rgb_sablon";
	var $connect = false;
 
	function __construct(){ //untuk memberi nilai awal dari properti
		$this->connect = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
	}
	function showContacAdmin(){
		$sql = "SELECT * from admin";
		$d= mysqli_query($this->connect, $sql);
		$hasil = array();
		while($row = mysqli_fetch_array($d)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	function showPaket(){
		$sql = "SELECT * from paket ORDER BY id_paket DESC";
		$d= mysqli_query($this->connect, $sql);
		$hasil = array();
		while($row = mysqli_fetch_array($d)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	function showGaleri(){
		$sql = "SELECT * from galeri ORDER BY id_galeri DESC";
		$d= mysqli_query($this->connect, $sql);
		$hasil = array();
		while($row = mysqli_fetch_array($d)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	function countGaleri(){
		$sql = "SELECT count(*) as num from galeri";
		$d= mysqli_query($this->connect, $sql);
		$hasil = array();
		while($row = mysqli_fetch_array($d)){
			$hasil[] = $row;
		}
		return $hasil;
	}
}
?>