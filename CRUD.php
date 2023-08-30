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
              <li>created: src/Controller/UserController.php</li>
              <li>created: src/Form/UserType.php</li>
              <li>created: templates/base.html.twig</li>
              <li>created: templates/user/-delete_form.html.twig</li>
              <li>created: templates/user/form.html.twig</li>
              <li>created: templates/user/edit.html.twig</li>
              <li>created: templates/user/index.html.twig</li>
              <li>created: templates/user/new.html.twig</li>
              <li>created: templates/user/show.html.twig</li>
           
            </ul>
          <p>
            un fichier form qui contient un formulaire pour créer un nouvel utilisateur, et six fichiers twig dont un base.html.twig qui sert de gabarit. il est aussi inséré à extends à tous les autres fichiers twig.
          Chaque fichier twig correspond à une vue que peut appeler le contrôleur. Et enfin, le fichier contrôleur qui nous intéresse particulièrement que nous allons détailler. Voici ce que vous devriez avoir :
          </p>
          <?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user')]
class UserController extends AbstractController
{
   #[Route('/', name: 'app_user_index', methods: ['GET'])]
   public function index(UserRepository $userRepository): Response
   {
       return $this->render('user/index.html.twig', [
           'users' => $userRepository->findAll(),
       ]);
   }

   #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
   public function new(Request $request, UserRepository $userRepository): Response
   {
       $user = new User();
       $form = $this->createForm(UserType::class, $user);
       $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid()) {
           $userRepository->save($user, true);

           return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
       }

       return $this->renderForm('user/new.html.twig', [
           'user' => $user,
           'form' => $form,
       ]);
   }

   #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
   public function show(User $user): Response
   {
       return $this->render('user/show.html.twig', [
           'user' => $user,
       ]);
   }

   #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
   public function edit(Request $request, User $user, UserRepository $userRepository): Response
   {
       $form = $this->createForm(UserType::class, $user);
       $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid()) {
           $userRepository->save($user, true);

           return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
       }

       return $this->renderForm('user/edit.html.twig', [
           'user' => $user,
           'form' => $form,
       ]);
   }

   #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
   public function delete(Request $request, User $user, UserRepository $userRepository): Response
   {
       if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
           $userRepository->remove($user, true);
       }

       return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
   }
}
            
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