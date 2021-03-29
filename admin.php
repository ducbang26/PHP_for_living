<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "config.php";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <?php 
    
        include comp_path."Admin_Sidebar.php";
        include comp_path."Admin_main.php";

    ?>
    
</body>

</html>