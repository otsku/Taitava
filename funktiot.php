<?php
function yhteys() {//hakee yhteyden databaseen
	$host ="localhost";
	$user = "root";
	$pass = "";
	$dbname = "taitaja3";

	$conn = new mysqli($host, $user, $pass, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	return $conn;
}

function kek() {
	$conn = yhteys();
	$sql="SELECT * FROM test";
	$result =  mysqli_query($conn, $sql);
	$i=0;
	while($row = mysqli_fetch_assoc($result)){
		$tulos[$i][0]=$row["id"];
		$tulos[$i][1]=$row["nimi"];
		$tulos[$i][2]=$row["jtn"];
		$tulos[$i][3]=$row["numero"];
		$i++;
	}
	return $tulos;
}
?>
<!--
	//alla olevalla koodilla saa informaatiota sql databasesta
	//ensin vaaditaan kirjasto jossa on kaikki sql liittyvät funktiot jonka jälkeen kutsutaan 

	require('./kirjasto/funktiot.php');
	$tulos=kek();
	echo $tulos[0][0];
	echo $tulos[0][1];
	echo $tulos[0][2];
	echo $tulos[0][3];

	-----------------------------------------------------------------------------------------------

	//alla olevalla koodilla lisätään uusia entryjä databaseen
	//ensin koodi tarkistaa onko laitettavat tiedot $_POST muuttujina
	//$slq muuttuja sisältää sql komennon jolla tiedot lisätään tietokantaan.
	//$sql muuttujaan voi myös laittaaesim DELETE komennon jolloin tietokannasta voi poistaa haluttuja tietoja.

	if(!empty($_POST['name']) && !empty($_POST['title']) && !empty($_POST['education']) && !empty($_POST['contact'])) {
		$name = $_POST['name'];
		$title = $_POST['title'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$school = $_POST['school'];
		$num_school = $_POST['num_school'];
		$num_teacher = $_POST['num_teacher'];
		$num_student = $_POST['num_student'];
		$education = $_POST['education'];

		$sql="INSERT INTO customer (customer_id, name, title, email, tel, name_school, num_school, num_teacher, num_student, education) VALUES (NULL, '$name', '$title', '$email', '$tel', '$school', '$num_school', '$num_teacher', '$num_student', '$education');";
		$conn = yhteys();
		$conn->query($sql);
		$conn->close();
-->
