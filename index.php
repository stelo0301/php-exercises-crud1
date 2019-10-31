<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2> Exercice 1 </h2>
    <?php
    if (extension_loaded('PDO')) {
        print 'PDO OK';
    } else {
        print 'PDO KO';
    }
    $dbh = 'mysql:host=localhost;dbname=colyseum;port=3306;charset=utf8';
    $pdo = new PDO($dbh, 'root', 'Loulou151290!');

    $query = $pdo->query("SELECT * FROM clients");
    $resultat = $query->fetchAll();

    print("<table border=\"1\">");
    print("<tr><td>id</td><td>lastName</td><td>firstName</td><td>birthDate</td><td>card</td><td><cardNumber</td></tr>");
    foreach ($resultat as $key => $variable); {
        print("<tr>");
        print("<td>" . $resultat[$key]['id'] . "</td>");
        print("<td>" . $resultat[$key]['lastName'] . "</td>");
        print("<td>" . $resultat[$key]['firstName'] . "</td>");
        print("<td>" . $resultat[$key]['birthDate'] . "</td>");
        print("<td>" . $resultat[$key]['card'] . "</td>");
        print("<td>" . $resultat[$key]['cardNumber'] . "</td>");
        print("<tr>");
    }

    print("</table>");
    ?>
    <h2>Exercice 2</h2>
    <?php
    $query = $pdo->query("SELECT * FROM showTypes");
    $resultat = $query->fetchAll();

    print("<table border=\"1\">");
    print("<tr><td>id</td><td>type</td></tr>");
    foreach ($resultat as $key => $variable) {
        print("<tr>");
        print("<td>" . $resultat[$key]['id'] . "</td>");
        print("<td>" . $resultat[$key]['type'] . "</td>");
        print("<tr>");
    }
    print("</table>");
    ?>
    <h2>Exercice 3</h2>
    <?php
    $query = $pdo->query("SELECT * FROM clients");
    $resultat = $query->fetchAll();

    print("<table border=\"1\">");
    print("<tr><td>id</td><td>lastName</td><td>firstName</td><td>birthDate</td><td>card</td><td><cardNumber</td></tr>");
    for ($i = 0; $i <= 19; $i++) {
        print("<tr>");
        print("<td>" . $resultat[$i]['id'] . "</td>");
        print("<td>" . $resultat[$i]['lastName'] . "</td>");
        print("<td>" . $resultat[$i]['firstName'] . "</td>");
        print("<td>" . $resultat[$i]['birthDate'] . "</td>");
        print("<td>" . $resultat[$i]['card'] . "</td>");
        print("<td>" . $resultat[$i]['cardNumber'] . "</td>");
        print("<tr>");
    }
    print("</table>");

    ?>
    <h2>Exercice 4</h2>
    <?php
    $query = $pdo->query("SELECT * FROM clients");
    $resultat = $query->fetchAll();

    print("<table border=\"1\">");
    foreach ($resultat as $key => $variable) {
        if ($resultat[$key]['card'] == true) {

            print("<tr>");
            print("<td>" . $resultat[$key]['lastName'] . "</td>");
            print("<td>" . $resultat[$key]['firstName'] . "</td>");
            print("<td>" . $resultat[$key]['birthDate'] . "</td>");
            print("<td>" . $resultat[$key]['card'] . "</td>");
            print("<tr>");
        } else {
            print "";
        }
    }
    print("</table>");
    ?>
    <h2>Exercice 5</h2>
    <?php
    $query = $pdo->query("SELECT * FROM clients order by lastName");
    $resultat = $query->fetchAll();

    print("<table border=\"1\">");
    foreach ($resultat as $key => $variable) {
        if ($resultat[$key]['lastName'][0] == "M") {

        print("<tr>");
        print("<td>" . $resultat[$key]['lastName'] . "</td>");
        print("<td>" . $resultat[$key]['firstName'] . "</td>");
        print("<td>" . $resultat[$key]['birthDate'] . "</td>");
        print("<td>" . $resultat[$key]['card'] . "</td>");
        print("<tr>");
    }
}
print("</table>");
?>
<h2>Exercice 6</h2>
<?php
    $query = $pdo->query("SELECT * FROM shows order by title");
    $resultat = $query->fetchAll();
    
    print("<table border=\"1\">");
    print("<tr><td>title</td><td>performer</td><td>date</td><td>startTime</td></tr>");
    foreach ($resultat as $key => $variable) {
        print("<tr>");
        print("<td>" . $resultat[$key]['title'] . "</td>");
        print("<td>" . $resultat[$key]['performer'] . "</td>");
        print("<td>" . $resultat[$key]['date'] . "</td>");
        print("<td>" . $resultat[$key]['startTime'] . "</td>");
        print("<tr>");

    }
print("</table>");
?>
<h2>Exercice 7</h2>
<?php
    $query = $pdo->query("SELECT * FROM clients");
    $resultat = $query->fetchAll();
    
    foreach ($resultat as $key => $variable) {
        print ("<p>Nom de famille : ".$resultat[$key]['lastName'] . "</p>");
        print("<p>Prénom : " . $resultat[$key]['firstName'] . "</p>");
        print("<p>Date de naissance : " . $resultat[$key]['birthDate'] . "</p>");
        if ($resultat[$key]['card'] == true) {
            print ("<p>Carte de fidélité : oui" . "</p>");
            print ("<p>Numéro de carte : " . $resultat[$key]['cardNumber'] . "</p><br>");
    } else {
        print ("<p>Carte de fidélité : Non" . "</p><br>");
    }
    }
?>


</body>

</html>