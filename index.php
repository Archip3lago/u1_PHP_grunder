<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $smurf = "En liten katt";
        $smurf2 = " blev brutalt mördad";
        $smurf3 = " av Dor.";
        
        $nummer = 2;
        $nummer2 = 75757;
        $nummer3 = 3;
        
        $flyt = 10.5;
        $flyt2 = 10.99999999999;
        
        
        echo $nummer + $nummer2 + $nummer3;
        echo '<br>',$smurf, $smurf2, $smurf3;
        echo "<br>", $flyt;
        echo "<br>", $flyt2;
        
       if($nummer == 1){
           echo '<br>';
           echo "Ditt \$nummer är 1";
       }
       elseif($nummer == 2){
           echo '<br>';
           echo "Ditt nummer är tjock6t som fan";
       }
       else{
           echo '<br>';
           echo "Ditt nummer är inte 1";
       }
       
       switch($nummer2){
           case 2:
                   echo '<br>';
                   echo "två";
                   break;
           case 1:
               echo '<br>';
               echo "ett";
               break;
           case 75757:
               echo '<br>';
               echo "mycket";
               break;
           
       }
       
       $dor = "koss";
       
       if($dor <> "kiss"){
           echo '<br>';
           echo "dor är inte kiss";
       }else{
           echo '<br>';
           echo "Dor är kiss";
       }
        
        
        
        
        ?>
    </body>
</html>
