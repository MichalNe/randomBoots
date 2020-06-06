<?php

    require_once "DatabaseDAO.php";

function randomBoot(){
    $connect = mysqli_connect('localhost', 'root', '', 'buty') or die("Błąd połaczenia z bazą danych");

        #$dbDao = new DatabaseDAO('mysql.cba.pl', 'Nerwo', 'Mia221214',3306, 'xnerwo');

        #$query = mysqli_query($dbDao->connect(), "SELECT COUNT(numberOfBoot) AS ilosc FROM buty WHERE 1");

    	$query = mysqli_query($connect, "SELECT COUNT(numberOfBoot) AS ilosc FROM buty WHERE 1");

		$queryRows = mysqli_fetch_array($query);

		$numbers = range(1, $queryRows[0]);

		shuffle($numbers);

		$sliceArray = array_slice($numbers, 0, 6);

		$i = 1;
	    foreach ($sliceArray as $value){
            $queryGeneratedNumbers = mysqli_query($dbDao->connect(), "UPDATE wylosowane SET numberBoots = ".$value." WHERE id = ".$i);
            if($queryGeneratedNumbers){
                echo "dodano";
            }else{
                echo "|nie dodano| ";
            }
            $i++;
        }

        mysqli_close($connect);

		#$dbDao->disconnect();

		return $sliceArray;

	}


	function displayNumbers(){

        $connect = mysqli_connect('localhost', 'root', '', 'buty') or die("Błąd połaczenia z bazą danych");

        #$dbDao = new DatabaseDAO('mysql.cba.pl', 'Nerwo', 'Mia221214',3306, 'xnerwo');

        #$query = mysqli_query($dbDao->connect(), "SELECT numberBoots FROM wylosowane WHERE 1 ");
        $query = mysqli_query($connect, "SELECT numberBoots FROM wylosowane WHERE 1 ");

        $iterator = 1;

        while ($queryRow = mysqli_fetch_row($query)){
            echo "<div class='col-lg-2 mb-5'><img src='images/$queryRow[0].jpg' class='img-fluid' id='$iterator'></div>";
            $iterator++;
        }

        mysqli_close($connect);

      #  $dbDao->disconnect();

	}




	function check(){

		$todayDate = date("m/d/Y");
		$time = date("H");

		$numberOfDay = date('N', strtotime($todayDate));


		if($numberOfDay == 7 && $time == 24){
			randomBoot();
			return displayNumbers();
		}else{
			return displayNumbers();
		}

	}

?>