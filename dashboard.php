<?php
    $file = $_SERVER['DOCUMENT_ROOT'] . "/include/includes.php";
    if (file_exists($file)) {
        include $file;
    } else {
        echo "File not found: " . $file;
    }
?>
<html>
    <head>
        <title>Admin Dashboard</title>
    </head>
    <body>
        <h1>
            Wellcome to Manahil's Dashboard
        </h1>
    </body>
</html>
<?php
    $file2 = $_SERVER['DOCUMENT_ROOT'] . "/include/foot.php";
    if (file_exists($file2)) {
        include $file2;
    } else {
        echo "File not found: " . $file2;
    }
?>