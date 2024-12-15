<?php
    function displayUploadedFiles() {
        $directory = 'Uploads';
        $files = scandir($directory);
    
        echo "<h3>Uploaded Files:</h3>";
        echo "<ul>";
        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                echo "<li><a href='$directory/$file' target='_blank'>$file</a></li>";
            }
        }
        echo "</ul>";
    }


    if(isset($_POST['Submit'])){
        $file = $_FILES['File'];

        $fileName = $_FILES['File']['name'];
        $fileTmpName = $_FILES['File']['tmp_name'];
        $fileSize = $_FILES['File']['size'];
        $fileError = $_FILES['File']['error'];
        $fileType = $_FILES['File']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        
    displayUploadedFiles();
?>