<?php

namespace Anax\Disqus;

use \Anax\Common\AppInjectableInterface;
use \Anax\Common\AppInjectableTrait;


class DisqusController implements AppInjectableInterface
{
    use AppInjectableTrait;

    public function createComment($data) {

        $this->app->disqus->createComment();
        $this->app->response->sendJson(["message" => "Comment created"]);
        exit;
    }

    public function readAllComments() {

        $this->app->disqus->readAllComments();
        exit;
    }

    public function updateComment($data) {

        $this->app->disqus->updateComment();
        $this->app->response->sendJson(["message" => "Comment updated"]);
        exit;

    }

    public function deleteComment($comment_id) {

        $this->app->disqus->deleteComment();
        $this->app->response->sendJson(["message" => "Comment deleted"]);
        exit;

    }

}
