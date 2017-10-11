<?php

$app->router->add("comment", function () use ($app) {
  $app->view->add("comment");
});
