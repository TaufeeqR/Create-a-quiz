<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<?php 

$answer1 = $_POST['q1-answers'];
$answer2 = $_POST['q2-answers'];
$answer3 = $_POST['q3-answers'];
$answer4 = $_POST['q4-answers'];
$answer5 = $_POST['q5-answers'];
$answer6 = $_POST['q6-answers'];
$answer7 = $_POST['q7-answers'];
$answer8 = $_POST['q8-answers'];
$answer9 = $_POST['q9-answers'];
$answer10 = $_POST['q10-answers'];
$answer11 = $_POST['q11-answers'];
$answer12 = $_POST['q12-answers'];
$answer13 = $_POST['q13-answers'];
$answer14 = $_POST['q14-answers'];
$answer15 = $_POST['q15-answers'];
$answer16 = $_POST['q16-answers'];
$answer17 = $_POST['q17-answers'];
$answer18 = $_POST['q18-answers'];
$answer19 = $_POST['q19-answers'];
$answer20 = $_POST['q20-answers'];

$total1 = 0;
$total2 = 0;
$total3 = 0;
$total4 = 0;

if ($answer1 == "1") { $total1 = $total1 + 0; $total4 = $total4 + 0; }
if ($answer1 == "2") { $total2 = $total2 + 0; $total3 = $total3 + 0; }
if ($answer1 == "3") { $total3 = $total3 + 0; $total1 = $total1 + 0; }
if ($answer1 == "4") { $total4 = $total4 + 1; $total1 = $total1 + 0; }

if ($answer2 == "1") { $total1 = $total1 + 1; $total4 = $total4 + 0; }
if ($answer2 == "2") { $total2 = $total2 + 0; $total3 = $total3 + 0; }
if ($answer2 == "3") { $total3 = $total3 + 0; $total1 = $total1 + 0; }
if ($answer2 == "4") { $total4 = $total4 + 0; $total1 = $total1 + 0; }

if ($answer3 == "1") { $total1 = $total1 + 0; $total4 = $total4 + 0; }
if ($answer3 == "2") { $total2 = $total2 + 1; $total3 = $total3 + 0; }
if ($answer3 == "3") { $total3 = $total3 + 0; $total1 = $total1 + 0; }
if ($answer3 == "4") { $total4 = $total4 + 0; $total1 = $total1 + 0; }

if ($answer4 == "1") { $total1 = $total1 + 0; $total4 = $total4 + 0; }
if ($answer4 == "2") { $total2 = $total2 + 0; $total3 = $total3 + 0; }
if ($answer4 == "3") { $total3 = $total3 + 1; $total1 = $total1 + 0; }
if ($answer4 == "4") { $total4 = $total4 + 0; $total1 = $total1 + 0; }

if ($answer5 == "1") { $total1 = $total1 + 1; $total4 = $total4 + 0; }
if ($answer5 == "2") { $total2 = $total2 +0; $total3 = $total3 + 0; }
if ($answer5 == "3") { $total3 = $total3 + 0; $total1 = $total1 + 0; }
if ($answer5 == "4") { $total4 = $total4 + 0; $total1 = $total1 + 0; }

if ($answer6 == "1") { $total1 = $total1 + 0; $total4 = $total + 0; }
if ($answer6 == "2") { $total2 = $total2 + 1; $total3 = $total3 + 0; }
if ($answer6 == "3") { $total3 = $total3 + 0; $total1 = $total1 + 0; }
if ($answer6 == "4") { $total4 = $total4 + 0; $total1 = $total1 + 0; }

if ($answer7 == "1") { $total1 = $total1 + 0; $total4 = $total4 + 0; }
if ($answer7 == "2") { $total2 = $total2 + 0; $total3 = $total3 +0; }
if ($answer7 == "3") { $total3 = $total3 + 1; $total1 = $total1 + 0; }
if ($answer7 == "4") { $total4 = $total4 + 0; $total1 = $total1 + 0; }

if ($answer8 == "1") { $total1 = $total1 + 0; $total4 = $total4 + 0; }
if ($answer8 == "2") { $total2 = $total2 + 1; $total3 = $total3 + 0; }
if ($answer8 == "3") { $total3 = $total3 + 0; $total1 = $total1 + 0; }
if ($answer8 == "4") { $total4 = $total4 + 0; $total1 = $total1 + 0; }

if ($answer9 == "1") { $total1 = $total1 + 0; $total4 = $total4 + 0; }
if ($answer9 == "2") { $total2 = $total2 + 0; $total3 = $total3 + 0; }
if ($answer9 == "3") { $total3 = $total3 + 1; $total1 = $total1 + 0; }
if ($answer9 == "4") { $total4 = $total4 + 0; $total1 = $total1 + 0; }

if ($answer10 == "1") { $total1 = $total1 + 0; $total4 = $total4 + 0; }
if ($answer10 == "2") { $total2 = $total2 + 1; $total3 = $total3 + 0; }
if ($answer10 == "3") { $total3 = $total3 + 0; $total1 = $total1 + 0; }
if ($answer10 == "4") { $total4 = $total4 + 0; $total1 = $total1 + 0; }

if ($answer11 == "1") { $total1 = $total1 + 0; $totalD = $totalD + 0; }
if ($answer11 == "B") { $totalB = $totalB + 0; $totalC = $totalC + 0; }
if ($answer11 == "C") { $totalC = $totalC + 0; $total1 = $total1 + 0; }
if ($answer11 == "D") { $totalD = $totalD + 1; $total1 = $total1 + 0; }

if ($answer12 == "1") { $total1 = $total1 + 1; $totalD = $totalD + 0; }
if ($answer12 == "B") { $totalB = $totalB + 0; $totalC = $totalC + 0; }
if ($answer12 == "C") { $totalC = $totalC + 0; $total1 = $total1 + 0; }
if ($answer12 == "D") { $totalD = $totalD + 0; $total1 = $total1 + 0; }

if ($answer13 == "1") { $total1 = $total1 + 0; $totalD = $totalD + 0; }
if ($answer13 == "B") { $totalB = $totalB + 0; $totalC = $totalC + 0; }
if ($answer13 == "C") { $totalC = $totalC + 1; $total1 = $total1 + 0; }
if ($answer13 == "D") { $totalD = $totalD + 0; $totalA = $totalA + 0; }

if ($answer14 == "A") { $totalA = $totalA + 0; $totalD = $totalD + 0; }
if ($answer14 == "B") { $totalB = $totalB + 0; $totalC = $totalC + 0; }
if ($answer14 == "C") { $totalC = $totalC + 1; $totalA = $totalA + 0; }
if ($answer14 == "D") { $totalD = $totalD + 0; $totalA = $totalA + 0; }

if ($answer15 == "A") { $totalA = $totalA + 1; $totalD = $totalD + 0; }
if ($answer15 == "B") { $totalB = $totalB + 0; $totalC = $totalC + 0; }
if ($answer15 == "C") { $totalC = $totalC + 0; $totalA = $totalA + 0; }
if ($answer15 == "D") { $totalD = $totalD + 0; $totalA = $totalA + 0; }

if ($answer16 == "A") { $totalA = $totalA + 0; $totalD = $totalD + 0; }
if ($answer16 == "B") { $totalB = $totalB + 1; $totalC = $totalC + 0; }
if ($answer16 == "C") { $totalC = $totalC + 0; $totalA = $totalA + 0; }
if ($answer16 == "D") { $totalD = $totalD + 0; $totalA = $totalA + 0; }

if ($answer17 == "A") { $totalA = $totalA + 1; $totalD = $totalD + 0; }
if ($answer17 == "B") { $totalB = $totalB + 0; $totalC = $totalC + 0; }
if ($answer17 == "C") { $totalC = $totalC + 0; $totalA = $totalA + 0; }
if ($answer17 == "D") { $totalD = $totalD + 0; $totalA = $totalA + 0; }

if ($answer18 == "A") { $totalA = $totalA + 0; $totalD = $totalD + 0; }
if ($answer18 == "B") { $totalB = $totalB + 1; $totalC = $totalC + 0; }
if ($answer18 == "C") { $totalC = $totalC + 0; $totalA = $totalA + 0; }
if ($answer18 == "D") { $totalD = $totalD + 0; $totalA = $totalA + 0; }

if ($answer19 == "A") { $totalA = $totalA + 0; $totalD = $totalD + 0; }
if ($answer19 == "B") { $totalB = $totalB + 0; $totalC = $totalC + 0; }
if ($answer19 == "C") { $totalC = $totalC + 0; $totalA = $totalA + 0; }
if ($answer19 == "D") { $totalD = $totalD + 1; $totalA = $totalA + 0; }

if ($answer20 == "A") { $totalA = $totalA + 1; $totalD = $totalD + 0; }
if ($answer20 == "B") { $totalB = $totalB + 0; $totalC = $totalC + 0; }
if ($answer20 == "C") { $totalC = $totalC + 0; $totalA = $totalA + 0; }
if ($answer20 == "D") { $totalD = $totalD + 0; $totalA = $totalA + 0; }


?>


</body>
</html>