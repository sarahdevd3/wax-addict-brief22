<?php

  for ($i=0; $i<=4; $i++) {
  $produit= $productsArray[$i];

  echo("<pre >Référence du produit:".$produit['id']."<pre>");
  echo ("<a href='".$produit['image']."'width='400px' height='400px'>");

  echo("<pre >Nom du produit:".$produit['nom']."<pre>");
  echo ("<a href='".$produit['image']."'width='400px' height='400px'>");

  echo("<pre >Longueur:".$produit['longueur']."Mètres<pre>");
  echo ("<a href='".$produit['image']."'width='400px' height='400px'>");

  echo("<pre >Prix:".$produit['prix']."Euros <pre>");
  echo ("<a href='".$produit['image']."'width='400px' height='400px'>");

  echo ($produit['nom alternatif']);
  echo'</br>';
  echo ("<a href='".$produit['image']."'width='400px' height='400px'>");
  echo ("<img class='img'src='".$produit['image']."'width='400px' height='400px'>");
  echo ("<a href='".$produit['image']."'width='400px' height='400px'>");
  echo'</br>';
  }

?>
  
  
  </main>
  <footer><a href="logout.php">déconnexion</a></footer>
</body>

</html>
