


<?php

			// $desc = $_POST['desc'];
			// $year = $_POST['year'];
			// $date_pub = $_POST['date_pub'];
			// $chapter = $_POST['chapter'];
			// $source = $_POST['source'];
				

		echo 'eherjekr'.$_REQUEST[$desc];	
		function db_connect() {
			$servername = 'localhost';
			$dbname	= 'online_db_psa';
			$username = 'root';
			$password = '';
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			    // set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Connected successfully"; 
		}

		function insert_data($desc, $year, $date_pub, $chapter, $source) {
			
			try {
				db_connect();
				 $sql = 'INSERT INTO rset (description, year, date_pub, chapter, source) VALUES ($desc, $year, $date_pub, $chapter, $source)';
				    $conn->exec($sql);
				    echo "New record created successfully";
			} catch (Exception $e) {
				 echo $sql . "<br>" . $e->getMessage();
			}
			$conn = null;
		}

		function delete_data($rset_id) {
			
			try {
				db_connect();
				$sql = 'DELETE FROM MyGuests WHERE id=$rset_id';
			    $conn->exec($sql);
			    echo "Record deleted successfully";
			} catch (Exception $e) {
				echo $sql . "<br>" . $e->getMessage();
			}
			$conn = null;
		}

		function checkYear ($year) {
			if ($year > 2005 && $year < 2020) {
				return $year;
			} else {
				echo "error";
			}
		}

		function checkChapter ($chapter) {
			if ($chapter > 1 ) {
				return $chapter;
			} else {
				echo "error,";
			}
		}
	
?>