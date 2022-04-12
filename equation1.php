<?php
#Lecture des variables
$A= isset($_POST["var1"])?htmlspecialchars($_POST["var1"]):0;
$B= isset($_POST["var2"])?htmlspecialchars($_POST["var2"]):0;
?>
                     <p>Indiquer les valeurs a b  correspondantes au polynôme de forme ax+b=0</p>
                     <p align=center><form name="saisie" action="equation1.php" method='POST'>
                               <table border=1><tr><td>&nbsp;a&nbsp;</td><td>
                                   <input type="text" name="var1" value="<?PHP echo $A; ?>">
                               <tr><td>&nbsp;b&nbsp;</td>
                    <td><input type="text" name="var2" value="<?PHP echo $B; ?>">
                    
                        
                       </table>
                       <input type=submit name="change_dep" value="Valider">
                      &nbsp;&nbsp;&nbsp;
                    <input type=reset value="Annuler"></form></p>
                      <?PHP
                      if ($A!=0 ) {
                        $x= -$B/$A;
                        
                      }
                            
                        if($B!=0) {
                                
                                echo" La solution de l'equation est : $x ";
                              } 

                              else echo "Pas de solution";
                             
                             ?>
                      