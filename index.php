        <?php require 'inc/header.php'; ?>

        <!--Home page style-->
        <header id="home" class="home">

          <div class="container">

          <!-- ON TESTE SI LE CONTENU DE LA VARIABLE EST NON VIDE -->
          <?php if(!empty($_SESSION['flash'])): ?>

              <!-- ON FAIT UNE BOUCLE FOREACH POUR PARCOURIR LE CONTENU DE LA VARIABLE -->
              <?php foreach ($_SESSION['flash'] as $type => $message): ?>

                <div class="alert alert-<?= $type; ?> text-center"><?=$message ?> </div>

              <?php endforeach; ?>

              <!-- ON VIDE LE CONTENU DE LA VARIABLE -->
              <?php unset($_SESSION['flash']);  ?>

          <?php endif; ?>

          </div>

          <div class="container">
            <h3>Site de petites annonces</h3>
            <p>

            </p>

            <!-- ****** FORMULAIRE DE RECHERCHE ******* -->
            <form class="form-inline" action="#" method="post">

              <!-- CHAMP DE SAISIE DU MOT CLE -->
              <div class="form-group">
                <input type="text" name="name" value="" class="form-control champ" maxlength="80" style="width: 420px; margin-right: 25px" placeholder="Que recherchez vous ?">
              </div>

              <!-- LISTE DES catégories -->
              <div class="form-group">
                <select class="form-control champ" name="" style="width: 420px; margin-right: 25px">
                  <option value="all">- Toutes les catégories -</option>
                  <option value="0"> Offres Emploi-Travail</option>
                  <option value="1"> Electroniques-Multimedias</option>
                  <option value="2"> Vehicules-Autos-Motos</option>
                  <option value="3"> Auberges-Hôtels</option>
                  <option value="4"> Modes-Beauté</option>
                  <option value="5"> Immobilier Location-Vente</option>
                  <option value="6"> Jeux Videos-Consoles</option>
                  <option value="7"> Loisirs-Restaurants</option>
                  <option value="8"> Equipements Audios-Videos</option>
                  <option value="9"> Animaux-Compagnie</option>
                  <option value="10"> Recherche Emploi</option>
                  <option value="11"> Formations-Cours</option>
                </select>
              </div>

              <!-- LISTE DES SOUS-catégories -->
              <!--div class="form-group">
                <select class="form-control select" name="" style="width: 270px; margin-right: 25px; display: none">
                  <option value="option">option</option>
                </select>
              </div-->


              <div class="form-group">
                <button type="button" class="btn btn-primary" name="button"><i class="fa fa-search icone"></i> Rechercher</button>
              </div>
            </form>
          </div>
            <!--/div-->
        </header>


        <!-- Sections -->
        <section id="service" class="service sections">
            <div class="container">
                <div class="heading text-center">
                    <h1>catégories</h1>
                    <div class="separator"></div>
                </div>
                <!-- Example row of columns -->

                    <div class="row">
                        <div class="wrapper">

                            <!-- Categorie Offre d'emploi -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-item text-center">
                                    <a href="#">
                                      <i class="fa fa-briefcase" style="color: #d31f38;"></i>
                                      <h5>Offres Emploi-Travail</h5>
                                    </a>
                                    <div class="separator2"></div>
                                    <p></p>
                                </div>
                                <ul class="plusCat" style="display: none">
                                  <li><a href="#"> Administration</a></li>
                                  <li><a href="#"> Commercial-Vente-Distribution</a></li>
                                  <li><a href="#"> Telecommunications-Informatique</a></li>
                                  <li><a href="#"> Ingenierie-Architecture</a></li>
                                  <li><a href="#"> Construction-BTP</a></li>
                                  <li><a href="#"> Enseignement-Formations</a></li>
                                  <li><a href="#"> Juridique-Droit</a></li>
                                  <li><a href="#"> Logistique-Transport</a></li>
                                  <li><a href="#"> Industrie-Techniques</a></li>
                                  <li><a href="#"> Agriculture-Environnement</a></li>
                                  <li><a href="#"> Securite-gardiennage</a></li>
                                  <li><a href="#"> Nounou-Gouvernante</a></li>
                                  <li><a href="#"> Comptabilite-Gestion</a></li>
                                  <li><a href="#"> Marketing-Communication</a></li>
                                  <li><a href="#"> Servante-Femme de Menage</a></li>
                                  <li><a href="#"> Autres</a></li>
                                </ul>
                                <div class="text-center">
                                  <a href="#" class="plus"><i class="fa fa-plus-circle"> Plus de catégories</i></a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-item text-center">
                                    <a href="#">
                                      <i class="fa fa-tablet" style="color: #000000;"></i>
                                      <h5>Electroniques-Multimedias</h5>
                                    </a>
                                    <div class="separator2"></div>
                                    <p></p>
                                </div>
                                <ul class="plusCat" style="display: none">
                                  <li><a href="#"> Telephones Mobiles-Smartphones</a></li>
                                  <li><a href="#"> Tablettes-Ecrans Tactiles</a></li>
                                  <li><a href="#"> Appareils Photo-Cameras</a></li>
                                  <li><a href="#"> Accessoires Multimedias</a></li>
                                  <li><a href="#"> Accessoires Informatiques</a></li>
                                  <li><a href="#"> Ordinateurs Portables-Bureaux</a></li>
                                </ul>
                                <div class="text-center">
                                  <a href="#" class="plus"><i class="fa fa-plus-circle"> Plus de catégories</i></a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-item text-center">
                                    <a href="#">
                                      <i class="fa fa-car" style="color:#437939"></i>
                                      <h5>Vehicules-Motos-Autos</h5>
                                    </a>
                                    <div class="separator2"></div>
                                    <p></p>
                                </div>
                                <ul class="plusCat" style="display: none">
                                  <li><a href="#"> Location Vehicules-Motos</a></li>
                                  <li><a href="#"> Vente Vehicules Occasions-Neufs</a></li>
                                  <li><a href="#"> Vente Motos-Scooters-Velos</a></li>
                                  <li><a href="#"> Pièces Détachées Vehicules</a></li>
                                  <li><a href="#"> Accessoires et Pièces Motos</a></li>
                                </ul>
                                <div class="text-center">
                                  <a href="#" class="plus"><i class="fa fa-plus-circle"> Plus de catégories</i></a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-item text-center">
                                    <a href="#">
                                      <i class="fa fa-bed" style="color:#854a91"></i>
                                      <h5>Auberges-Hôtels</h5>
                                    </a>
                                    <div class="separator2"></div>
                                    <p></p>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="wrapper">

                            <!-- Categorie Offre d'emploi -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-item text-center">
                                    <a href="#">
                                      <i class="fa fa-diamond" style="color:#854ae3"></i>
                                      <h5>Modes-Beauté</h5>
                                    </a>
                                    <div class="separator2"></div>
                                    <p></p>
                                </div>
                                <ul class="plusCat" style="display: none">
                                  <li><a href="#"> Vêtements Femmes</a></li>
                                  <li><a href="#"> Vêtements Hommes</a></li>
                                  <li><a href="#"> Bijoux et Chaussures Femmes</a></li>
                                  <li><a href="#"> Chaussures Hommes-Souliers</a></li>
                                </ul>
                                <div class="text-center">
                                  <a href="#" class="plus"><i class="fa fa-plus-circle"> Plus de catégories</i></a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-item text-center">
                                    <a href="#">
                                      <i class="fa fa-home" style="color:#96e3ab"></i>
                                      <h5>Immobilier Location-Vente</h5>
                                    </a>
                                    <div class="separator2"></div>
                                    <p></p>
                                </div>
                                <ul class="plusCat" style="display: none">
                                  <li><a href="#"> Location Apparts-Villas-Duplex</a></li>
                                  <li><a href="#"> Terrains en vente</a></li>
                                  <li><a href="#"> Vente Maisons-Villas-Duplex</a></li>
                                  <li><a href="#"> Cherche à louer - à acheter</a></li>
                                  <li><a href="#"> Chercher Colocataire-Colocatrice</a></li>
                                </ul>
                                <div class="text-center">
                                  <a href="#" class="plus"><i class="fa fa-plus-circle"> Plus de catégories</i></a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-item text-center">
                                    <a href="#">
                                      <i class="fa fa-gamepad" style="color:#966911"></i>
                                      <h5>Jeux Videos-Consoles</h5>
                                    </a>
                                    <div class="separator2"></div>
                                    <p></p>
                                </div>
                                <ul class="plusCat" style="display: none">
                                  <li><a href="#"> Consoles de jeux</a></li>
                                  <li><a href="#"> CDs jeux consoles</a></li><br>
                                  <li><a href="#"> CDs jeux PC</a></li>
                                </ul>
                                <div class="text-center">
                                  <a href="#" class="plus"><i class="fa fa-plus-circle"> Plus de catégories</i></a>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service-item text-center">
                                    <a href="#">
                                      <i class="fa fa-cutlery" style="color:#966992"></i>
                                      <h5>Loisirs-Restaurants</h5>
                                    </a>
                                    <div class="separator2"></div>
                                    <p></p>
                                </div>
                                <ul class="plusCat" style="display: none">
                                  <li><a href="#"> Restaurants-Bars</a></li>
                                  <li><a href="#"> Evenements-Concerts-Cinemas</a></li>
                                  <li><a href="#"> Spectacles-Soirées-Boites de nuit</a></li>
                                </ul>
                                <div class="text-center">
                                  <a href="#" class="plus"><i class="fa fa-plus-circle"> Plus de catégories</i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">

                      <div class="wrapper">

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item text-center">
                                <a href="#">
                                  <i class="fa fa-paw" style="color:#9fbae7"></i>
                                  <h5>Animaux-Compagnie</h5>
                                </a>
                                <div class="separator2"></div>
                                <p></p>
                            </div>
                            <ul class="plusCat" style="display: none">
                              <li><a href="#"> Achats des animaux</a></li>
                              <li><a href="#"> Ventes des animaux</a></li>
                              <li><a href="#"> Elevage</a></li>
                            </ul>
                            <div class="text-center">
                              <a href="#" class="plus"><i class="fa fa-plus-circle"> Plus de catégories</i></a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item text-center">
                                <a href="#">
                                  <i class="fa fa-file-text" style="color:yellow"></i>
                                  <h5>Recherche Emploi</h5>
                                </a>
                                <div class="separator2"></div>
                                <p></p>
                            </div>
                            <ul class="plusCat" style="display: none">
                              <li><a href="#"> Administration</a></li>
                              <li><a href="#"> Commercial-Vente-Distribution</a></li>
                              <li><a href="#"> Telecommunications-Informatique</a></li>
                              <li><a href="#"> Ingenierie-Architecture</a></li>
                              <li><a href="#"> Construction-BTP</a></li>
                              <li><a href="#"> Enseignement-Formations</a></li>
                              <li><a href="#"> Juridique-Droit</a></li>
                              <li><a href="#"> Logistique-Transport</a></li>
                              <li><a href="#"> Industrie-Techniques</a></li>
                              <li><a href="#"> Agriculture-Environnement</a></li>
                              <li><a href="#"> Securite-gardiennage</a></li>
                              <li><a href="#"> Nounou-Gouvernante</a></li>
                              <li><a href="#"> Comptabilite-Gestion</a></li>
                              <li><a href="#"> Marketing-Communication</a></li>
                              <li><a href="#"> Servante-Femme de Menage</a></li>
                              <li><a href="#"> Autres</a></li>
                            </ul>
                            <div class="text-center">
                              <a href="#" class="plus"><i class="fa fa-plus-circle"> Plus de catégories</i></a>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item text-center">
                                <a href="#">
                                  <i class="fa fa-book"></i>
                                  <h5>Formations-Cours</h5>
                                </a>
                                <div class="separator2"></div>
                                <p></p>
                            </div>
                            <ul class="plusCat" style="display: none">
                              <li><a href="#"> Cours particuliers</a></li>
                              <li><a href="#"> Cours de soutien scolaire</a></li>
                              <li><a href="#"> Cours de langues</a></li>
                              <li><a href="#"> Cours informatiques</a></li>
                              <li><a href="#"> Musique-theâtre-Danse</a></li>
                            </ul>
                            <div class="text-center">
                              <a href="#" class="plus"><i class="fa fa-plus-circle"> Plus de catégories</i></a>
                            </div>
                        </div>


                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item text-center">
                                <a href="#">
                                  <i class="fa fa-smile-o" style="color: #96e3ab"></i>
                                  <h5>Soins Corporels-Massage</h5>
                                </a>
                                <div class="separator2"></div>
                                <p></p>
                            </div>
                            <ul class="plusCat" style="display: none">
                              <li><a href="#"> Manicures-Pedicures</a></li>
                              <li><a href="#"> Coiffures-Tresses-Tissage</a></li>
                              <li><a href="#"> Massage</a></li>
                            </ul>
                            <div class="text-center">
                              <a href="#" class="plus"><i class="fa fa-plus-circle"> Plus de catégories</i></a>
                            </div>
                        </div>

                      </div>

                    </div>

                    <div class="row">
                      <div class="wrapper">

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item text-center">
                                <a href="#">
                                  <i class="fa fa-heart" style="color: #d31f38;"></i>
                                  <h5>Rencontres</h5>
                                </a>
                                <div class="separator2"></div>
                                <p></p>
                            </div>
                            <ul class="plusCat" style="display: none">
                              <li><a href="#"> Homme cherche Femme</a></li>
                              <li><a href="#"> Femme cherche Homme</a></li>
                              <li><a href="#"> Rencontre amicale-Correspondance</a></li>
                              <li><a href="#"> Relations amoureuses-Romance</a></li><br>
                              <li><a href="#"> Services adultes</a></li>
                            </ul>
                            <div class="text-center">
                              <a href="#" class="plus"><i class="fa fa-plus-circle"> Plus de catégories</i></a>
                            </div>
                        </div>

                      </div>

                    </div>

            </div> <!-- /container -->
        </section>


        <section id="portfolio" class="portfolio lightbg sections">
            <div class="container ">
                <div class="heading text-center">
                    <h1>Annonces</h1>
                    <div class="separator"></div>
                </div>
                <div class="row">
                    <div class="main_portfolio whitebackground">
                        <div class="portffolio_content text-center">
                            <div class="portffolio_menu">
                                <div class="filters-button-group">
                                    <button class="button is-checked" data-filter="*">All</button>
                                    <button class="button " data-filter=".metal">Illustrations</button>
                                    <button class="button " data-filter=".transition">Logo</button>
                                    <button class="button " data-filter=".alkali, .alkaline-earth">Branding</button>
                                    <button class="button " data-filter=".alkali, .metal">Web Design</button>
                                </div>
                            </div>

                            <div class="portffolio_content_deteals">
                                <div class="portfolio-one">

                                    <div class="col-sm-4 col-xs-12 portfolio-item transition metal " data-category="transition">
                                        <div class="single_portfolio_img">
                                            <!--a class="portfolio-img" href="assets/images/portfolio/1.jpg"><img src="assets/images/portfolio/1.jpg" alt="" /></a-->
                                            <a href="#" class="ribbon-container">
                                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <img src="images/portfolio/1.jpg" alt="">
                                                <span class="ribbon">Hey, I'm an omlette station!</span>
                                              </div>
                                              <h2>Neque Porro Quisquam</h2>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="col-sm-4 col-xs-12 portfolio-item metalloid " data-category="metalloid">
                                        <div class="single_portfolio_img">
                                            <a class="portfolio-img" href="images/portfolio/2.jpg"><img src="images/portfolio/2.jpg" alt="" /></a>
                                            <h2>Neque Porro Quisquam</h2>
                                        </div>

                                    </div>

                                    <div class="col-sm-4 col-xs-12 portfolio-item post-transition metal " data-category="post-transition">
                                        <div class="single_portfolio_img">
                                            <a class="portfolio-img" href="images/portfolio/3.jpg"><img src="images/portfolio/3.jpg" alt="" /></a>
                                            <h2>Neque Porro Quisquam</h2>
                                        </div>

                                    </div>

                                    <div class="col-sm-4 col-xs-12 portfolio-item alkali " data-category="transition">
                                        <div class="single_portfolio_img">
                                            <a class="portfolio-img" href="images/portfolio/4.jpg"><img src="images/portfolio/1.jpg" alt="" /></a>
                                            <h2>Neque Porro Quisquam</h2>
                                        </div>

                                    </div>

                                    <div class="col-sm-4 col-xs-12 portfolio-item alkali metal " data-category="alkali">
                                        <div class="single_portfolio_img">
                                            <a class="portfolio-img" href="images/portfolio/5.jpg"><img src="images/portfolio/5.jpg" alt="" /></a>
                                            <h2>Neque Porro Quisquam</h2>
                                        </div>

                                    </div>

                                    <div class="col-sm-4 col-xs-12 portfolio-item alkali metal " data-category="alkali">
                                        <div class="single_portfolio_img">
                                            <a class="portfolio-img" href="images/portfolio/6.jpg"><img src="images/portfolio/6.jpg" alt="" /></a>
                                            <h2>Neque Porro Quisquam</h2>
                                        </div>

                                    </div>

                                </div>
                                <a href="annonces.php" class="btn btn-primary">Toutes les annonces</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of portfolio-one Section -->

        <!-- Sections -->


        <!-- Sections -->





        <?php require 'inc/footer.php'; ?>
