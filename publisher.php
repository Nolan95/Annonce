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

			<!-- Liste de toutes les categories  -->
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

			<!-- Sous categorie Offre d'emploi -->
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

			<!-- Sous categorie de la categorie Immobilier  -->
			<div class="col-md-6" style="display: none">
				<div class="form-group">
					<label for="">Sous categories</label>
					<select class="form-control" name="">
						<option value=""> Location Apparts-Villas-Duplex</option>
						<option value=""> Terrains en vente</option>
						<option value=""> Vente Maisons-Villas-Duplex</option>
						<option value=""> Cherche à louer - à acheter</option>
						<option value=""> Chercher Colocataire-Colocatrice</option>
					</select>
				</div>
			</div>

			<!-- Sous categorie de la categorie Jeux videos-Consoles -->
			<div class="col-md-6" style="display: none">
				<div class="form-group">
					<label for="">Sous categories</label>
					<select class="form-control" name="">
						<option> Consoles de jeux</option>
						<option> CDs jeux consoles</option>
						<option> CDs jeux PC</option>
					</select>
				</div>
			</div>


			<!-- Sous categorie de la categorie vehicule-autos -->
			<div class="col-md-6" style="display: none">
				<div class="form-group">
					<label for="">Sous categories</label>
					<select class="form-control" name="">
						<option> Location Vehicules-Motos</option>
						<option> Vente Vehicules Occasions-Neufs</option>
						<option> Vente Motos-Scooters-Velos</option>
						<option> Pièces Détachées Vehicules</option>
						<option> Accessoires et Pièces Motos</option>
					</select>
				</div>
			</div>


			<!-- Sous categorie de la categorie Modes-Beauté -->
			<div class="col-md-6" style="display: none">
				<div class="form-group">
					<label for="">Sous categories</label>
					<select class="form-control" name="">
						<option> Vêtements Femmes</option>
						<option> Vêtements Hommes</option>
						<option> Bijoux et Chaussures Femmes</option>
						<option> Chaussures Hommes-Souliers</option>
					</select>
				</div>
			</div>

			<!-- Sous categorie de la categorie Recherche emploi -->
			<div class="col-md-6" style="display: none">
				<div class="form-group">
					<label for="">Sous categories</label>
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

			<!-- Sous categorie de la categorie Electroniques -->
			<div class="col-md-6" style="display: none">
				<div class="form-group">
					<label for="">Sous categories</label>
					<select class="form-control" name="">
						<option> Telephones Mobiles-Smartphones</option>
						<option> Tablettes-Ecrans Tactiles</option>
						<option> Appareils Photo-Cameras</option>
						<option> Accessoires Multimedias</option>
						<option> Accessoires Informatiques</option>
						<option> Ordinateurs Portables-Bureaux</option>
					</select>
				</div>
			</div>

			<!-- Sous categorie de la categorie Restaurants -->
			<div class="col-md-6" style="display: none">
				<div class="form-group">
					<label for="">Sous categories</label>
					<select class="form-control" name="">
						<option> Restaurants-Bars</option>
						<option> Evenements-Concerts-Cinemas</option>
						<option> Spectacles-Soirées-Boites de nuit</option>
					</select>
				</div>
			</div>


			<!-- Sous categorie de la categorie Animaux -->
			<div class="col-md-6" style="display: none">
				<div class="form-group">
					<label for="">Sous categories</label>
					<select class="form-control" name="">
						<option> Achats des animaux</option>
						<option> Ventes des animaux</option>
						<option> Elevage</option>
					</select>
				</div>
			</div>


			<!-- Sous categorie de la categorie Soins corporels -->
			<div class="col-md-6" style="display: none">
				<div class="form-group">
					<label for="">Sous categories</label>
					<select class="form-control" name="">
						<option> Manicures-Pedicures</option>
						<option> Coiffures-Tresses-Tissage</option>
						<option> Massage</option>
					</select>
				</div>
			</div>


			<!-- Sous categorie de la categorie Rencontres -->
			<div class="col-md-6" style="display: none">
				<div class="form-group">
					<label for="">Sous categories</label>
					<select class="form-control" name="">
						<option> Homme cherche Femme</option>
						<option> Femme cherche Homme</option>
						<option> Rencontre amicale-Correspondance</option>
						<option> Relations amoureuses-Romance</option>
						<option> Services adultes</option>
					</select>
				</div>
			</div>


			<!-- Sous categorie de la categorie Formations -->
			<div class="col-md-6" style="display: none">
				<div class="form-group">
					<label for="">Sous categories</label>
					<select class="form-control" name="">
						<option> Cours particuliers</option>
						<option> Cours de soutien scolaire</option>
						<option> Cours de langues</option>
						<option> Cours informatiques</option>
						<option> Musique-theâtre-Danse</option>
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
