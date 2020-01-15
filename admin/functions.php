<?php
    require('connect.php');

    function getPlanetData($conn) {
        $getData = 'SELECT * FROM info';
        $runQuery = $conn->query ($getData);

        $result = array();

        while ($row = $runQuery->fetch(PDO::FETCH_ASSOC)) {
            //push each row of data into our arry to make it easy to eterire
            $result[] = $row;
        }

        return $result;

    }