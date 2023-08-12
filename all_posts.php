<?php
    $file = $_SERVER['DOCUMENT_ROOT'] . "/include/includes.php";
    if (file_exists($file)) {
        include $file;
    } else {
        echo "File not found: " . $file;
    }
?>
<a href = "create_post.php">
    <button type = "button" class = "btn btn-outline-dark create_button mb-3 custom_button">Create New Post</button>
</a>

<?php
    if(isset($_GET['post']) && $_GET['post'] == "created"){
        echo("
            <script>
                alert('Your Post Created Successfully!');
            </script>
        ");
    }else if(isset($_GET['post']) && $_GET['post'] == "failed"){
        echo("
            <script>
                alert('Your Post got an Error!');
            </script>
    ");
    }
    include "DBcredentials.php";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT post_title, id, created_at, updated_at FROM `post_data` order by created_at desc;";
    $result = $conn -> query($sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($rows);
    echo("
        <table border='2' class = 'table custom_table'>
            <tr>
                <th>ID</th>
                <th>Post Title</th>
                <th>Created</th>
                <th>Last Updated</th>
                <th>Action</th>
            </tr>
        ");
    foreach ($rows as $row) {
        // Access individual columns of the row using associative array keys
        $postTitle = $row["post_title"];
        $ID = $row["id"];
        $createdDate = date("M j, Y", strtotime($row["created_at"]));
        $updatedDate = $row["updated_at"];
        if($updatedDate){
            $updatedDate = date("M j, Y", strtotime($row["updated_at"]));
        }
        $updatedDate = date("M j, Y", strtotime($row["created_at"]));
        $editLink = "'edit_post.php?id=".$ID."'";
        echo ('
            <tr>
                <td>'.$ID.'</td>
                <td>'.$postTitle.'</td>
                <td>'.$createdDate.'</td>
                <td>'.$updatedDate.'</td>
                <td>
                    <a href = '.$editLink.' >Edit</a>
                    <a href = "">Delete</a>
                </td>
            </tr>
        ');
    }
    $file2 = $_SERVER['DOCUMENT_ROOT'] . "/include/foot.php";
    if (file_exists($file2)) {
        include $file2;
    } else {
        echo "File not found: " . $file2;
    }
?>