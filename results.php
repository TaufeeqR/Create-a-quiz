<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Result</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/results.css" />
        <script src="main.js"></script>
    </head>
    <body>
        <!-- Question array starts (containing questions and answers) -->
    <?php
        $questions = array (
            1 => array (
                'question' => 'Q.1  What year did Albert Einstein die?',
                'answers' => array (
                    '1' => '1954',
                    '2' => '1949',
                    '3' => '1960',
                    '4' => '1955'
                ),
                'correctAnswer' => '4'
            ),
            2 => array (
                'question' => 'Q.2  Which is the largest planet in the solar system?',
                'answers' => array (
                    '1' => 'Jupiter',
                    '2' => 'Neptune',
                    '3' => 'Earth',
                    '4' => 'Mars'
                ),
                'correctAnswer' => '1'
            ),
            3 => array(
                'question' => 'Q.3  What colour is Cerulean?',
                'answers' => array(
                    '1' => 'Red',
                    '2' => 'Blue',
                    '3' => 'Yellow',
                    '4' => 'Green'
                ),
                'correctAnswer' => '2'
            ),
            4 => array(
                'question' => 'Q.4  What are a group of Dolphins called?',
                'answers' => array(
                    '1' => 'School',
                    '2' => 'Herd',
                    '3' => 'Pod',
                    '4' => 'Pool'
                ),
                'correctAnswer' => '3'
            ),
            5 => array(
                'question' => 'Q.5 Who discovered Penicillin?',
                'answers' => array(
                    '1' => 'Alexander Fleming',
                    '2' => 'Thomas Edison',
                    '3' => 'Marie Curie',
                    '4' => 'George Orwell'
                ),
                'correctAnswer' => '1'
            ),
            6 => array(
                'question' => 'Q.6 What date was President John F Kennedy assassinated?',
                'answers' => array(
                    '1' => 'November 22 1962',
                    '2' => 'November 22 1963',
                    '3' => 'October 29 1964',
                    '4' => 'November 24 1962'
                ),
                'correctAnswer' => '2'
            ),
            7 => array(
                'question' => 'Q.7 How many men have walked on the moon?',
                'answers' => array(
                    '1' => '10',
                    '2' => '5',
                    '3' => '12',
                    '4' => '9'
                ),
                'correctAnswer' => '3'
            ),
            8 => array(
                'question' => 'Q.8 Who has won the most Academy Awards?',
                'answers' => array(
                    '1' => 'James Cameron',
                    '2' => 'Walt Disney',
                    '3' => 'Katherine Hepburn',
                    '4' => 'Steven Spielberg'
                ),
                'correctAnswer' => '2'
            ),
            9 => array(
                'question' => 'Q.9 What is the currency of Brazil?',
                'answers' => array(
                    '1' => 'Dollar',
                    '2' => 'The Bhat',
                    '3' => 'Real',
                    '4' => 'Krona'
                ),
                'correctAnswer' => '3'
            ),
            10 => array(
                'question' => 'Q.10 Name the three primary colours.',
                'answers' => array(
                    '1' => 'Blue, green and yellow',
                    '2' => 'Red, yellow and blue',
                    '3' => 'Pink, purple and violet',
                    '4' => 'Blue, red and green'
                ),
                'correctAnswer' => '4'
            ),
            11 => array(
                'question' => 'Q.11 What is John Leach famous for making?',
                'answers' => array(
                    '1' => 'Painting',
                    '2' => 'Ornaments',
                    '3' => 'Designer clothing',
                    '4' => 'Pottery'
                ),
                'correctAnswer' => '4'
            ),
            12 => array(
                'question' => 'Q.12 What is someone who shoes horses called?',
                'answers' => array(
                    '1' => 'A farrier',
                    '2' => 'A horseshoe maker',
                    '3' => 'A blacksmith',
                    '4' => 'A horseman'
                ),
                'correctAnswer' => '1'
            ),
            13 => array(
                'question' => 'Q.13 What is another word for lexicon?',
                'answers' => array(
                    '1' => 'Culloden',
                    '2' => 'Glasgow',
                    '3' => 'Dictionary',
                    '4' => 'Cube'
                ),
                'correctAnswer' => '3'
            ),
            14 => array(
                'question' => 'Q.14 What is the diameter of Earth?',
                'answers' => array(
                    '1' => '5000 km',
                    '2' => '100,000 miles',
                    '3' => '8,000 miles',
                    '4' => '250,000 miles'
                ),
                'correctAnswer' => '3'
            ),
            15 => array(
                'question' => 'Q.15 What colour is a Himalayan poppy?',
                'answers' => array(
                    '1' => 'Blue',
                    '2' => 'Purple',
                    '3' => 'Salmon',
                    '4' => 'Violet'
                ),
                'correctAnswer' => '1'
            ),
             16 => array(
                'question' => 'Q.16 Which kind of bulbs were once exchanged as a form of currency?',
                'answers' => array(
                    '1' => 'Light bulbs',
                    '2' => 'Tulips',
                    '3' => 'Halogen bulbs',
                    '4' => 'Compact fluorescent bulbs'
                ),
                'correctAnswer' => '2'
            ),
            17 => array(
                'question' => 'Q.17 During which century did Blackbeard become famous for seafaring?',
                'answers' => array(
                    '1' => '18th century',
                    '2' => '15th century',
                    '3' => '7th century',
                    '4' => '19th century'
                ),
                'correctAnswer' => '1'
            ),
            18 => array(
                'question' => 'Q.18 What sport is the Keirin event associated with?',
                'answers' => array(
                    '1' => 'Bowling',
                    '2' => 'Cycling',
                    '3' => 'Figure Skating',
                    '4' => 'Dancing'
                ),
                'correctAnswer' => '2'
            ),
            19 => array(
                'question' => 'Q.19 What sports form an Olympic triathlon?',
                'answers' => array(
                    '1' => 'Weightlifting, wrestling and boxing',
                    '2' => 'Tennis, shooting and hockey',
                    '3' => 'Javelin, long jump and high jump',
                    '4' => 'Swimming, cycling and running'
                ),
                'correctAnswer' => '4'
            ),
            20 => array(
                'question' => 'Q.20 What is a cosmonaut?',
                'answers' => array(
                    '1' => 'A Russian space traveller',
                    '2' => 'A German space traveller',
                    '3' => 'A mmonkey that went to space',
                    '4' => 'A South African space traveller'
                ),
                'correctAnswer' => '1'
            ),
        );
        // Question array ends here
        // Foreach loops begin here

        $answers = $_POST['answers'];
        $counter = 0;
        foreach ($questions as $questionNo => $value){
            if ($answers[$questionNo] != $value['correctAnswer']){
            } else {
                $counter++;
            }
        }
        echo "<div class='grid-container'><div class='counter'>".$counter. "/20</div>";
    ?>
    <!-- Results that are to be echod below -->
    <?php 

        if ($counter == 0){
            echo '<div><img class="end-results" src="img/stupid.jpg"></div></div>'.'Great job, No sarcasm intended...';
        } else if ($counter <= 10) {
            echo '<div><img class="end-results" src="img/read.jpg"></div></div>'.'I think you should try again...';
        } else if ($counter >= 10 && $counter < 15) {
            echo '<div><img class="end-results" src="img/alrighty-then.gif"></div></div>'.'Godd effort, but you can do much better';
        } else if ($counter >= 15 && $counter < 20) {
            echo '<div><img class="end-results" src="img/seal.jpg"></div></div>'.'Great Job, keep trying to get that 100%';
        } else if ($counter == 20) {
            echo '<div><img class="end-results" src="img/proud.jpg"></div></div>'.'AMAZEBALLS!!!!!';
        } 
    ?>

    <div class="retake">
        <a href="index.php">
            <img class="image" src="../img/try.png">
        </a>
    </div>
    </body>
</html>