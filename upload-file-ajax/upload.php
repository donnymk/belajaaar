<?php
if(is_array($_FILES)){
    if(is_uploaded_file($_FILES['userImage']['tmp_name'])){
        $sourcePath=$_FILES['userImage']['tmp_name'];
        $targetPath="images/".$_FILES['userImage']['name'];
        if(move_uploaded_file($sourcePath,$targetPath)){
?>
            <img src="<?= $targetPath ?>" width="80px" height="100px">
<?php
        }
    }
}
?>