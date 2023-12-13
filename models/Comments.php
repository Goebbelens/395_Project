<?php
// модель для работы с таблицей комментариев

require_once 'DBConnect.php';

class Comments
{
    /**
     * получение списка комментариев к новости по ID
     */
    public static function getCommentsByNewsId($id){
        $pdo = DBConnect::getConnection();

        $query = "  SELECT comments.id AS commentsId, comment, comments.add_date,
                        first_name, last_name, image
                    FROM comments, users
                    WHERE user_id = users.id
                    AND news_id = $id
                    AND approved = 1;";
        return $pdo->query($query)->fetchAll();
    }

    /**
     * добавление нового комментария
     */
    public static function addNewComment($comment, $newsId, $userId){
        $pdo = DBConnect::getConnection();

        $query = "  INSERT INTO comments(comment, news_id, user_id)
                        VALUES(?, ?, ?)";
        $statement = $pdo->prepare($query);
        $statement->execute([$comment, $newsId, $userId]);
    }

    /**
     * получение списка комментариев по ID пользователя
     */
    public static function getCommentsByUserId($id){
        $pdo = DBConnect::getConnection();

        // comment, news_id, add_date, title
        $query ="   SELECT comment, news_id, comments.add_date, title as news_title
                    FROM comments, news
                    WHERE news_id = news.id
                    AND user_id = $id
                    AND approved = 1;";
        return $pdo->query($query)->fetchAll();
    }
}