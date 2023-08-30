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
            <a href="repository.php">Repository</a>
           <a href="UserRepository.php">Userrepository</a>
           <a href="CRUD.php">CRUDmmanip</a>
           <a href="essentiel.php">Essentiel des Entités</a>
  
        </div>
      </div>
    </header>
    <main class="container">
      <div class="row">
        <div class="col">
          <h1>L'essentiel pour les Entités </h1>  
          <p>
            La liste des commandes à uilmiser pour gerer les Entités:<br>

            *$ composer require symfony/orm.pack <br>
            *$ composer require --dev symfony/maker-bundle <br>
            *$ php bin/console doctrine:database:create <br><br>

            Cela nous permet de construire la base de données et avoir les outils nécessaires pour cela. <br>
            POur chaque entité,vous suivez la procédure de la commande suivante: <br>
            *s php bin/console make:entity <br>
            En tachant d'attribuer les propriétés mentionnées dans le diagramme de classe avec types et relations voulues.<br><br>

            Pour mettre à jour la base de données avec les commandes suivantes: <br><br>

            *$ php bin/console Make:migration <br>
            *$ php bin/console doctrine:migration:migrate. <br><br>
    
          </p>
          <h2>Expliquer le role du repository dans la manipulation8 des entités</h2>
          <p>
           Lors de la création d’une entité, il est nécessaire de posséder un repository pour la manipulation de celle-ci. De base, avec une installation à partir de MakerBundle, le repository possédera des méthodes de recherches telles que find(), findAll(), findBy() et findOneBy() ainsi qu’une méthode save() et remove() pour sauvegarder ou supprimer une entité. Mais il est possible d’ajouter d’autres méthodes voir même d’utiliser QueryBuilder pour créer une méthode de recherche particulière.<br><br>

Pour utiliser ces méthodes il faudra les appeler à partir du contrôleur, en veillant que le repository soit injecté dans la méthode et puis en l’utilisant par exemple avec une ligne de code comme celle-ci : $userRepository->remove($user, true);
          </p>
        </div>
      </div>
    </main>
  </body>
</html>
      