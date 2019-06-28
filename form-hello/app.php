<?php
    function hadName() 
    {
        if (isset($_POST['name']) && !empty($_POST['name'])) {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            return $name;
        }
    }   
?>