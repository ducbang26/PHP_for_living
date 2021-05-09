<?php
include $level.comp_path."Head.php";
include $level.comp_path."Header.php";

if($isHome==true)
{
    include $level.ctn_path."ctnHome.php";
}
if($isProduct==true)
{
    include $level.ctn_path."ctnProduct.php";
}
if($isCart==true)
{
    include $level.ctn_path."ctnCart.php";
}
if($isAllProduct==true)
{
    include $level.ctn_path."ctnAllProduct.php";
}
include $level.comp_path."Footer.php";
include $level.comp_path."Button_Scroll_top.php";

?>