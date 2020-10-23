<?php
namespace App;
use \PDO;

class CommentManager extends Manager{ //recoit de manager

    public function getComments($postID){// je veux afficher les commentaire
        $comments = $this->dbConnect()->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, "%d/%m/%Y %Hh%im%ss") AS date FROM comments WHERE post_id=? ORDER BY comment_date DESC');
        $comments->execute([$postID]);
        $datas = $comments->fetchAll(PDO::FETCH_OBJ); //je ne dois pas l'associer à une classe donc fetchobj
        $comments->closeCursor();
        return $datas;
    }
}
?>