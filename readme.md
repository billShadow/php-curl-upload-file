php curl upload file说明：
php利用curl 上传文件的时候最重要的一点就是通过一个函数创建这个上传文件流
$data = array('userfile'=>new CURLFile(realpath($path)));
注意：文件路径必须是绝对路径
userfile 就是你需要需要上传文件的key值