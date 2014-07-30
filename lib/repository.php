<?php
// это класс репозиторий)
class repository {

    protected $con;
    protected $data;

    function __construct() {
        $this->con = new mysqli('localhost', 'root', '', 'forumdb');
        if (mysqli_connect_errno()) {
            die('Connection error: ' . mysqli_connect_error());
        }
        $this->con->query("SET NAMES utf8");
    }

    function runQuery($query) {
        $result = $this->con->query($query);
        if (!$result) {
            die("SQL error: " . mysqli_error($this->con));
        }
        return $result;
    }

    function fetchArray() {
        $result = array();
        while ($rec = mysqli_fetch_array($this->data)) {
            $result[] = $rec;
        }
        return $result;
    }

    function __destruct() {
        if (isset($this->data)) {
            mysqli_free_result($this->data);
        }
        $this->con->close();
    }

}
