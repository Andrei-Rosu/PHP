<style>
    h2{
        margin: 0;
        font-size: 25px;
        background: #dedede;
        text-align: center;
        padding: 25px;
    }
</style>
<hr><h2> Ecriture et affichage</h2>
<!-- Nous pouvons  écrire du HTML dans un fichier .php, l'inverse n'est pas possible-->
<?php
echo 'Bonjour';// echo est une instruction d'affichage qui nous permet effectuer un affichage, on peut le traduire par 'Affiche moi'
echo '<h3>Hey there</h3>';
// on peut également y mettre du HTML, si on observe le code source, vous ne verrez pas le PHP car le langage est intrepreté.
echo '<hr><h2>Commentaires</h2>'; ?>
<strong>Bonjour</strong>
<!-- Nous voyons ici qu'il
est également possible de fermer et ré-ouvrir  php pour mélanger du code php et HTML-->
<?="Allo" ?>
<!-- le = remplace le echo-->

<?php echo'texte';
// Autant qu'on ne change pas entre le php et le HTML, la balise <?php peut rester ouverte
/* Commentaire
sur plusieurs lignes*/
print 'Nous sommes mercredi';
/* Il n'y a pas de difeérence entre echo et print*/
echo '<hr><h2> Variables: types/déclaration/affectation</h2>';
// Une variable est un espace nommé permetant de conserver une valeur
// on déclare toujours une variable avec le signe dollar $ suivi du nom de la variable
// EX: $a2=> OK -----$2a=> erreur, jamais de chiffre aprs le signe dollar

$a = 127;
// Affectation de la valeur 127 dans la variable nommé "a"
echo gettype($a);
echo '<br>';
// gettype est une fonction predefinie dans le code PHP permettant de voir le type d'une variable.
// Dans ce cas là, c'est un npmbre entier: integer
$b = 1.5;
echo gettype($b);
echo '<br>';
// un nombre à virgule: double
$c ="une chaine";
echo gettype($c);
// une chaine de caractére: string
$d ='127';
echo gettype($d);
echo '<br>';
// Avec les quotes, le type retourné est une chaine de caractéres
$e = true;
echo gettype($e);
echo '<br>';
// Boolean
$f = false;
echo gettype($f);
echo '<br>';
// Boolean


/**************************************Concatenation****************************************************/

echo '<hr><h2> Concaténation</h2>';
$x ='Bonjour';
$y ='tout le monde';
echo $x.$y."<br>";
    // Point de concaténation que l'on peut traduire par "suivi de"
echo "$x $y <br>";
// Entre guillemets, les variables sont evaluées
echo '$x $y <br>';
// Entre quote, c'est à dire  une chaine de caractéres, les variables ne sont poas evaluées
echo'aujourd\'hui';
// Avec les simple quote, si nous envoyons une chaine de ca ractére avec une apostrophe,
// cela génère ,une erreure, nous sommes obligés de placer un antislash '\' pour préciser
// que c'est une apostropjhe
echo "<br>aujourd'hui <br>";
echo "Hey ! ".$x.  $y."<br>";
// Concaténation texte et variable

echo '<hr><h2> Concaténation lors de l\'affectation</h2>';
$prenom1 = "Grégory";
$prenom1 = "Andrei";
echo $prenom1 . '<br>';
// Cela remplace Grégory par Andrei
$prenom2 = "Grégory";
$prenom2.= "Andrei";
echo $prenom2;
// Cela ajoute Andrei sans remplacer la valeur Grégory grace à l'opérateur '.='

echo '<hr><h2> Constante et constante magique</h2>';
// Une constante tout comme une variable nous permet de conserver une valeur, mais comme son nom l'indique
// elle sera constante, c'est à dire que l'on ne pourra pasx modifier son valeur
define("CAPITALE","Paris");
// Par convention les constantes en PHP sont en majuscule
echo CAPITALE."<br>";
//Affichage de la constante
// define("CAPITALE", "ROME");   ******** ERROR , on ne peut pas modifier une constante déjà deffinie

// constante magique

echo __FILE__."<br>"; // Chemin vers le fichier
echo __LINE__."<br>"; // Affiche le numéro de la ligne



// Exercise variables
// Afficher bleu-blanc-rouge (avec les tirets) en mettant chaque couleur dans une variable
$b= "blanc";
$bb= "bleu";
$r= "rouge";
echo $b."-".$bb."-".$r;

echo '<hr><h2> Opérateurs arithmétique</h2>';
$a = 10; $b = 2;
echo $a+$b."<br>";// 12
echo $a-$b."<br>";// 8
echo $a*$b."<br>";// 20
echo $a/$b."<br>";//5










//Exercise
$couleur = "jaune";
if ($couleur =="bleu")
{
    echo "vous aimez la couleur bleu";

}
elseif ($couleur =="rouge")
{
    echo "vous aimez la couleur rouge";
}
elseif ($couleur=="vert")
{
    echo "vous aimez la couleur vert";
}
else {
    echo "vous n'aimez rien";
}


















echo '<hr><h2> Fonctions utilisateur</h2>';
// Les fonctions qui ne sont prédéfinies
function separation(){
    echo "<hr><hr><hr>";
}
separation();





function bonjour($qui)// $qui-variable de reception ou le parametre est defini a la fin,
// par l'execution
// On peut affecter une valeur par defaut à la variable de reception, dans ce à l'execution
// il n'est pas necessaire de lui envoyer un argument si l'on veut afficher sa valeur par defaut
{
    echo "Bonjour $qui <br>";
}
bonjour("Andrei");// la fonction va renvoyer Bonjour Andrei

// *********************************************************************************


function joursemaine()
{
    $jour = "Jeudi";
    return $jour;// une fonction peut retourner un resultat,
    // c'est pour cela que l'on utilise le mot clé "return",
    //à ce moment la on sort de ma fonction et tout le code aprés ne sera pas executé
   // echo 'Allo';// ne sort pas à cause du "return"
}
echo joursemaine();
//echo $jour;// ne fonctionne pas car cette variable n'est connue qu'à l'interieur de la fonction
//-------------------------------------------------------------------
$pays = "France";
// Variable declarée dans l'espace global, c'est à dire a l'extèriueur d'une fonction, c'est l'espace par defaut
function affichagePays()
{
    global $pays;
    // Pour importer une variable declarée en global vers l'espace local, on utilise le mot clé "global"
    echo $pays;
}
affichagePays();

//*******************************************************************************************
$a = 1.96;
$b = 0.55;
$c = 0.7;
function appliqueTva($nombre)
{

    return $nombre*1.2;
}
echo appliqueTva(500);


echo'<select>';
    for($b=1; $b<31; $b++)
    {
echo "<option>$b</option>";
    }
    echo'</select>';

echo '<table border=1 >';
$z=0;
for ($j=1;$j<=10;$j++)
{  echo"<tr>";

    for($i=0;$i<10;$i++)
    {

        echo"<td>.$z.</td>";
        $z++;
    }
    echo"</tr>";
}



echo '</table>';
























$tab[] = "France";
$tab[] = "Italie";
$tab[] = "Espagne";
$tab[] = "Portugal";
echo '<pre>';print_r($tab[1]);echo'</pre>';



$tab_multi = array(
        0=> array("prenom"=>"Gregory", "nom"=> "Lacroix"),
        1=> array ("prenom"=>"Adeline", "nom"=>"Clere")
);
echo $tab_multi[1]["nom"];

for ($j=0;$j< count($tab_multi);$j++)
{
for($x=0;$x<count($j);$x++);
    echo "$x";
}
