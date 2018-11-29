
<?php

class User {
    private $name;
    private $pass;
    private $lastName;
    private $firtName;
    private $website;

    public function __construct($name, $pass)
    {

        echo '<br>' . __METHOD__;
        if($name == 'Huy' && $pass = '12345678')
            $this->name = $name;
            $this->pass = $pass;
            $this->getInfo();
    }

    public function getInfo () {
        //connect database

        $this->lastName = 'Nguyen';
        $this->firtName = 'Nguyen';
        $this->website = 'www.bdsyenbai.com';
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo '<br>' . __METHOD__;
        $_SESSION['user'] = serialize($this);
    }
}