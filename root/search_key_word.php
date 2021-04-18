<?php
//searchs for entries with only matching words
include "db_connect.php";
$keyword_from_form =  $_GET["keyword"];

echo "<h2>All Jokes contains $keyword_from_form<br></h2>",
$sql = "SELECT JokeID, Joke_question, Joke_answer FROM jokes_tables WHERE Joke_question LIKE '%". $keyword_from_form ."%'";
$result = $mysqli->query($sql);
echo "<br>";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["JokeID"]. " - Question: " . $row["Joke_question"]. " - Answer: " . $row["Joke_answer"]. "<br>";
  }
} else {
  echo "0 results";
}
?>