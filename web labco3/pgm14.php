<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Cricket Players</title>
</head>
<body>

<?php

$indianPlayers = array(
    "Virat Kohli",
    "Rohit Sharma",
    "KL Rahul",
    "Shikhar Dhawan",
    "Hardik Pandya",
    "Ravindra Jadeja",
    "Jasprit Bumrah",
    "Mohammed Shami",
    "Rishabh Pant",
    "Ajinkya Rahane"
);


echo "<h2>Indian Cricket Players</h2>";
echo "<table border='1'>";
echo "<tr><th>sl.no</th><th>Player Name</th></tr>";

foreach ($indianPlayers as $key => $player) {
    echo "<tr><td>" . ($key + 1) . "</td><td>$player</td></tr>";
}

echo "</table>";
?>

</body>
</html>
