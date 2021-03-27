<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<h1>Schaak boord</h1>

<table cellspacing="0" cellpadding="0" width="280px" style="background-color: red; margin: auto;">
<!-- <tr>
  <td height="35px" width="35px" bgcolor="#fff"></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr> -->

2 b
3 w
4 b
5 w

3 w
4 b

5 w



<?php

for($row=0; $row<=7; $row++ ){

  echo '<tr>';

  for ($i=0; $i<=7; $i++) { 
    if(){
      echo '<td height="35px" width="35px" bgcolor="#fff">' .$i. '</td>';
    }
    else{
      echo '<td height="35px" width="35px" bgcolor="#000" style="color: white;">' .$i. '</td>';
    }

  }

  echo '</tr>'; 

  

}


?>

</table>



</body>
</html>