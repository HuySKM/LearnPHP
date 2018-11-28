<?php
interface fax {
    public function dial ();
    public function send ();
    public function recieve ();
}

interface printer {
    public function printBlack ();
    public function printColor ($color);
    public function printDraft ();
}

class printerFax implements fax, printer {
    public function dial()
    {

    }

    public function send()
    {

    }

    public function recieve()
    {

    }

    public function printBlack (){

    }

    public function printColor ($color) {

    }

    public function printDraft () {

    }
}

$newProduct = new printerFax();