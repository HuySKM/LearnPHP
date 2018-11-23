<?php
class Upload {

    var $file_name;
    // Biến lưu trữ tên tập tin upload

    var $_fileSize;
    //Biến lưu trữ kích thước tập tin upload



    var $_fileExtension;
    //Biến lưu trữ phần mở rông của tập tin upload


    var $_fileTmp;
    //Biến lưu trữ đường dẫn của thư mục tạm tập tin upload

    var $_uploadDir;
    //Biến lưu trữ đường dẫn trên server của tập tin upload

    var $_errors;
    //Biến lưu trư errors


    //Phương thức khởi tạo đối tượng
    function __construct($file_name){
        $fileInfo = $_FILES[$file_name];
        $this ->_fileName = $fileInfo['name'];
        $this->_fileSize = $fileInfo['size'];



    }



    //Phương thức lấy thành phần mở rông của tập tin upload
    function getFileExtension(){
        $subject = $this->_fileName;
        $pattern = '#\.([^\.]+)$#i';
        preg_match($pattern, $subject,$matches);
        echo "<pre>";
        print_r($matches);
        echo "</pre>";

    }


    //Phương thức thiết lập thành phần mở rộng được phép upload
    //Param string (ex: gif|jpg|png)
    function setFileExtension ($value){

    }


    //Phương thúc thiết lập kích thước tôi đa được phép upload
    //Param int (ex: 100kb)
    function setFileSize($value){

    }


    //Phương thức thiết lập thư mục chúa tập tin trên server
    //Param string (Ex: Images/)
    function setUploadDir($value){

    }


    //Kiểm tra điều kiện upload
    function isVal(){

    }


    //Phương thức upload tập tin
    function upload ($rename = false, $prefix = 'file_'){

    }
}

