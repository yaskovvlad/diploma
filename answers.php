<script type="text/javascript" src="jquery-1.12.3.min.js"></script>

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
<form action="question.php" method="post">
    
    <div class="question_block">
        
        <select name = 'test_name'>
        <?php 
        
        include 'query.php';
        
        
           // зчитування всіх опитувань
	$tests=dataBase("SELECT test_name,id FROM test");
		
    
	// виведення всіх опитувань
	foreach ($tests as $one)
	{		
     
        ?><option>
        <?php 
        
        echo $one['test_name'];
        ?>
            
            </option><?
    }
        ?>
        
    </select> <br>   
        
    <input name="question_body" placeholder="Запитання"><br>
    
    <input class="one_answer" name="answers[]" placeholder="Варіант відповіді"><input type="radio" value = '1' name="true"><br>
    <input class="one_answer" name="answers[]"><input type="radio" value = '2' name="true"><br>
    <input class="one_answer" name="answers[]"><input type="radio" value = '3' name="true"><br>
    <input class="one_answer" name="answers[]"><input type="radio" value = '4' name="true"><br>

    
    

    
    </div>
    <div class="add_answer">Add answer</div>
    <button type="submit">OK</button>
</form>
    <? 
		// зчитування з бази даних
		$index=dataBase("SELECT * FROM test");
			
		// виведення даних
		foreach ($index as $one)
		{	
            //print_r($one);
        echo $one['test_name'];?><br><?
		}				
?>
</div>



<script>

    
    var addAnswer = function() {
    
        var allAnswer = $('.one_answer').size();
        
var one = '<input class="one_answer" name="answers[]"><input type="radio" value = "'+ allAnswer +' name="true"><br>';
        
        
         $('.question_block').append(one);
        
    };
    
    
    $('.add_answer').click(function() {
                           
        addAnswer();    
    }                          
                          );
    
    

</script>