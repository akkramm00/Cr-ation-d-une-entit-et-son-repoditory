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
  
        </div>
      </div>
    </header>
    <main class="container">
      <div class="row">
        <div class="col">
          <h1>Création de CRUD </h1>
          <p>
            Pour continuer , il va falloir maintenant créer un controller ,. En MVC (Model Vue Controller) c'est le controlleur (le moteur de l'application), qui doit etre utiliser pour modifier les entités. <br> <br>
             POur créer un CRUD (Create, Read, Update, Delete), on peut utiliser la ligne de commande suivante:
            <br><br>

            $ php bin/console make:crud User <br>
            "choose a name for your controller class(e.g UserController) [UserController] "<br>
            Valider => yes.<br>
            "Do you want to generate tests for the controller? [Experimental] (yes/no) [no]". <br>
            On valide "no" <br>  

            Maintenant , le terminal nous emande si nous souhaitons générer des tests. La réponse pâr defaut est non, que nous validons <br>
        Voici les fichiers que symfony vient de créer :
            <ul>
              <li>Created: src/Controller/UserController.php</li>
              <li>Created: src/Form/UserType.php</li>
              <li>Created: templates/base./li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
            
        </div>
      </div>
    </main>
  </body>
</html>
            
            <br>
          </p>
        </div>
      </div>
    </main>
  </body>
</html>