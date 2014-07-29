<?php

include_once './lib/repository.php';

class topicRepository extends repository {

    function getTopics() {
        $this->data = $this->runQuery('SELECT * FROM topic');
        return $this->fetchArray();
    }

    function getPosts() {
        $this->data = $this->runQuery('SELECT * FROM post');
        return $this->fetchArray();
    }

}
