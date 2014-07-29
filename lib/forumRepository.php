<?php

include_once './lib/repository.php';

class forumRepository extends repository {

    function getSections() {
        $this->data = $this->runQuery('SELECT * FROM section');
        return $this->fetchArray();
    }
    
    function getForums() {
        $this->data = $this->runQuery('SELECT * FROM forum');
        return $this->fetchArray();
    }

}
