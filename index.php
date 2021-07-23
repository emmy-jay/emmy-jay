<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question and Answers</title>
</head>
<body>
<div class="container">
        <form action="mark.php" method="post">
            <div class="ques_1">
                    <p>1. What is a ball</p><br>
                    <input type="radio" name="question1" value="a" required>A round object. <br>
                    <input type="radio" name="question1" value="b" required>A square object. <br>
                    <input type="radio" name="question1" value="c" required>A rhomboid object. <br>                  
            </div>

            <div class="ques_2">
                    <p>2. What is a ball</p><br>
                    <input type="radio" name="question2" value="a" required>A round object. <br>
                    <input type="radio" name="question2" value="b" required>A square object. <br>
                    <input type="radio" name="question2" value="c" required>A rhomboid object. <br> 
            </div>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>