<?php
class Upload
{

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
    function __construct($file_name)
    {
        $fileInfo = $_FILES[$file_name];
        $this->_fileName = $fileInfo['name'];
        $this->_fileSize = $fileInfo['size'];
        $this->_fileExtension = $this->getFileExtension();
        $this->_fileTmp = $fileInfo['tmp_name'];

    }


    //Phương thức lấy thành phần mở rông của tập tin upload
    function getFileExtension()
    {
        $subject = $this->_fileName;
        $pattern = '#\.([^\.]+)$#i';
        preg_match($pattern, $subject, $matches);
        return $matches[1];


    }


    //Phương thức thiết lập thành phần mở rộng được phép upload
    //Param string (ex: gif|jpg|png)
    function setFileExtension($value)
    {
        $subject = $this->_fileExtension; //jpg
        $pattern = '# ('. $value . ')#i';
        if(preg_match($pattern, $subject) != 1){
        $this->_errors[] = 'Phần mở rộng không phù hợp';
        }
    }


    //Phương thúc thiết lập kích thước tôi đa được phép upload
    //Param int (ex: 100kb)
    function setFileSize($value)
    {
        $size = $value * 1024;
        if($this->_fileSize > $size){
            $this->_errors[] = 'Ảnh của bạn không hợp lệ';
        }


    }


    //Phương thức thiết lập thư mục chúa tập tin trên server
    //Param string (Ex: Images/)
    function setUploadDir($value)
    {
        if (file_exists($value)) {
            $this->_uploadDir = $value;
        } else {
            $this->_errors[] = 'Thu muc khong ton tai';
        }

    }


    //Kiểm tra điều kiện upload
    function isVail()
    {

        $flagErr = false;
        if(count ($this->_errors)>0) {
            $flagErr = true;
        }
        return $flagErr;

    }


    //Phương thức upload tập tin
    function upload($rename = false, $prefix = 'file_')
    {
        if($rename == false){
            $source = $this->_fileTmp;
            $dect = $this->_uploadDir . $this->_fileName;
        }else{
            $source = $this->_fileTmp;
            $dect = $this->_uploadDir . $prefix . time () . ' . ' . $this->_fileExtension;
        }
        @copy($source, $dect);
    }
}


