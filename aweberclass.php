<?php
require('AWeber-API-PHP-Library/aweber_api/aweber_api.php');

class AWeber{
    function __construct() {
        $this->consumerKey = 'XXX';
        $this->consumerSecret = 'XXX';
        $this->accessToken = 'XXX';
        $this->accessSecret = 'XXX';

        $this->application = new AWeberAPI($this->consumerKey, $this->consumerSecret);
    }

    function findList($listName) {
        $account = $this->application->getAccount($this->accessToken, $this->accessSecret);
        $foundLists = $account->lists->find(array('name' => $listName));

        return $foundLists[0];
    }

    function addSubscriber($subscriber, $list) {
        $account = $this->application->getAccount($this->accessToken, $this->accessSecret);

        $listUrl = "/accounts/$account->id/lists/$list->id";
        $list = $account->loadFromUrl($listUrl);

        try {
            $list->subscribers->create($subscriber);
        }
        catch(Exception $exc) {
            //print_r($exc);
        }
    }
}
?>
