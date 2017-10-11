<?php

namespace Anax\Disqus;

use \Anax\Common\AppInjectableInterface;
use \Anax\Common\AppInjectableTrait;


class Disqus implements AppInjectableInterface
{
    use AppInjectableTrait;


    public function createComment($data) {

        $message = $this->app->textfilter->doFilter($data["message"], ["bbcode", "clickable", "shortcode", "markdown", "purify"]);
        $sql = "INSERT INTO comments (email, message) VALUE (?, ? ,?)";
        $this->app->database->execute($sql, [$data["email"], $message]);

    }

    public function readAllComments() {

        $sql = "SELECT * FROM comments";
        $allComments = $this->app->database->executeFetchAll($sql);

    }

    public function updateComment($data) {

        $sql = "UPDATE comments SET email=?, message=? WHERE comment_id = ?;";
        $this->app->db->execute($sql, [$data["email"], $data["message"], $data["comment_id"]]);

    }

    public function deleteComment($comment_id) {

        $sql = "UPDATE content SET deleted=NOW() WHERE id=?;";
        $this->app->db->execute($sql, [$comment_id]);

    }

}
