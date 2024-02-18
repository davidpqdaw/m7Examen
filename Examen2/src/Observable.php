<?php
    namespace App;

    interface Observable{
        function attach($observer);
        function detach($observer);
    }
?>