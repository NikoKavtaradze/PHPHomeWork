<?php
    if(isset($_POST['folder'])){
        $n_folder = $_POST['folder'];
        mkdir("MyDrive/".$n_folder);
    }

    if(isset($_POST['file'])){
        $n_file = $_POST['file'];
        fopen("MyDrive/".$n_file.".txt", "w");
    }

    if(isset($_POST['new_name'])){
        $new_name = $_POST['new_name'];
        $old_name = $_POST['old_name'];
        if(!is_file("MyDrive/".$old_name)){
            if(!is_dir("MyDrive/".$new_name)){
                rename("MyDrive/".$old_name, "MyDrive/".$new_name);
            }else{
                echo "<script>alert('The folder exists.')</script>";
            }
        }else{
            if(!file_exists("MyDrive/".$new_name)){
                rename("MyDrive/".$old_name, "MyDrive/".$new_name.".txt");
            }else{
                echo "<script>alert('The File exists.')</script>";
            }
        }
    }
    if (isset($_POST['delete_name'])) {
        $deleteName = basename(trim($_POST['delete_name']));
        $path = "MyDrive/$deleteName";
        if (is_file($path)) {
            unlink($path);
        } elseif (is_dir($path)) {
            rmdir($path);
        }
    }

    $scan = scandir("MyDrive");

?>