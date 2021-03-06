<?php
// PRODUCTS ADMINISTRATION VIEW

if($action == 'showproducts' || $action == 'deleteproduct'){
  echo '<a href="/SheekStore/index.php/admin/addproduct/"><button class="btn btn-lg btn-primary btn-block" name="addproduct">Ajouter un Produit</button></a><br /><br />';

  if(isset($result)){ echo $result; } // Affichage du message de confirmation / erreur

  echo '<table class="table table-striped table-sm">
  <thead>
  <tr>
  <th>Id</th>
  <th>Libelle</th>
  <th>Marque</th>
  <th>Catégorie</th>
  <th>Stock</th>
  <th>Prix</th>
  <th>Editer</th>
  <th>Supprimer</th>
  </tr>
  </thead>
  <tbody>
  ';

  foreach($adminList as $product){
    echo '<tr>
    <td>'.$product['id'].'</td>
    <td><a href="/SheekStore/index.php/admin/editproduct/'.$product['id'].'">'.$product['libelle'].'</a></td>
    <td>'.$product['marque'].'</td>
    <td>'.$product['nom_categorie'].'</td>
    <td>'.$product['stock'].'</td>
    <td>'.$product['prix'].'€</td>
    <form method="post">
    <td><input type="image" formaction="/SheekStore/index.php/admin/editproduct/'.$product['id'].'" src="/SheekStore/img/edit.png" alt="Icone d\'édition" class="icon" /></td>
    <td><input type="image" formaction="/SheekStore/index.php/admin/deleteproduct/'.$product['id'].'" src="/SheekStore/img/delete.png" alt="Icone de suppression" class="icon" /></td>
    </form>';
  }

  echo '</tbody>
  </table>';
}
else if($action =='addproduct' || $action =='editproduct'){
  echo '<form id="form-product" class="form-signin" action="/SheekStore/index.php/admin/showproducts" method="post" enctype="multipart/form-data">
  <h1 class="h3 mb-3 font-weight-normal">'.$verb.' un produit</h1>
  <input type="hidden" name="id" value="'.$id.'">
  <label for="inputName" class="sr-only">Nom du produit</label>
  <input type="text" class="form-control" placeholder="Nom du produit" name="libelle" value="'.$libelle.'" required autofocus><br/>
  <label for="inputBrand" class="sr-only">Marque</label>
  <input type="text" class="form-control" placeholder="Marque" name="marque" value="'.$marque.'" required><br/>
  <label for="inputDesc" class="sr-only">Description</label>
  <textarea name="description" class="form-control" form="form-product" placeholder="Entrez une description ici...">'.$description.'</textarea><br/>
  <label for="inputCategory" class="sr-only">Catégorie</label>
  <h5>Categorie:</h5>
  <select class="form-control" name="id_Categorie">';
  // Boucle pour afficher le menu déroulant des catégories de notre bdd
  foreach($categories as $category){
    if($category['id'] == $id_Categorie){
      echo '<option value="'.$category['id'].'" selected>'.$category['nom_categorie'].'</option>';
    }
    else{
      echo '<option value="'.$category['id'].'">'.$category['nom_categorie'].'</option>';
    }
  }
  echo '</select><br />
  <h5>Stock:</h5>
  <label for="inputStock" class="sr-only">Stock</label>
  <input type="number" class="form-control" placeholder="0" name="stock" value="'.$stock.'"><br />
  <h5>Prix (en  €):</h5>
  <label for="inputStock" class="sr-only">Prix</label>
  <input type="number" step="0.01" class="form-control" placeholder="0" name="prix" value="'.$prix.'" required><br/>
  <h5>Image 1:</h5>
  <label for="inputImg" class="sr-only">Image 1</label>
  <input type="file" class="form-control" placeholder="0" name="img1" value="'.$img1.'"><br/>
  <h5>Image 2:</h5>
  <label for="inputImg" class="sr-only">Image 2</label>
  <input type="file" class="form-control" placeholder="0" name="img2" value="'.$img2.'"><br/>
  <h5>Image 3:</h5>
  <label for="inputImg" class="sr-only">Image 3</label>
  <input type="file" class="form-control" placeholder="0" name="img3" value="'.$img3.'"><br/><br/>';
  if($action == 'addproduct'){
    echo '<button class="btn btn-lg btn-primary btn-block" type="submit" name="add">Ajouter</button>';
  }
  else if($action == 'editproduct'){
    echo '<button class="btn btn-lg btn-primary btn-block" type="submit" name="update">Modifier</button>';
  }
  echo '</form>';
}
?>