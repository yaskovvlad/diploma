<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link rel  = "stylesheet", href = "main.css">
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jQuery/jquery-1.11.0.min.js"></script>
        <div class = "header">
            <div class ="nav">
                <div class = "logo" >
                    <a href = "">Диплом</a>
                </div>
            <div class = "navbar">
                      <ul>
                        <li><a href="/answers/yeap.html">Головна</a></li>
                        <li><a href="#">Контакти</a></li>
                      </ul>
            </div>
            </div>
        </div>
<div class="content">
<?php 
	include "query.php";
    
     // зчитування всіх опитувань
	$test=dataBase("SELECT test_name FROM test WHERE id = {$_GET['id']}");
		
  
    echo $test[0]['test_name'];
    

    // зчитування всіх опитувань
	$questions=dataBase("SELECT id,question_body FROM question WHERE test_id = {$_GET['id']}");
		
	// виведення всіх тестів
	foreach ($questions as $one)
	{		
        $answers = dataBase("SELECT * FROM answers WHERE question_id = {$one['id']}");
        
        
        
     
    
       
?>

    
    <form action="update_question.php" method="post">
        <input name="id_page" value="<? echo $_GET['id']?>" hidden>
        <input name='question_id' value="<?php echo $one['id']?>" hidden>
    <input name="question" size="45px" id="question-id-<?php echo $one['id']?>" 
           value="<?php echo $one['question_body']?>"
        <br>
<br>
           
           
           
    <?php
        foreach($answers as $one_answer)
                    {
            
          
            ?>
           
<input size="45px" name='answers[]' id="answers-id-<?php echo $one_answer['id']?>" value = "<?php echo $one_answer['answer'];?>">
<input size="45px" hidden name='id_answers[]' value="<?php echo $one_answer['id']?>">
            
<br><br>
<?
                }
            ?>
    
<button type='submit' class="save-edit" id="save-edit-<?php echo $one['id']?>">
Обновити
</button>
        
    </form>
<br>
        <?
    }?></div>


<script>
    $(window).ready(function() {
    if (window.location.hash === '#update') {
        alert('Успішно оновлено');
        window.location.hash = '';
    }
        });
  </script>
    