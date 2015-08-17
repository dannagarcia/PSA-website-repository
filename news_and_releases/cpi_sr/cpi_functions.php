<?php

	function error() {
		echo '<div class="align-center">
				<h4 class="text-light fg-crimson">Table Not Available...</h3>
			</div>';
	}

	function generateTable1($tablename,$month, $year1, $year2) {			
	
        if(!file_exists($tablename)) {
            error();
            return;
            
        }
            $table1 = fopen($tablename, "r");
        										
    		$line;
    		echo '<table class="table border bd-grayLighter no-padding bordered align-center">';
    		echo '<tr>';
    		echo '<th style="padding:1%" class="bd-grayLighter" rowspan="2">Province</th>';
        	echo '<th style="padding:1%" class="bd-grayLighter" colspan="2">'.$month.'</th>'; //change month

        	echo '<th style="padding:1%" class="bd-grayLighter" rowspan="2">Index Point Change</th>';
        	echo '</tr>';
        	echo '<tr>
        	<th style="padding:1%" class="bd-grayLighter">'.$year1.'</th>
        	<th style="padding:1%" class="bd-grayLighter">'.$year2.'</th></tr>';

        	while(!feof($table1)) {
        		echo "<tr>";
        		$line=fgetcsv($table1);
        		$province = explode(',', $line[0]);
        		$year1 = explode(',', $line[1]);
        		$year2 = explode(',', $line[2]);
        		$indexPointChange = explode(',', $line[3]);

        		echo '<td style="padding:1%" class="bd-grayLighter">';
        		echo $province[0];
        		echo '</td>';

        		echo '<td style="padding:1%" class="bd-grayLighter">';
        		echo $year1[0];
        		echo '</td>';

        		echo '<td style="padding:1%" class="bd-grayLighter">';
        		echo $year2[0];
        		echo '</td>';

        		echo '<td style="padding:1%" class="bd-grayLighter">';
        		echo $indexPointChange[0];
        		echo '</td>';
        		echo '</tr>';
        	}
        	fclose($table1);
        	echo '</table>';
    }

    function generateTable2($tablename) {
		
        if(!file_exists($tablename)) {
            error();
            return;
            
        }
        $table2 = fopen($tablename, "r");
		$line;

		echo '<table class="table border bd-grayLighter no-padding bordered align-center">';
		echo '
				<tr>
	    		<th style="padding:1%" class="bd-grayLighter" rowspan="2">Commodity Group</th>
	    		<th style="padding:1%" class="bd-grayLighter" colspan="7">Province</th>
	        	</tr>
	        	<tr>
	        		<th style="padding:1%" class="bd-grayLighter">CAR</th>
	        		<th style="padding:1%" class="bd-grayLighter">Abra</th>
	        		<th style="padding:1%" class="bd-grayLighter">Apayao</th>
	        		<th style="padding:1%" class="bd-grayLighter">Benguet</th>
	        		<th style="padding:1%" class="bd-grayLighter">Ifugao</th>
	        		<th style="padding:1%" class="bd-grayLighter">Kalinga</th>
	        		<th style="padding:1%" class="bd-grayLighter">Mt. Province</th>
	        	</tr>
			';
		while(!feof($table2)) {
			echo "<tr>";
			$line=fgetcsv($table2);
			$province = explode(',', $line[0]);
			$car = explode(',', $line[1]);
			$abra = explode(',', $line[2]);
			$apayao = explode(',', $line[3]);
			$benguet = explode(',', $line[4]);
			$ifugao = explode(',', $line[5]);
			$kalinga = explode(',', $line[6]);
			$mt_prov = explode(',', $line[7]);


			echo '<td style="padding:1%" class="bd-grayLighter">';
			echo $province[0];
			echo '</td>';

			echo '<td style="padding:1%" class="bd-grayLighter">';
			echo $car[0];
			echo '</td>';

			echo '<td style="padding:1%" class="bd-grayLighter">';
			echo $abra[0];
			echo '</td>';

			echo '<td style="padding:1%" class="bd-grayLighter">';
			echo $apayao[0];
			echo '</td>';

			echo '<td style="padding:1%" class="bd-grayLighter">';
			echo $benguet[0];
			echo '</td>';

			echo '<td style="padding:1%" class="bd-grayLighter">';
			echo $ifugao[0];
			echo '</td>';

			echo '<td style="padding:1%" class="bd-grayLighter">';
			echo $kalinga[0];
			echo '</td>';

			echo '<td style="padding:1%" class="bd-grayLighter">';
			echo $mt_prov[0];
			echo '</td>';

			echo '</tr>';
		}
		fclose($table2);
		echo '</table>';
    }

    function generateTable3($tableName, $month_a, $month_b) {
    	
        if(!($tableName)) {
            error();
            return;
            
        }
        $table3 = fopen($tableName, "r");
    	$line;
    	echo '<table class="table border bd-grayLighter no-padding bordered align-center">';
    	echo '
    			<tr>
        		<th style="padding:1%" class="bd-grayLighter" rowspan="2">Commodity Group</th>
        		<th style="padding:1%" class="bd-grayLighter" colspan="2">Inflation Rates</th>
            	</tr>
            	<tr>
            		<th style="padding:1%" class="bd-grayLighter">'.$month_a.'</th>
            		<th style="padding:1%" class="bd-grayLighter">'.$month_b.'</th>
            	</tr>';


    	while(!feof($table3)) {
    		echo "<tr>";
    		$line=fgetcsv($table3);
    		$comgroup = explode(',', $line[0]);
    		$month_x = explode(',', $line[1]);
    		$month_y = explode(',', $line[2]);
    	

    		echo '<td style="padding:1%" class="bd-grayLighter">';
    		echo $comgroup[0];
    		echo '</td>';

    		echo '<td style="padding:1%" class="bd-grayLighter">';
    		echo $month_x[0];
    		echo '</td>';

    		echo '<td style="padding:1%" class="bd-grayLighter">';
    		echo $month_y[0];
    		echo '</td>';

    		
    		echo '</tr>';
    	}
    	fclose($table3);
    	echo '</table>';
    }

    function generateTable4($tableName, $month_a, $month_b) {
    	
        if(!($tableName)) {
            error();
            return;
            
        }
        $table4 = fopen($tableName, "r");
												
		$line;

    	echo '<table class="table border bd-grayLighter no-padding bordered align-center">';
    	echo '
    			<tr>
        		<th style="padding:1%" class="bd-grayLighter" rowspan="2">Commodity Group</th>
        		<th style="padding:1%" class="bd-grayLighter" colspan="2">Inflation Rates</th>
            	</tr>
            	<tr>';
            	echo	'<th style="padding:1%" class="bd-grayLighter">' . $month_a . '</th>';
            	echo	'<th style="padding:1%" class="bd-grayLighter">' . $month_b . '</th>';
            	echo '</tr>';

    	while(!feof($table4)) {
    		echo "<tr>";
    		$line=fgetcsv($table4);
    		$comgroup = explode(',', $line[0]);
    		$month_x = explode(',', $line[1]);
    		$month_y = explode(',', $line[2]);
    	

    		echo '<td style="padding:1%" class="bd-grayLighter">';
    		echo $comgroup[0];
    		echo '</td>';

    		echo '<td style="padding:1%" class="bd-grayLighter">';
    		echo $month_x[0];
    		echo '</td>';

    		echo '<td style="padding:1%" class="bd-grayLighter">';
    		echo $month_y[0];
    		echo '</td>';

    		
    		echo '</tr>';
    	}
    	fclose($table4);
    	echo '</table>'; 
    }

    function generateTable5($tableName, $year1, $year2, $month_a, $month_b) {
    	
        if(!($tableName)) {
            error();
            return;
            
        }
        $table5 = fopen($tableName, "r");
    	$line;

    	echo '<table class="table border bd-grayLighter no-padding bordered align-center">';
    	echo '
    			<tr>
        		<th style="padding:1%" class="bd-grayLighter" rowspan="2">Food Items</th>
        		<th style="padding:1%" class="bd-grayLighter" colspan="2">'.$year1.'</th>
        		<th style="padding:1%" class="bd-grayLighter" colspan="2">'.$year2.'</th>
        		<th style="padding:1%" class="bd-grayLighter" colspan="2">Inflation Rates</th>
            	</tr>
            	<tr>
            		<th style="padding:1%" class="bd-grayLighter">'.$month_a.'</th>
            		<th style="padding:1%" class="bd-grayLighter">'.$month_b.'</th>
            		<th style="padding:1%" class="bd-grayLighter">'.$month_a.'</th>
            		<th style="padding:1%" class="bd-grayLighter">'.$month_b.'</th>
            		<th style="padding:1%" class="bd-grayLighter">Current</th>
            		<th style="padding:1%" class="bd-grayLighter">Previous</th>
            	</tr>
    		';
    	while(!feof($table5)) {
    		echo "<tr>";
    		$line=fgetcsv($table5);
    		$foodItems = explode(',', $line[0]);
    		$month_x = explode(',', $line[1]);
    		$month_y = explode(',', $line[2]);
    		$month_j = explode(',', $line[3]);
    		$month_k = explode(',', $line[4]);
    		$current = explode(',', $line[5]);
    		$previous = explode(',', $line[6]);


    		echo '<td style="padding:1%" class="bd-grayLighter">';
    		echo $foodItems[0];
    		echo '</td>';

    		echo '<td style="padding:1%" class="bd-grayLighter">';
    		echo $month_x[0];
    		echo '</td>';

    		echo '<td style="padding:1%" class="bd-grayLighter">';
    		echo $month_y[0];
    		echo '</td>';

    		echo '<td style="padding:1%" class="bd-grayLighter">';
    		echo $month_j[0];
    		echo '</td>';

    		echo '<td style="padding:1%" class="bd-grayLighter">';
    		echo $month_k[0];
    		echo '</td>';

    		echo '<td style="padding:1%" class="bd-grayLighter">';
    		echo $current[0];
    		echo '</td>';

    		echo '<td style="padding:1%" class="bd-grayLighter">';
    		echo $previous[0];
    		echo '</td>';

    		echo '</tr>';
    	}
    	fclose($table5);
    	echo '</table>';
    }

    function generateTable5a($tableName, $year1, $year2, $month_a, $month_b, $month_c) {
        
        if(!($tableName)) {
            error();
            return;
            
        }
        $table5 = fopen($tableName, "r");
        $line;

        echo '<table class="table border bd-grayLighter no-padding bordered align-center">';
        echo '
                <tr>
                <th style="padding:1%" class="bd-grayLighter" rowspan="2">Food Items</th>
                <th style="padding:1%" class="bd-grayLighter" colspan="2">'.$year1.'</th>
                <th style="padding:1%" class="bd-grayLighter" colspan="2">'.$year2.'</th>
                <th style="padding:1%" class="bd-grayLighter" colspan="2">Inflation Rates</th>
                </tr>
                <tr>
                    <th style="padding:1%" class="bd-grayLighter">'.$month_a.'</th>
                    <th style="padding:1%" class="bd-grayLighter">'.$month_b.'</th>
                    <th style="padding:1%" class="bd-grayLighter">'.$month_a.'</th>
                    <th style="padding:1%" class="bd-grayLighter">'.$month_c.'</th>
                    <th style="padding:1%" class="bd-grayLighter">Current</th>
                    <th style="padding:1%" class="bd-grayLighter">Previous</th>
                </tr>
            ';
        while(!feof($table5)) {
            echo "<tr>";
            $line=fgetcsv($table5);
            $foodItems = explode(',', $line[0]);
            $month_x = explode(',', $line[1]);
            $month_y = explode(',', $line[2]);
            $month_j = explode(',', $line[3]);
            $month_k = explode(',', $line[4]);
            $current = explode(',', $line[5]);
            $previous = explode(',', $line[6]);


            echo '<td style="padding:1%" class="bd-grayLighter">';
            echo $foodItems[0];
            echo '</td>';

            echo '<td style="padding:1%" class="bd-grayLighter">';
            echo $month_x[0];
            echo '</td>';

            echo '<td style="padding:1%" class="bd-grayLighter">';
            echo $month_y[0];
            echo '</td>';

            echo '<td style="padding:1%" class="bd-grayLighter">';
            echo $month_j[0];
            echo '</td>';

            echo '<td style="padding:1%" class="bd-grayLighter">';
            echo $month_k[0];
            echo '</td>';

            echo '<td style="padding:1%" class="bd-grayLighter">';
            echo $current[0];
            echo '</td>';

            echo '<td style="padding:1%" class="bd-grayLighter">';
            echo $previous[0];
            echo '</td>';

            echo '</tr>';
        }
        fclose($table5);
        echo '</table>';
    }

    function generateTable5b($tableName, $year1, $year2, $month_a, $month_b, $month_c, $month_d) {
        
        if(!($tableName)) {
            error();
            return;
            
        }
        $table5 = fopen($tableName, "r");
        $line;

        echo '<table class="table border bd-grayLighter no-padding bordered align-center">';
        echo '
                <tr>
                <th style="padding:1%" class="bd-grayLighter" rowspan="2">Food Items</th>
                <th style="padding:1%" class="bd-grayLighter" colspan="2">'.$year1.'</th>
                <th style="padding:1%" class="bd-grayLighter" colspan="2">'.$year2.'</th>
                <th style="padding:1%" class="bd-grayLighter" colspan="2">Inflation Rates</th>
                </tr>
                <tr>
                    <th style="padding:1%" class="bd-grayLighter">'.$month_a.'</th>
                    <th style="padding:1%" class="bd-grayLighter">'.$month_b.'</th>
                    <th style="padding:1%" class="bd-grayLighter">'.$month_c.'</th>
                    <th style="padding:1%" class="bd-grayLighter">'.$month_d.'</th>
                    <th style="padding:1%" class="bd-grayLighter">Current</th>
                    <th style="padding:1%" class="bd-grayLighter">Previous</th>
                </tr>
            ';
        while(!feof($table5)) {
            echo "<tr>";
            $line=fgetcsv($table5);
            $foodItems = explode(',', $line[0]);
            $month_x = explode(',', $line[1]);
            $month_y = explode(',', $line[2]);
            $month_j = explode(',', $line[3]);
            $month_k = explode(',', $line[4]);
            $current = explode(',', $line[5]);
            $previous = explode(',', $line[6]);


            echo '<td style="padding:1%" class="bd-grayLighter">';
            echo $foodItems[0];
            echo '</td>';

            echo '<td style="padding:1%" class="bd-grayLighter">';
            echo $month_x[0];
            echo '</td>';

            echo '<td style="padding:1%" class="bd-grayLighter">';
            echo $month_y[0];
            echo '</td>';

            echo '<td style="padding:1%" class="bd-grayLighter">';
            echo $month_j[0];
            echo '</td>';

            echo '<td style="padding:1%" class="bd-grayLighter">';
            echo $month_k[0];
            echo '</td>';

            echo '<td style="padding:1%" class="bd-grayLighter">';
            echo $current[0];
            echo '</td>';

            echo '<td style="padding:1%" class="bd-grayLighter">';
            echo $previous[0];
            echo '</td>';

            echo '</tr>';
        }
        fclose($table5);
        echo '</table>';
    }
?>