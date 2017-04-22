/* Insertion des categories dans la tables categories */

ALTER TABLE categories
  ADD slug varchar(255) DEFAULT NULL;


INSERT INTO categories (tituleCat, slug) VALUES ('Offres Emploi-Travail');
INSERT INTO categories (tituleCat, slug) VALUES ('Immobilier Location-Vente');
INSERT INTO categories (tituleCat, slug) VALUES ('Auberges-Hôtels');
INSERT INTO categories (tituleCat, slug) VALUES ('Jeux Videos-Consoles');
INSERT INTO categories (tituleCat, slug) VALUES ('Vehicules-Motos-Autos');
INSERT INTO categories (tituleCat, slug) VALUES ('Modes-Beauté');
INSERT INTO categories (tituleCat, slug) VALUES ('Recherche Emploi');
INSERT INTO categories (tituleCat, slug) VALUES ('Electroniques-Multimedias');
INSERT INTO categories (tituleCat, slug) VALUES ('Loisirs-Restaurants');
INSERT INTO categories (tituleCat, slug) VALUES ('Animaux-Compagnie');
INSERT INTO categories (tituleCat, slug) VALUES ('Soins corporels-Massage');
INSERT INTO categories (tituleCat, slug) VALUES ('Rencontres');
INSERT INTO categories (tituleCat, slug) VALUES ('Formations-Cours');
