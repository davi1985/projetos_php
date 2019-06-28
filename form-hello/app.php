<?php
    function hadName() 
    {
        if (isset($_POST['name']) && !empty($_POST['name'])) {
            $name = addslashes($_POST['name']);
        return $name;
        }
    }   
?>