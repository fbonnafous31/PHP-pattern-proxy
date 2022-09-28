<?php

    namespace App;

    class RealSubject implements Subject {

        public function request() :void {
            echo "Real Subject : Handling request.<br>";
        }

    }

?>