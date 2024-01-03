<?php


$indianCricketPlayers = array(
    "Virat Kohli",
    "Rohit Sharma",
    "Jasprit Bumrah",
    "Ravindra Jadeja",
    "KL Rahul",
    "Shikhar Dhawan",
    "Hardik Pandya",
    "Cheteshwar Pujara",
    "Ajinkya Rahane",
    "Rishabh Pant"
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Cricket Players</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: 	#008000;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color:#00FFFF,; 
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2 style="background-color: #ff9933; padding: 10px; color: #fff;">Indian Cricket Players</h2>

    
    <table>
        <thead>
            <tr>
                <th>Player Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
                
                foreach ($indianCricketPlayers as $player) {
                    echo "<tr><td>$player</td></tr>";
                }
            ?>
        </tbody>
    </table>

</body>
</html>

