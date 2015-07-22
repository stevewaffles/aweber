<?php
require_once('AWeber-API-PHP-Library/aweber_api/aweber_api.php');

// Put the consumer key and secret from your App on labs.aweber.com below.
$consumerKey    = 'XXX';
$consumerSecret = 'XXX';

$aweber = new AWeberAPI($consumerKey, $consumerSecret);

// Put the callback URL of your app below or set to 'oob' if your app isnt
// a web based application.
$callbackURL    = 'http://localhost/callback.php';

// get a request token
list($key, $secret) = $aweber->getRequestToken($callbackURL);

// get the authorization URL
$authorizationURL = $aweber->getAuthorizeUrl();

// store the request token secret
setcookie('aweber_secret', $secret);

// redirect user to authorization URL
header("Location: $authorizationURL");
exit();

?>
