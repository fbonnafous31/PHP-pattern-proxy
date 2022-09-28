<?php

    namespace App;

    class Proxy implements Subject {

        private $realSubject;

        public function __construct(RealSubject $realSubject) {
            $this->realSubject = $realSubject;
        }

        public function request(): void {
            if ($this->checkAccess()) {
                $this->realSubject->request();
                $this->logAccess();
            }
        }

        public function checkAccess(): bool {
            // some real checks should go here
            echo "Proxy : Checking Access prior to firing a real request.<br>";
            return true;
        }

        public function logAccess(): void {
            // some real checks should go here
            echo "Proxy : Logging the time of request.<br>";
        }

    }

?>