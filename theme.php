<?php 
	session_start();
	include "query.php";
    include "create_test.php";
  //  include "add_client.php";
   // include "add_question.php";




$testname = $_POST['testname'];
$testtitle = $_POST['testtitle'];
$sql = mysql_query("INSERT INTO test (test_name,  test_title) VALUES ('{$testname}','{$testtitle}');");


/*

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$sql = mysql_query("INSERT INTO client (name, last_name) VALUES ('{$firstname}' , '{$lastname}');");


*/








		// зчитування з бази даних
		$index=dataBase("SELECT * FROM test");
			
		// виведення даних
		foreach ($index as $one)
		{	
            //print_r($one);
        echo $one['test_name'];?><br><?
		}				

?>



