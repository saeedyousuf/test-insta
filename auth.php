<?php

require 'vendor/autoload.php';

$auth_config = array(
    'client_id'         => '025dd490b62c4490a6b2f6a5f7da3059',
    'client_secret'     => '7a4d60be734847639530bf706e847408',
    'redirect_uri'      => 'http://localhost/test-insta/callback.php',
    'scope'             => array( 'likes', 'comments', 'relationships' )
);

$auth = new Instagram\Auth( $auth_config );

?>