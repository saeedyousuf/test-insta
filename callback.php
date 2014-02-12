<?php


include 'auth.php';

echo "Hello World";
$accessToken = $auth->getAccessToken( $_GET['code'] );
$_SESSION['instagram_access_token'] = $accessToken;
//echo "<pre>"; print_r($_SESSION); exit;

$instagram = new \Instagram\Instagram($accessToken);

$currentUser = $instagram->getCurrentUser();

// $locations = $instagram->searchLocations( $lat, $lng );
//$media = $instagram->searchMedia( $lat, $lng );
$tags = $instagram->searchTags( 'tags' );
$users = $instagram->searchUsers( 'username' );
echo "<pre>"; print_r($currentUser); exit;
?>