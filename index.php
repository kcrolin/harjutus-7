<!DOCTYPE HTML>
  <head>
    <title>Praktikum 7</title>
    <meta charset="utf-8">
	
    <style>
      table, td, tr {border: 1px solid #ccc;
      border-collapse: collapse;}

      td { height:30px;
      width:200px;
	  padding:5px;
      }

      .attr {
      width: 100px;
      text-align:center;
      background: #088A85;
      color: #fff;}
    </style> 
  </head>
  
  <body>
     <h2>While loop</h2>
  <?php
    $count = 10;

    while ($count <= 100) {
        echo $count . "; " ;
        $count += 10;
    }
?>
<br>
 <?php
    $count = 100;

    while ($count <= 1000) {
        echo $count . ", " ;
        $count += 100;
    }
?>

    <h3>Infinite while loop</h3>
<?php

    // $count = 1;

    // while ($count <= 10) {
       //  echo $count;
	   // }
?>

    <h3>Conditional statements in while loop</h3>
<?php
    $count = 1;

    while ($count <= 10) {
        if ($count == 3) {
            echo "kolm, ";
        } 
		elseif ($count == 7) {
		    echo "seitse, ";
		}
		else {
            echo $count . ", ";
        }

        $count += 1;
    }
?>

    <h2>For loop</h2>
<?php
    for ($count = 1; $count <= 20; $count += 1) {
	if ($count % 2 == 0) {
	echo "Number {$count} on paaris arv.";
	echo "<br>";
	}
	else {
        echo "Number {$count} on paaritu arv";
		echo "<br>";
	}
    }
?> 	

    <h2>Foreach loop</h2>
<?php
    $companies = array("Tallinna Kaubamaja AS", "Swedbank AS", "Nortal AS", "Bramham Trade AS", "Kalev AS");
echo '<ul>';
    foreach ($companies as $company) {
        echo "<li>$company</li>";
    };
	echo '</ul>'
?>

<br>
<?php
$var = 0;

    $courses = array("Serveripoolsete veebirakenduste programmeerimine", "Veebitehnoloogiad", "Veebikujundus", "Ettevõtluse alused", "Sisuhaldussüsteemide kasutamine");
echo '<ul>';
    foreach ($courses as $course) {
	    $var ++;
        echo "<li>$var. $course</li>";
    };
	echo '</ul>'
?>	



      <table>
        <tbody>
         
<?php
    $contact = array(
        "first_name" => "Cärolin",
        "last_name" => "Karing",
        "email" => "carolin.karing@khk.ee",
		"age" => 21,
    );
  foreach ($contact as $attribute => $value ) {
  $attribute_formatted = ucfirst(str_replace("_", " ", $attribute));
        echo "
		 <tr>
		<td class='attr'>{$attribute_formatted}</td>
		<td>{$value}</td>";
    }?>
          </tr>

        </tbody>
      </table>

   </body>
</html>