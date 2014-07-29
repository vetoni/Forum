<?php

class repository {

    protected $con;
    protected $data;

    function __construct() {
        $this->con = mysql_connect('localhost', 'root', '') or die(mysql_error());
        mysql_select_db('forumdb', $this->con) or die(mysql_error());
        mysql_query('SET NAMES utf8', $this->con);
    }

    function runQuery($query) {
        $result = mysql_query($query, $this->con);
        if(!$result) {
            die(mysql_error());
            
        }
        return $result;
    }

    function fetchArray() {
        $result = array();
        while ($rec = mysql_fetch_array($this->data)) {
            $result[] = $rec;
        }
        return $result;
    }

    function __destruct() {
        mysql_free_result($this->data);
        if(is_resource($this->con))mysql_close($this->con);
    }

}
