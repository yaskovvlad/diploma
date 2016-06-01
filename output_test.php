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
<div class = "content">

<?php 
	include "query.php";
    echo $_GET['id'];?><br><?


    // зчитування всіх опитувань
	$questions=dataBase("SELECT id,question_body FROM question WHERE test_id = {$_GET['id']}");
		
	// виведення всіх опитувань
	foreach ($questions as $one)
	{		
        $answers = dataBase("SELECT * FROM answers WHERE question_id = {$one['id']}");
        
       
    
        ?>

<?php echo $one['question_body']?>
        <select><br><br>
                <?php
                    foreach($answers as $one_answer)
                    {
            ?><option
                      
                      id = "<?
                    echo $one_answer['id'];
                    ?>"                      
                      >
            <?
                    echo $one_answer['answer'];
                    ?>
            </option><?
                }
            ?>
        </select>
    
<br>
        <?
	}?>
    <button type="submit">Закінчити</button>
</div>