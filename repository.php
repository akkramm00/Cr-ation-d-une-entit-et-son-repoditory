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
           <a href="UserRepository.php">UserRepository</a>
           <a href="CRUD.pphp">CRUDmanip</a>
          <a href="essentiel.php">Essentiel des Entités</a>
  
        </div>
      </div>
    </header>
    <main class="container">
      <div class="row">
        <div class="col">
          <h1>Le Repository</h1>
          <p>
            <h3>Qu'est qu'un repository avec Doctrine?</h3>

            Un repository est une classe dont la rsponsabilité est de faire des requêtes vers la base de données. Ainsi, grace à EntityManager, les entités pourront être manipulées et grâce à queryBuilder, il sera possible de faire des requêtes personnalisées. Nous revienderons sur ces deux classes dans la seconde partie de ce cours.<br><br>

            revenons sur le fichier "UserRepository" qui a été créé , qui se trouve dans le dossier "src/Repository/UserRepository.php" .( Voir le fichier UserRepository.php)
        </div>
      </div>
    </main>
  </body>
</html>