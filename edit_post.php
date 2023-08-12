<?php 
    $file = $_SERVER['DOCUMENT_ROOT'] . "/include/includes.php";
    if (file_exists($file)) {
        include $file;
    } else {
        echo "File not found: " . $file;
    }
    include "DBcredentials.php";
    $id = $_GET["id"];
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM `post_data` where id = '$id';";
    $result = $conn -> query($sql);
    $row = mysqli_fetch_assoc($result);
?>
<html>
    <head>
        <title>Create Post</title>
    </head>
    <body>
        <form action="uploadPost.php" method="post" enctype="multipart/form-data">
            <div class = "employee_box">
                <div class = "container">
                    <div class = "row mb-3">
                        <div class = "col-4">
                            <label for = "post_pic" class = "form-control-label" value = "<?php print $row["pic_directory"] ?>" required>Uplaod Main Image For Post:</label>
                        </div>
                        <div class = "col-8">
                            <input type="file" name="post_pic" id="post_pic" class = "form-control"  required>
                        </div>
                    </div>
                    <div class = "row mb-3">
                        <div class = "col-4">
                            <label for = "post_title" class = "form-control-label">Write Main Title Here:</label>
                        </div>
                        <div class = "col-8">
                            <input type="text" name="post_title" id="post_title" class = "form-control" placeholder="Post Main Title Here" value="<?php print $row["post_title"] ?>" required>
                        </div>
                    </div>
                    <div class = "row mb-3">
                        <div class = "col-4">
                            <label for = "post_Description" class = "form-control-label">Write Description Here:</label>
                        </div>
                        <div class = "col-8">
                            <textarea  name="post_Description" id="post_Description" class = "form-control" placeholder="Post Description Here" required><?php print $row["post_description"] ?></textarea>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col-5">
                        </div>
                        <div class = "col-2">
                            <input type="submit" name="submit" id="submit" class = "btn btn-outline-dark" value="Update Post">
                        </div>
                        <div class = "col-5">
                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
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