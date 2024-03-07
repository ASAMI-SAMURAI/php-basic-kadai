<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP_kadai_005</title>
 </head>
 
 <body>
     <p>
        <?php
        // 変数score1〜score10を作成する
        $score1 = 80;
        $score2 = 60;
        $score3 = 55;
        $score4 = 40;
        $score5 = 100;
        $score6 = 25;
        $score7 = 80;
        $score8 = 95;
        $score9 = 30;
        $score10 = 60 ;

         $scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];
        // 合計を算出する
        $sum = array_sum($scores);
        // 平均を算出する
        $average = array_sum($scores) / count($scores);
        echo $average;
        ?>
 </body>

 </html>