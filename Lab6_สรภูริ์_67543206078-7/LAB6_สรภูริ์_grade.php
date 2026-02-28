<?php
$color = "" ;
$score = 70 ;
$grade = "" ;
    if( $score >= 80 ) {
        $grade = 'A' ;
        $color = "#38ab38" ;
    }
    elseif ( $score >= 75 ){
        $grade = 'B+' ;
        $color = "#38ab38" ;
    }
    elseif ( $score >= 70 ){
        $grade = 'B' ;
        $color = "#38ab38" ;
    }
    elseif ( $score >= 65 ){
        $grade = 'C+' ;
        $color = "#fff700" ;
    }
    elseif ( $score >= 60 ){
        $grade = 'C' ;
        $color = "#fff700" ;
    }
    elseif ( $score >= 55 ){
        $grade = 'D+' ;
        $color = "#fff700" ;
    }
    elseif ( $score >= 50 ){
        $grade = 'D' ;
        $color = "#fff700" ;
    } else {
        $grade = 'F' ;
        $color = "#FF0000" ;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สรภูริ์ ทองจันทร์ 67543206078-7</title>
    <style>
        body {
            background-color: <?php echo $color?> ;
        }
    </style>
</head>
<body>
    
    <head>
        <h1 style="color:#FFFFFF ;" >LAB6 - Grade</h1>
    </head>
    
    <h2>Grade: <?php echo $grade ; ?></h2>

    <br><hr><br>

</body> 
</html>
