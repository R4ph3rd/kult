- Dump SQL phpMyAdmin
- version 4.8.5
- https://www.phpmyadmin.net/
-
- Hôte: localhost
- Généré le: Dim 02 juin 2019 à 21:29
- Version du serveur: 8.0.15
- Version de PHP: 7.2.17

SET SQL_MODE =  " NO_AUTO_VALUE_ON_ZERO " ;
SET AUTOCOMMIT =  0 ;
COMMENCER LA TRANSACTION ;
SET time_zone =  " +00: 00 " ;


/ * ! 40101 SET @OLD_CHARACTER_SET_CLIENT = @@ CHARACTER_SET_CLIENT * / ;
/ * ! 40101 SET @OLD_CHARACTER_SET_RESULTS = @@ CHARACTER_SET_RESULTS * / ;
/ * ! 40101 SET @OLD_COLLATION_CONNECTION = @@ COLLATION_CONNECTION * / ;
/ * ! 40101 FIXER LES NOMS utf8mb4 * / ;

-
- Base de données: `kult`
-

- ---------------------------------------------------- --------

-
- Structure de la table `evenements`
-

CREATE  TABLE ` evenements` (
  ` Event_titre `  texte  NOT NULL ,
  ` Event_type `  int ( 11 ) NOT NULL ,
  ` EVENT_DATE `  ce jour  NOT NULL ,
  ` Event_heure `  texte  NOT NULL ,
  ` Event_lieu `  texte  NOT NULL ,
  ` Event_organisateur `  texte  NOT NULL ,
  ` Event_public `  int ( 11 ) NOT NULL ,
  ` Event_tags `  texte  NOT NULL ,
  ` Event_prix ` flotteur NOT NULL ,
  ` EVENT_DESCRIPTION `  texte  NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;

-
- Déchargement des données de la table `evenements`
-

INSERT INTO  ` evenements ` ( ` event_titre ` , ` event_type ` , ` EVENT_DATE ` , ` event_heure ` , ` event_lieu ` , ` event_organisateur ` , ` event_public ` , ` event_tags ` , ` event_prix ` , ` EVENT_DESCRIPTION ` ) VALEURS
( ' La vie est un caillou ' , 1 , ' 01/06/2019 ' , ' 20h50 ' , ' creuset ' , ' jean Delatouche ' , 3 , ' théâtre et improvisation ' , 8 , 'Lorem ipsum dolor sit amet, consectetur elip adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nca, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Faites votre choix, cliquez pour en savoir plus, cliquez ici pour plus de détails, cliquez pour en savoir plus. Duis semper. Duis arcu massa, scelerisque vitae, conséquence dans, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque a du mal à aimer les sodales blandit. Vestibulum ante ipsum primis dans le faucibus orci luctus et les ultrices posuere cubilia Curae; Aliquam Nibh. Mauris ac mauris sed pede pellentesque fermentum. Mécène adipiscing ante non diam sodales hendrerit.' ),
( ' Levez-vous ' , 1 , ' 02/06/2019 ' , ' 19h00 ' , ' salle des fêtes, Grèges ' , ' matthieu Blomet ' , 4 , ' humour et stand-up ' , 4 , '
Ut velit mauris, egestas sed, gravida nca, ornare ut, mi. Aenean ut orci vel massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus aliquam, nunc turpis ullamcorper nibh, in tempus erien vitae ligula. Pellentesque rhoncus nunc et augue. Integer id felis. Curabitur aliquet pellentesque diam. Integer quis metus vitae elit lobortis egestas. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi vel erat non mauris convallis vehicula. Nulla et sapien. Integer tortor tellus, aliquam faucibus, convallis id, congue eu, quam. Mauris ullamcorper felis vitae erat. Au-dessus de la lumière, au-delà non élémentaire, au-delà de la lecture, et au-dessus de la vérité. ' ),
( ' les dames du château ' , 1 , ' 2019-06-12 ' , ' 19h30 ' , ' salle de Funès, Fontenilles ' , ' Anne Bernadou ' , 4 ans , ' théâtre & classique ' , 6 , '
Aliquam convallis sollicitudin purus. Praesent aliquam, fermentum mollis, ligula massa adipiscing nisl, euismod nibh nisl eu lectus. Fusce vulputate sem chez sapien. Vivamus leo. Aliquam euismod libero eu enim. Nulla nec felis sed leo placerat imperdiet. Éphémère naen in justo. Suspendisse cursus rutrum augue. Nulla tincidunt tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus, felis magna fermentum augue et ultricies lacus lorem varius purus. Curabitur eu amet. ' ),
( ' Pipistrelle ' , 1 , ' 24/06/2019 ' , ' 18h00 ' , ' salle de fête, Frouzins ' , ' Michel delon ' , 2 , ' contemporain ' , 12 , ' Praesent egestas leo dans pede. Praesent blandit Vous êtes le premier à donner votre avis sur ce que vous devez savoir sur le vestiaire. Vous êtes le premier à donner votre avis sur le fond du panier et les ultrices poses. Vous pouvez également consulter le répertoire suivant.' );
COMMIT ;

/ * ! 40101 SET CHARACTER_SET_CLIENT = @ OLD_CHARACTER_SET_CLIENT * / ;
/ * ! 40101 SET CHARACTER_SET_RESULTS = @ OLD_CHARACTER_SET_RESULTS * / ;
/ * ! 40101 SET COLLATION_CONNECTION = @ OLD_COLLATION_CONNECTION * / ;