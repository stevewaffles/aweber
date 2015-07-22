<?php
require_once('AWeber-API-PHP-Library/aweber_api/aweber_api.php');

// Put the consumer key and secret from your App on labs.aweber.com below.
$consumerKey    = 'XXX';
$consumerSecret = 'XXX';

$aweber = new AWeberAPI($consumerKey, $consumerSecret);

// Pull the request token key and verifier code from the URL
$aweber->user->requestToken = $_GET['oauth_token'];
$aweber->user->verifier = $_GET['oauth_verifier'];

// retrieve the stored request token secret
$aweber->user->tokenSecret = $_COOKIE['aweber_secret'];

// Exchange a request token with a verifier code for an access token.
list($accessTokenKey, $accessTokenSecret) = $aweber->getAccessToken();

echo "accessTokenKey: ".$accessTokenKey."<br />";
echo "accessTokenSecret: ".$accessTokenSecret."<br />";
?>
