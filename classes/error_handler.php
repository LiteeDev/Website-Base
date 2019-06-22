<?php
$Router->onHttpError(function ($code, $router) {
    switch ($code) {
        case 404:
            $router->response()->body(
                'This page does not exist'
            );
            break;
        case 405:
            $router->response()->body(
                'You can\'t do that!'
            );
            break;
        default:
            $router->response()->body(
                'Oh no, a bad error happened that caused a '. $code
            );
    }
});
?>
