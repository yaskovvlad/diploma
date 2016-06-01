<?php
include "query.php";



$sql = mysql_query("INSERT INTO test (test_name,  test_title) VALUES ('{$_POST["testname"]}','{$_POST["testtitle"]}');");


?>
<script >
    
    alert('Ok');
    
    window.location.pathname = 'answers/yeap.html'
    </script>