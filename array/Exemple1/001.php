<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, group_name FROM user_group";
$result = $conn->query($sql);

$newArray = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["id"]. " - " . $row["group_name"]. " " ."<br>";
        $newArray[$row["id"]] = $row["group_name"];
    }
    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

    function selectbox($name, $id, $options, $attributes){
       $xhtml ='<select name = "' . $name . '" id = "' . $name . '" style="' . $attributes . '">';
        foreach ($options as $key => $value){
            if ($key == $id){
                $xhtml.= '<option value="' .$key .'" selected = "selected">' . $value . '</option>';
            }else{
                $xhtml.= '<option value="' .$key .'">' . $value . '</option>';
            }

        }
        $xhtml.= '</select>';
        return $xhtml;
    }

    $select = selectbox('group_member', 2 , $newArray, 'width: 200px;');
    echo $select;

} else {
    echo "0 results";
}
$conn->close();
?>
