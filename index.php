<html>
  <head>
    <title>Manipuler les Entités avec Doctrine</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header class="container-fluid navbar bg-dark text-light py-3">
      <div class="row d-flex justify-content-around align-items-center w-100 ">
        <div class="col-12 d-flex justify-content-between align-items-center">
         
           <a href="index.php">L'entité</a>
            <a href="relations.php">Relations</a>
           <a href=""></a>
           <a href=""></a>
  
        </div>
      </div>
    </header>
    <main class="container">
      <div class="row">
        <div class="col">
          <h1>Création d'une entité et de son repository</h1>
          <p>
            Le framework de Symfony s'appuie sur les entitées et Doctrine pour manipuler la base de données. <br>
            Une Entité étant un objet représenté sous forme de classe va permettre à Doctrine , qui est un ORM (Object Relationnal Mapping), utilisé par défaut avec Symfony, d'étre transformé en table dans une base de données relationnelle de type MySQL, PostgreSQL, SQLite, etc...<br>
            Chaque entité a ses propriétés qui représentent les champs des tables de la base de données que l'on appelle aussi parfois " propriété". Une Entité a ses méthodes et sesw propriétés aiinsi qu'un Repository qui permettra d'effectuer des requetes vers la basse de données.<br><br>
             Un des avantages d-un ORM comme Doctrine est qu'il n'est pas nécessaire de connaitre le SQL pour utiliser la base de données . Doctrine permet d'insérer, de récupérer, de modifier ou de supprimer les entités et , par extension, des tables et des champs de la base de données. Il est possible aussi de créer, de récupérer, de modifier et supprimer des objets issus des entités , c-à-d les données qui constitues notre BDD.<br><br>

            Alors des questions se posent : Comment manipule-t-on les entités avec Doctrine ?  Quels sont les outils mis à notre disposition ? Peut -on , malgré tout , faire des requêtes un plus poussées ?
          </p>
          <h2>Les Prérequiq avant la création d'une entité</h2>
          <p>
            Avant tout , on doit s'assurer que notre application peut accéder à notre service mlocal de la base de données, . Pour cela , dans le fichier ".env" qui se trouve dans la racine de projet, on doit décommenter la ligne qui contient la variable d'environnement "DATABASE_URL" avec le service de base de données que nous utilisons et le  paramétrer (voir exemple).
            <br><br>
           Vérifions bien que Doctrine et MakerBundle sont installés dans notre fichier composer.json , sinon, on les instales et on crée notre base de données avec les lignes de commandes suivantes:
            <br><br>

            => $ composer require symfony/orm-pack <br>
            => $ composer require --dev symfony/maker-bundle <br>
            => $ php bin/console doctrine:database:create <br>
          </p>
          <h2>Création d'une entité User</h2>

          <p>
            Pour pleinement utiliser la puissance de symfony et Doctrine, anant meme de créer l'entité "User", nous allons installer un pack de sécurité qui va, entre autre, configurer le ficher "security.yaml". <br>
            Ce fichier se trouve dans le dossier packages, lui-meme dans le dossier config à la racine du projet "config\packages\security.yaml" . Ce fichier va permettre à Doctrine de charger l'entité User et utiliser la bonne propriété qui servira d'indentification, de connaitre le hachage choisis pour le mot de passe et retenir ce  qui nous intéresse.<br><br>
            Maintenat, commençons par créer l'entité "User". <br>
            => Tapez les lignes de commande suivantes dans le terminal situé dans votre projet:<br><br>
            => $ coposer require symfony/security-bundle <br>
            => $ php bin/console make:user  <br>
            => suivre les instruction proposé par le terminal ...
            
          </p>
        </div>
      </div>
    </main>
  </body>
</html>