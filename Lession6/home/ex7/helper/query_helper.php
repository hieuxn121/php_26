<?php
require_once('../helper/connect_helper.php');
// Lấy dữ liệu từ một bảng
	function select($table, $columns = '*'){
		if ($columns == '*') {
			$query = "SELECT * FROM ". $table;
		}
		else if(is_array($columns))
		{
			$sub_string = '';
			foreach ($columns as $i => $column) {
				$sub_string .= $column;
				if ($i + 1 != count($columns)) {
					$sub_string .= ',';
				}
			}
			$query  = "SELECT " . $sub_string . "FROM" . $table;
		}
		else{
			exit();
		}
		$connection = connect();
		$result = $connection->query($query);

		$data = array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}

	function insert($table, $data){
		// Câu lệnh truy vấn
		$query = "INSERT INTO ".$table;
		$string_1 = '';
		$string_2 = '';
		$i = 0;

		foreach ($data as $column => $value) {
			$i++;

			$string_1 .= $column;
			if ($i != count($data)) {
				$string_1 .= ',';
			}
			$string_2 .= "'" . $value . "'";
			if ($i != count($data)) {
		 	 	$string_2 .= ',';
		 	}
		 }
		 $string = '('. $string_1 .')' . ' Value ' . '('. $string_2 .')';
		// Thực thi câu lệnh
		$query = $query . $string;
		$conn = connect();
		$status = $conn->query($query); 
		return $status;
	}

	function delete($table, $id){
		$query = "DELETE FROM "  . $table ." WHERE id = " . $id;
		$connection = connect();
		$status = $connection->query($query);
		return $status;
	}
	function update($table, $data, $id){
		$query = "UPDATE $table SET ";
		$string = '';
		$i=0;
		foreach ($data as $column => $value) {
			$i++;
			if ($i != count($data)) {
				$string .= $column . " = " . "'" . $value . "'" . ',';
			}
			else
				$string .= $column . " = " . "'" . $value . "'";
		}
		$query = $query . $string . " WHERE id = " . $id;
		$connection = connect();
		$status = $connection->query($query);
		return $status; 
	}
?>