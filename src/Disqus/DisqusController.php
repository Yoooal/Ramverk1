<?php

namespace Anax\Disqus;

use \Anax\Common\AppInjectableInterface;
use \Anax\Common\AppInjectableTrait;


class DisqusController implements AppInjectableInterface
{
    use AppInjectableTrait;

    public function createComment($data) {

        $this->di->get("disqus")->createComment();
        $this->di->get("response")->sendJson(["message" => "Comment created"]);
        exit;
    }

    public function readAllComments() {

        $this->di->get("disqus")->readAllComments();
        exit;
    }

    public function updateComment($data) {

        $this->di->get("disqus")->updateComment();
        $this->di->get("response")->sendJson(["message" => "Comment updated"]);
        exit;

    }

    public function deleteComment($comment_id) {

        $this->di->get("disqus")->deleteComment();
        $this->di->get("response")->sendJson(["message" => "Comment deleted"]);
        exit;

    }

}
