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
            Chaque entité a ses propriétés qui représentent les champs des tables de la base de données que l'on appelle aussi parfois " propriété". Une Entité a ses méthodes et sesw propriétés aiinsi qu'un Repository qui permettra d'effectuer des requetes vers la basse de données.
          </p>
        </div>
      </div>
    </main>
  </body>
</html>