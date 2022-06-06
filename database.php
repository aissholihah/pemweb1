<?php 
	$koneksi1 = mysqli_connect('localhost', 'root', '', 'b');

	function query($query){
		global $koneksi1;

		$result = mysqli_query($koneksi1, $query);
		// $rows = [];

		// while($row = mysqli_fetch_array($result)){
		// 	$rows[] = $row;
		// }

		return $result;
	}
?>