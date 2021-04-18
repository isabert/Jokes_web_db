<?php
//search for all entries
echo "<h2>All Jokes <br></h2>",
$sql = "SELECT JokeID, Joke_question, Joke_answer FROM jokes_tables";
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