<?php
require('aweber/aweberclass.php');

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