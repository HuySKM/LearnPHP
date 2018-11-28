<?php
class Sample {
    public $a = 1;
    private $b = 2;
    protected $c = 3;

    function __construct()
    {
        echo '<br> Truy cập trong lớp';
        echo '<br>--------------------';
        echo '<br> a: ' . $this->a;
        echo '<br> b: ' . $this->b;
        echo '<br> c: ' . $this->c;
    }
}

class miniSample extends Sample {
    function __construct()
    {
        echo '<br> Truy cập trong lớp con';
        echo '<br>--------------------';
        echo '<br> a: ' . $this->a;
        echo '<br> b: ' . $this->b;
        echo '<br> c: ' . $this->c;
    }
}


$test = new Sample();

echo '<br> Truy cập ngoài lớp';
echo '<br>--------------------';
echo '<br> a: ' . $test->a;
echo '<br> b: ' . $test->b;
echo '<br> c: ' . $test->c;


/*$test2 = new miniSample();*/