<!DOCTYPE html>
<html>
<head>
    <title>Opera Omnia - Subjects</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include("header.php"); ?>
    <section>
    <h1>Subjects</h1>
    <div  class="menuSubject">
    	<div class = "subjectPhysics"><strong>Physics</strong></div>
    	<?php 
    	try {
    	 $bdd = new PDO('mysql:host=localhost;dbname=opera omnia;charset=utf8', 'root', '');
    	}
    	catch(Exception $e)
        {
           die('Erreur : '.$e->getMessage());
        }
        $reponse = $bdd->query('SELECT Title,ID FROM papers WHERE Field = \'Physics\'');
        echo '<div class = "subjectsPapersPhysics" style="overflow-y:auto; max-height: 200px;">';
        while ($data = $reponse->fetch())
        {
    	echo ('<ul> <li> <a href=papers/'.$data['ID'].'>'.$data['Title'].'</a></li> </ul>');
        }
        echo '</div>'
        ?>
     </div>
     <div class="menuSubject">
        <div class = "subjectMaths"><strong>Mathematics</strong></div>
        <?php        
        $reponse = $bdd->query('SELECT Title,ID FROM papers WHERE Field = \'Mathematics\'');
        echo '<div class = "subjectPapersMaths" style="overflow-y:auto; max-height: 200px;">';
        while ($data = $reponse->fetch())
        {
    	echo ('<ul> <li> <a href=papers/'.$data['ID'].'>'.$data['Title'].'</a></li> </ul>');
        }
        echo '</div>'
        ?>
    </section>

<?php include("footer.php"); ?>
</body>
</html>