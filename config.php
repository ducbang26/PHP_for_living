<?php
define('comp_path','component/');
define('img_path','img/');
define('compAdmin_path','component/admin/');
define('compCart_path','component/cart/');
define('compHome_path','component/home/');
define('compProduct_path','component/product/');
define('ctn_path','container_pages/');
define('imgHeadPhone_path','img/products/headphone/');
define('imgIPhone_path','img/products/iPhone/');
define('imgSS_path','img/products/samsung/');


$connect = mysqli_connect('localhost','root','','phoneshop');
mysqli_query($connect,"SET NAMES 'UTF8'");
if($connect){
    echo "Ket noi thanh cong ";
}
else{
    echo "ket noi that bai ";
}
?>
