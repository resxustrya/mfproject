<?php
session_start();
require_once 'autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication( '812236238877754','4ab57e00d802104a8381f476ee395f7fts' );
// login helper with redirect_uri

    $helper = new FacebookRedirectLoginHelper('http://localhost:7000/fb' );
try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
    return "Error 1: " .$ex->getMessage();
} catch( Exception $ex ) {
    return "Error 2: " .$ex->getMessage();
}
// see if we have a session
if ( isset( $session ) ) {
  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/me' );
  $response = $request->execute();
  // get response
      $graphObject = $response->getGraphObject();
     	$fbid = $graphObject->getProperty('id');              // To Get Facebook ID
 	    $fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
	    $femail = $graphObject->getProperty('email');    // To Get Facebook email ID
	/* ---- Session Variables -----*/
	    $_SESSION['ID'] = $fbid;

    /* ---- header location after session ----*/
  header("Location: index.php");
} else {
  $loginUrl = $helper->getLoginUrl();
header("Location: ".$loginUrl);

}
?>
