<?php

$app->router->add("comment", function () use ($app) {
  $app->renderPage("comment", "Home");
});
