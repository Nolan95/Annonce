<?php

	//INCLUSION DU FICHIER CONTENANT DES fonctions
	require 'inc/fonctions.php';

	//APPEL A LA fonction logged_only
	//logged_only();

?>

<!-- INCLUSION DU CONTENU DU header -->
<?php require 'inc/header.php'; ?>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function(){
		var cat = document.getElementById('cat')
			cat.addEventListener('change', function(e){
				var options = cat.options
				if(options.selectedIndex === 1){
					document.getElementById('sous').style.display = 'block'
				}else {
					document.getElementById('sous').style.display = 'none'
				}
			})
})
</script>

<section id="portfooptiono" class="portfooptiono optionghtbg sections">

<div class="container">

	  <div class="heading text-center">
        <h1>Publier votre annonce</h1>
        <div class="separator3"></div>
    </div>

  <div class="col-md-8 col-sm-6 col-xs-12 pull-center">

	<form action="" method="POST">

		<!-- Formulaire de publication d'une annonce -->

		<div class="row">

			<div class="col-md-6">
				<div class="form-group">
					<label for="categorie">Categorie</label>
					<select class="form-control" id="cat">
						<option> Choisissez la categorie</option>
						<option value="0"> Offres Emploi-Travail</option>
						<option value="1"> Immobilier Location-Vente</option>
						<option value="2"> Auberges-Hôtels</option>
						<option value="3"> Jeux Videos-Consoles</option>
						<option value="4"> Vehicules-Motos-Autos</option>
						<option value="5"> Modes-Beauté</option>
						<option value="6"> Recherche Emploi</option>
						<option value="7"> Electroniques-Multimedias</option>
						<option value="8"> Loisirs-Restaurants</option>
						<option value="9"> Animaux-Compagnie</option>
						<option value="10"> Soins corporels-Massage</option>
						<option value="11"> Rencontres</option>
						<option value="12"> Formations-Cours</option>
					</select>
				</div>
			</div>

			<div class="col-md-6" id="sous" style="display:none">
				<div class="form-group">
					<label for="sous-categorie">Sous categories</label>
					<select class="form-control" name="">
						<option value="0"> Administration</option>
						<option value="1"> Commercial-Vente-Distribution</option>
						<option value="2"> Telecommunications-Informatique</option>
						<option value="3"> Ingenierie-Architecture</option>
						<option value="4"> Construction-BTP</option>
						<option value="5"> Enseignement-Formations</option>
						<option value="6"> Juridique-Droit</option>
						<option value="7"> Logistique-Transport</option>
						<option value="8"> Industrie-Techniques</option>
						<option value="9"> Agriculture-Environnement</option>
						<option value="10"> Securite-gardiennage</option>
						<option value="11"> Nounou-Gouvernante</option>
						<option value="12"> Comptabilite-Gestion</option>
						<option value="13"> Marketing-Communication</option>
						<option value="14"> Servante-Femme de Menage</option>
						<option value="15"> Autres</option>
					</select>
				</div>
			</div>

			<div class="col-md-6" style="display: none">
				<div class="form-group">
					<select class="form-control" name="">

					</select>
				</div>
			</div>

			<div class="col-md-4" id="titre">
				<div class="form-group">
					<label for="sous-categorie">Titre</label>
					<input type="text" name="titre" placeholder="Le titre de l'annonce" class="form-control">
				</div>
			</div>

			<div class="col-md-4" id="" >
				<div class="form-group">
					<label for="sous-categorie">Prix</label>
					<input type="text" name="titre" placeholder="Le prix de vente ou d'achat" class="form-control">
				</div>
			</div>

			<!-- File Button -->
			<div class="col-md-4">
				<div class="form-group">
					<label for="filebutton">Image</label>
					<input id="filebutton" name="fichier" class="form-control input-file" type="file">
				</div>
			</div>

			<div class="col-md-12" id="" >
				<div class="form-group">
					<label for="sous-categorie">Description</label>
					<textarea name="desc" rows="9" class="form-control" placeholder="Description de l'annonce"></textarea>
				</div>
			</div>

		</div><!-- Fermeture de la balise row-->

	</form>

	</div>

</div>

</section>

<?php require 'inc/footer.php'; ?>
