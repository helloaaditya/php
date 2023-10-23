<?php
    if(isset($_POST['submit'])){
        $name=$_FILES['file']['name'];
        $type=$_FILES['file']['type'];
        $templocation=$_FILES['file']['tmp_name'];
        $error=$_FILES['file']['error'];
        $size=$_FILES['file']['size'];
        $fileExt=explode('.', $name);
        $fileActualExt=strtolower(end($fileExt));
        $allowed=array('png','pdf');
        if(in_array($fileActualExt, $allowed)){
            if($error===0){
                if($size<2000000){
                    $NewfileName=uniqid('',true).".".$fileActualExt;
                    move_uploaded_file($templocation, $NewfileName);
                    echo "The file has been uploaded successfully";
                }
                else{
                    echo "Sorry your file size is too big";
                }
            }
            else{
                echo "There was an error uploading your file";
            }
        }
        else{
            echo "Sorry the file type is not accepted";
        }
    }
?>