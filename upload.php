<?php
if(isset($_POST['upload']))
{

    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="uploads/";

    $file_path = $_FILES['file']['name'];

    $new_size = $file_size/1024;



    $new_file_name = strtolower($file);


    $final_file=str_replace(' ','-',$new_file_name);


    move_uploaded_file($file_loc,$folder.$final_file);
}
