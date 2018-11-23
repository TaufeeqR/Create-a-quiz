<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lets get Quizzical</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/main.css"/>
        <script src="main.js"></script>
    </head>
    <body>
    <!-- The header container begins here -->
        <div class="container">
            <div class="heading">
                <h1 class="title-1">Lets get Quizzical!!</h1>
            </div>
        </div>
    <!-- The header container ends here  -->
    <!-- Section with question and answer array starts here -->
    <section>
        <div class="question-container">
        <?php 

            $questions = array (
                1 => array (
                    'question' => 'Q.1  From which of the nine named planets does the mineral tellurium get its name:',
                    'answers' => array (
                        '1' => 'Uranus',
                        '2' => 'Mercury',
                        '3' => 'Venus',
                        '4' => 'Earth'
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
                    'question' => 'Q.4  How many hoops are used in a game of croquet?',
                    'answers' => array(
                        '1' => 'Eleven',
                        '2' => 'Four',
                        '3' => 'Six',
                        '4' => 'Two'
                    ),
                    'correctAnswer' => '3'
                ),
                5 => array(
                    'question' => 'Q.5 What is the other name of Vitamin A?',
                    'answers' => array(
                        '1' => 'Retinol',
                        '2' => 'Thiamine',
                        '3' => 'Niacin',
                        '4' => 'Retinoids'
                    ),
                    'correctAnswer' => '1'
                ),
                6 => array(
                    'question' => 'Q.6 From which language is the word ‘ketchup’ derived?',
                    'answers' => array(
                        '1' => 'Spanish',
                        '2' => 'Chinese',
                        '3' => 'Japanese',
                        '4' => 'Portuguese'
                    ),
                    'correctAnswer' => '2'
                ),
                7 => array(
                    'question' => 'Q.7 What type of creature lives in an apiary?',
                    'answers' => array(
                        '1' => 'A bird',
                        '2' => 'A Reptile',
                        '3' => 'A Bee',
                        '4' => 'A Frog'
                    ),
                    'correctAnswer' => '3'
                ),
                8 => array(
                    'question' => 'Q.8  What would you do with a “wandering sailor”?',
                    'answers' => array(
                        '1' => 'Nothing',
                        '2' => 'Plant it',
                        '3' => 'Provide assistance',
                        '4' => 'Report to local authority'
                    ),
                    'correctAnswer' => '2'
                ),
                9 => array(
                    'question' => 'Q.9 What color of Ensign does the Merchant Navy fly?',
                    'answers' => array(
                        '1' => 'Royal Blue',
                        '2' => 'Green',
                        '3' => 'Red',
                        '4' => 'Navy blue'
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
                    'correctAnswer' => '1'
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
                        '3' => 'A monkey that went to space',
                        '4' => 'A South African space traveller'
                    ),
                    'correctAnswer' => '1'
                ),
            );
        ?>
<!-- Questions array ends here -->
<!-- The form begins here -->
        <form action="results.php" method="post" id="quiz">
            <?php foreach ($questions as $questionNo => $value){ ?>
                <div class="main">
                    <h3 class="title"><?php echo $value['question']; ?></h3>
                    <div class="container-btn">
                        <?php 
                            foreach ($value['answers'] as $letter => $answer){
                            $label = 'question-'.$questionNo.'-answers-'.$letter;
                                ?>
                        <div class="radio-btn">
                            <input type="radio" name="answers[<?php echo $questionNo; ?>]" id="<?php echo $label; ?>" value="<?php echo $letter; ?>" required />
                            <label for="<?php echo $label; ?>"><?php echo $answer; ?> </label>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            
            <button type="submit" class="button">Submit Quiz!</button>
        </form>
<!-- End of form -->
        </div>
    </section>
<!-- End of section -->
    </body>
</html>