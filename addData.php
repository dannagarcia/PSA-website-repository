<!DOCTYPE html>
<html>
<head>
	<title>PSA Add Data</title>
	<link rel="shortcut icon" href="/images/favicon.ico">
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link href="/css/metro.css" rel="stylesheet">
    <link href="/css/metro-icons.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <script src="/js/jquery-2.1.3.min.js"></script>
    <script src="/js/metro.js"></script>
    <script src="/js/ga.js"></script></head>
<body class="text-secondary fg-gray">

	<div class="margin10 no-margin-top grid condensed">
		<div id="header">
			 <script> 
				$(document).ready(function(){
				  $("#header").load("/includes/header.html"); 
				});
			</script> 
		</div>
		<div class="row padding20">
			<h1 class="text-light">Add Data</h1>
			<hr class="thin bg-grayLighter">
		</div>
		
		<div class="row cells12 padding20">
				<form class="cell colspan6" method="POST" action="javascript:void(0);">
					<div class="input-control text" data-role="input">
						<!-- <label class="block">Description</label> -->
		                <input name="desc" type="text" placeholder="Description" style="padding-right: 37px;">
		                <button class="button helper-button clear" tabindex="-1" type="button"><span class="mif-cross"></span></button>
                    </div>
                    <!-- <div class="input-control text" data-role="input">
						
		                <input name="year" type="text" placeholder="Year" style="padding-right: 37px;">
		                <button class="button helper-button clear" tabindex="-1" type="button"><span class="mif-cross"></span></button>
                    </div>

                    <div class="input-control text" data-role="input">
						
		                <input name="date" type="text" placeholder="Date Published" style="padding-right: 37px;">
		                <button class="button helper-button clear" tabindex="-1" type="button"><span class="mif-cross"></span></button>
                    </div>

                    <div class="input-control text" data-role="input">
						
		                <input name="chapter" type="text" placeholder="Chapter" style="padding-right: 37px;">
		                <button class="button helper-button clear" tabindex="-1" type="button"><span class="mif-cross"></span></button>
		            </div>
		            <div class="input-control file" data-role="input">
					    <input name="excel" placeholder="Choose File..." type="file">
					    <button class="button"><span class="mif-folder"></span></button>
					</div> -->
                    
                    <div class="padding30 place-right no-padding-bottom">
                    	<input class="bg-orange fg-white" type="reset" value="Reset">
                    	<input class="bg-emerald fg-white" type="submit" value="Submit">
                    </div>
				</form>
				<script type="text/javascript">
		    $("form").submit(function(){
		        var str = $(this).serialize();
		        $.ajax('addData.php', str, function(result){
		            alert(result); // the result variable will contain any text echoed by getResult.php
		        }
		        return(false);
		    });
		</script>
		</div>
		<div class="row padding20">
			<hr class="thin bg-grayLighter">
			<h1 class="text-light">Data table</h1>
		</div>

		<div class="row">
			
		</div>
	</div>

</body>
</html>


<?php

			// $desc = $_POST['desc'];
			// $year = $_POST['year'];
			// $date_pub = $_POST['date_pub'];
			// $chapter = $_POST['chapter'];
			// $source = $_POST['source'];
				

		echo $_POST[$desc];	
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