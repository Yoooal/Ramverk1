<?php

namespace Anax\App;

/**
 * An App class to wrap the resources of the framework.
 *
 * @SuppressWarnings(PHPMD.ExitExpression)
 */
class App
{
    public function redirect($url)
    {
        $this->response->redirect($this->url->create($url));
        exit;
    }

    public function renderPage($data, $status = 200) {

        $this->view->add("navbar", [], "navbar");
        $this->view->add("footer", [], "footer");
        // Add layout, render it, add to response and send.
        $this->view->add("layout/layout", $data, "layout");

        $body = $this->view->renderBuffered("layout");

        $this->response->setBody($body)
                       ->send($status);
        exit;
    }
}
