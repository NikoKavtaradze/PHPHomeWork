<?php
    if(isset($_POST["Submit"])){
        $file = $_FILES['File'];

        $fileName = $_FILES['File']['name'];
        $fileTmpName = $_FILES['File']['tmp_name'];
        $fileSize = $_FILES['File']['size'];
        $fileError = $_FILES['File']['error'];
        $fileType = $_FILES['File']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
    }
?>