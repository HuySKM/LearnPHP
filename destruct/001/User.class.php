<?php
class User {
    private $name;
    private $pass;

    public function __construct($name, $pass)
    {
        echo '<br>' . __METHOD__;
        $this->name = $name;
        $this->pass = $pass;
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo '<br>' . __METHOD__;
    }
}
