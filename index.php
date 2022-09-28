<?php

    function clientCode(App\Subject $subject) {
        $subject->request();
    }

    require_once (__DIR__ . '/libraries/autoload.php');

    echo "Client : Executing the client code with a real subject :<br>";
    $realSubject = new App\RealSubject();
    clientCode($realSubject);

    echo "<br><br>";
    echo "Client : Executing the client code with a proxy :<br>";
    $proxy = new App\Proxy($realSubject);
    clientCode($proxy);

?>