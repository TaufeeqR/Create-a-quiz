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

$totalCorrect = 0;

if ($answer1 == "4") { $totalCorrect++; }

if ($answer2 == "1") { $totalCorrect++; }

if ($answer3 == "2") { $totalCorrect++; }

if ($answer4 == "3") { $totalCorrect++; }

if ($answer5 == "1") { $totalCorrect++; }

if ($answer6 == "2") { $totalCorrect++; }

if ($answer7 == "3") { $totalCorrect++; }

if ($answer8 == "2") { $totalCorrect++; }

if ($answer9 == "3") { $totalCorrect++; }

if ($answer10 == "2") { $totalCorrect++; }

if ($answer11 == "4") { $totalCorrect++; }

if ($answer12 == "1") { $totalCorrect++; }

if ($answer13 == "3") { $totalCorrect++; }

if ($answer14 == "3") { $totalCorrect++; }

if ($answer15 == "1") { $totalCorrect++; }

if ($answer16 == "2") { $totalCorrect++; }

if ($answer17 == "1") { $totalCorrect++; }

if ($answer18 == "2") { $totalCorrect++; }

if ($answer19 == "4") { $totalCorrect++; }

if ($answer20 == "1") { $totalCorrect++; }

if ($answer5) { $totalCorrect++; }

echo "$totalCorrect / 20 correct";
?>


</body>
</html>