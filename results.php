<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link rel  = "stylesheet", href = "main.css">
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jQuery/jquery-1.11.0.min.js"></script>
        <div class = "header">
            <div class ="nav">
                <div class = "logo" >
                    <a href = "#">Диплом</a>
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
	$themes=dataBase("SELECT * FROM results");
		
	// виведення всіх опитувань
	foreach ($themes as $one)
	{		
	   ?>
        <>
        <a type="text" class="form-control" id="text" name="text" 
               
           href="output_test.php?id=<?php echo $one['id'];?>">
           
                      <?echo $one['result'];?></a><br>
        
        <?
	}?>
</div>