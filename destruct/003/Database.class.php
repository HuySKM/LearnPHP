<?php
class Database {

    private $server = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db = 'test';

    private $flagConn = false;
    private $result;
    private $conn;


    public function __construct()
    {
        $conn = new mysqli_connect($this->server, $this->username, $this->password);
        if($conn->connect_error) {
            die ('Không kết nối được:' . $conn->connect_error);
        }else {
            $this->conn = $conn;
            $this->flagConn = true;
            mysqli_select_db($this->db);
        }
    }

    public function fetchAll ($table)
    {   if($this->flagConn == true);
        $sql = 'SELECT * FROM' . $table;
        $this->result = mysqli_query($this->conn, $sql);
        return $this->result;

    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        if($this->flagConn == true);
        if($this->result != NULL){
            mysqli_free_result($this->result);
        }
        mysqli_close($this->$conn);
    }
}