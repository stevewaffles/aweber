AWeber class to add subscribers to lists
======================

Basic Usage:
------------
Step 1 - Open aweberclass.php and add your keys
Step 2 - Profit

Starter code:
------------
<?php
require('./aweber/aweberclass.php');

//new aweber
$app = new AWeber();
//use the list name you want to add subscribers to
$list = $app->findList($name='LIST_NAME_GOES_HERE');
//create new subscriber
$subscriber = array(
'email' => $_POST['email'],
'name' => $_POST['first_name'].' '.$_POST['last_name']
);
//add them to the list
$add_user = $app->addSubscriber($subscriber, $list);
?>

TODO:
------------
* Add way to read keys and list from environment file. Possibly this - https://github.com/vlucas/phpdotenv
