<?php
 namespace App;

 require "model/Autoloader.php";
    Autoloader::register();

    class HomeController{
        public static function listPosts()
        {
            $manager = new PostManager(); // création d'un objet
            $posts = $manager->getPosts(); // appel à la méthode de cet objet

            require("view/frontend/listPostView.php");
        }

        public static function getPost()
        {
            $postManager = new PostManager();
            $commentManager = new CommentManager(); //commentaire du manager, donc en lien avec postmanager
            $id = htmlspecialchars($_GET['id']);
            $post = $postManager->getPost($id); //je veux l'article relier à l'id
            $comments = $commentManager->getComments($id); //je veux le commentaire relier à l'id

            require('view/frontend/postView.php'); //ils vont etre "envoyer" dans ma vue
        }

    }

?>