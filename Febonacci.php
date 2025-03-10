<html>
    <head>
        <title>Febonancci</title>
        <body>
            
<?php 

     $v1 = 0;
     $v2 = 1;
     
     echo $v1 . '<br>';
     
     
     for ($i=0; $i < 2048; $i++) { 
         
         
         $temp = $v1;
     
         
         $v1 = $v2;
     
         
         $v2 = $temp + $v1;
     
         
         echo $v1 . '<br>';
     }
     
    ?>
        </body>
    </head>
</html> 