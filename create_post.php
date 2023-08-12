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
        <title>Create Post</title>
    </head>
    <body>
        <form action="uploadPost.php" method="post" enctype="multipart/form-data">
            <div class = "employee_box">
                <div class = "container">
                    <div class = "row mb-3">
                        <div class = "col-4">
                            <label for = "post_pic" class = "form-control-label">Uplaod Main Image For Post:</label>
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
                            <input type="text" name="post_title" id="post_title" class = "form-control" placeholder="Post Main Title Here" required>
                        </div>
                    </div>
                    <div class = "row mb-3">
                        <div class = "col-4">
                            <label for = "post_Description" class = "form-control-label">Write Description Here:</label>
                        </div>
                        <div class = "col-8">
                            <input type="text" name="post_Description" id="post_Description" class = "form-control" placeholder="Post Description Here" required>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col-5">
                        </div>
                        <div class = "col-2">
                            <input type="submit" name="submit" id="submit" class = "btn btn-outline-dark" value="Upload Post">
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