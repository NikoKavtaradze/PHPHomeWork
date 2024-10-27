<?php
    include "file_folder.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lercture 5</title>
    <link rel="stylesheet" href="asdasd.css">

</head>
<body>
    <div class="container">
        <div class="controls">
            <div class="row">
                <a href="index.php">HOME</a>
            </div>
            <div class="row">
                <form action="" method="post">
                    <input type="text" placeholder="name" name="folder"> <button>Create Folder</button>
                </form>
            </div>
            <div class="row">
                <form action="" method="post">
                    <input type="text" placeholder="name" name="file"> <button>Create File</button>
                </form>
            </div>
        </div>
        <div class="content">
            <table class="dataset">
                <tr>
                    <th>Name</th>
                    <th>Rename</th>
                    <th>Delete</th>
                    <th>Download</th>
                </tr>
                <?php
                    for($i=2; $i<count($scan); $i++){
                ?>
                <tr>
                    <td class="<?=is_file("MyDrive/".$scan[$i])?"file":"folder"?>"> <span> <?=$scan[$i]?> </span></td>
                    <td style="width:25%">
                        <form action="" method="post">
                            <input type="text" plcaeholder="rename" name="new_name">
                            <input type="hidden" name="old_name" value="<?=$scan[$i]?>">
                            <button>Rename</button>
                        </form>
                    </td>
                    <td>
                    <form action="" method="post" style="display:inline;">
                        <input type="hidden" name="delete_name" value="<?= htmlspecialchars($scan[$i]) ?>">
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this?');">Delete</button>
                    </form>
                    </td>       
                    <td>
                        <a href="<?="MyDrive/".$scan[$i]?>" download><?=is_file("MyDrive/".$scan[$i])?"download":""?></a>
                        
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>