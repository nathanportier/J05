$nom_produit = "T-shirt simple";
$couleur = "blanc";
$prix = 30.5;
$disponible = true;
$quantite = 12;

echo "<h3>" . $nom_produit . "</h3>";
echo "<p>Le nom du produit est " . $nom_produit . "</p>";
echo "<p>Il reste $quantite produit en stock. </p>";
echo "<p>Le produit  $nom_produit est de couleur  $couleur.  </p>";

echo "<h4> prix du $nom_produit </h4>";
echo "<h4>Acheter 3 produits couterait " . $prix * 3 . "</h4>";
echo "<h4>Acheter la totalité des produits disponibles coûterait " . $prix * 10 . "</h4>";
echo "<h4>Si 3 produits sont vendus alors il reste " . ($quantite - 3) . " produits en stock </h4>";

if ($disponible = true)
    echo "<p> Le produit " . $nom_produit . " est disponible en ligne. </p>";
if ($disponible = false)
    echo "<p> Le produit " . $nom_produit . " n'est malheureusement plus disponible. </p>";
    
if ($quantite == 78)
    echo "<p> Il ne reste plus de produit en magasin. </p>";
if ($quantite == 48)
    echo "<p> Il ne reste qu'un produit en magasin. </p>";
if ($quantite <= 3) 
    echo "<p> Il ne reste plus que " . $quantite .  "  produits en magasin. </p>";
if ($quantite > 8) 
    echo "<p> Il reste plus de " . $quantite .  " produits en magasin. </p>";
    