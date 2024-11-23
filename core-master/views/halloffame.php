<!DOCTYPE html>
<html lang = "fr">
<head>
    <meta charset = "UTF-8">
    <title>
        Escape Game
    </title>
</head>
<body>
    <h1>Hall of fame<h1>
    <a href = "/escapegame">Jouer</a>
    <a href = "/accueil">Ecran titre</a>
        <h1>TOP 10 DES MEILLEURS JOUEURS</h1>
    <table id="playertable">
    
    <table>
        <tr>
            <th>PSEUDO</th> 
            <th>TEMPS</th>
            <th>SCORE</th>
            <th>RANG</th>
        </tr>

        <?php
        $rang = 1;
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" .$row['pseudo'] . "</td>";
            echo "<td>" .$row['temps'] . "</td>";
            echo "<td>" .$row['score'] . "</td>";
            echo "<td>" .$rang . "</td>";
            echo "</tr>";
            $rang++;
        }
        ?>
    </table>
</body>
</html>
