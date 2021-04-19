<?php
//searchs for entries with only matching words
include "db_connect.php";
$new_joke_question =  $_GET["newjoke"];
$new_joke_answer = $_GET["newanswer"];

$new_joke_question = addslashes($new_joke_question);
$new_joke_answer = addslashes($new_joke_answer);

echo "<h2>Trying to add new joke $new_joke_question with $new_joke_answer as answer<br></h2>";
$sql = "INSERT INTO jokes_tables( JokeID, Joke_question, Joke_answer) VALUES (Null,'$new_joke_question','$new_joke_answer')";
$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

include "search_all_jokes.php";
?>

<!--go back to main page-->
<a href="index.php"> return to main page</a>