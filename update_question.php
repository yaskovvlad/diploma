<?php
include 'query.php';







$sql = mysql_query("UPDATE question SET question_body='{$_POST['question']}' WHERE id = {$_POST['question_id']} ;");			

$allAnswers = $_POST['answers'];

$currentId = 0;
foreach($allAnswers as $oneAnswer) {
    $sql = mysql_query("UPDATE answers SET answer = '{$oneAnswer}' WHERE id = {$_POST['id_answers'][$currentId]};");
    $currentId++;
}


header('Location: edit_test.php?id='.$_POST['id_page'].'#update');



?>