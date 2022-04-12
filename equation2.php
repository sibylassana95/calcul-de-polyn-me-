<?php
#Lecture des variables
$A= isset($_POST["var1"])?htmlspecialchars($_POST["var1"]):0;
$B= isset($_POST["var2"])?htmlspecialchars($_POST["var2"]):0;
$C= isset($_POST["var3"])?htmlspecialchars($_POST["var3"]):0;
?>
                     <p>Indiquer les valeurs a b c correspondantes au polynôme de forme ax<sup>2</sup>+bx+c</p>
                     <p align=center><form name="saisie" action="equation2.php" method='POST'>
                               <table border=1><tr><td>&nbsp;a&nbsp;</td><td>
                                   <input type="text" name="var1" value="<?PHP echo $A; ?>">
                               <tr><td>&nbsp;b&nbsp;</td>
                    <td><input type="text" name="var2" value="<?PHP echo $B; ?>">
                    <tr><td>&nbsp;c&nbsp;</td>
                        <td><input type="text" name="var3" value="<?PHP echo $C; ?>">
                       </table>
                       <input type=submit name="change_dep" value="Valider">
                      &nbsp;&nbsp;&nbsp;
                    <input type=reset value="Annuler"></form></p>
                      <?PHP
                      if ($A!=0) {
                        $D=$B*$B-4*$A*$C;
                echo 'Le déterminant vaut '.$D.'.<br/>';

                    if($D<0)
        {
                             echo 'Aucune solution !';
        }
          elseif($D==0)
          {
         echo 'Solution unique :<br/>-> X = ';
          $X=-$B/(2*$A);
                   echo $X;
      }
     elseif($D>=0)
         {
        echo 'Solution double :<br/>';
              $X1=(-$B-sqrt($D))/2*$A;
                $X2=(-$B+sqrt($D))/2*$A;
       echo '-> X1 = '.$X1;
          echo ('<br/>');
         echo '-> X2 = '.$X2;
    }
           }
?>