<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP_kadai_005</title>
 </head>
 
 <body>
     <p>
        <?php
         $numbers = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];
        // 合計を算出する
        $sum = array_sum($numbers);
        
        $average = array_sum($numbers) / count($numbers);
        echo $average;
        ?>
 </body>

 </html>