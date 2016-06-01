<?php
include "query.php";




$test_id = dataBase("SELECT id FROM test WHERE test_name = '{$_POST["test_name"]}' LIMIT 1;");



$sql = mysql_query("INSERT INTO question (question_body,  test_id) VALUES ('{$_POST["question_body"]}','{$test_id[0]['id']}');");
$question_id = dataBase("SELECT id FROM question 
WHERE question_body = '{$_POST["question_body"]}' LIMIT 1;");




$all_answers = $_POST['answers'];




$current_id = 0;
foreach ($all_answers as $one_answer)
{
    
    $is_right = 0;

    if ($current_id === $_POST['true']-1)
    {
       $is_right = 1; 
    }
    
   
  
$sql = mysql_query("INSERT INTO answers (answer, question_id,  is_true) VALUES ('{$one_answer}', '{$question_id[0]['id']}','{$is_right}');");
    
      $current_id++;
    
  
}




?>
<script >
    
    alert('ДОдано');
    
    window.location.pathname = 'answers/yeap.html'
    </script>