<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/bingo.php');

$bingo= new \MyApp\bingo();
$nums=$bingo->create();

/*
$nums[][]
B: $nums[0]  1-15
I: $nums[1]  16-30
N: $nums[2]  31-45
G: $nums[3]  46-60
O: $nums[4]  61-75

$nums[$i]  $i * 15 + 1 ～ $i * 15 + 15
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BINGO</title>
    <link rel="stylesheet" href="bingo.css">
</head>
<body>
  <div id="container">
    <table>
     <tr>
       <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
     </tr>

       <?php for($i=0; $i<5; $i++): ?>
     <tr>
         <?php for($j=0; $j<5; $j++): ?>
           <td><?= h($nums[$j][$i]); ?></td>
         <?php endfor; ?>
     </tr>
       <?php endfor; ?>

   </table>

  </div>
    
</body>
</html>