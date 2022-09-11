<?php

include('conn.php');
require_once __DIR__ . '/vendor/autoload.php';


use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;
use Cloudinary\Api\Admin\AdminApi;
use Cloudinary\Tag\ImageTag;
use Cloudinary\Transformation\Background;
use Cloudinary\Transformation\Resize;


// replace `cloudinary://my_key:my_secret@my_cloud_name` with your environment variable







if (isset($_POST['add_memory'])) {
    if (isset($_FILES['Upload_Images'])) {
        $filename = $_FILES['Upload_Images']['name'];
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        if ($ext == 'webm' || $ext == 'mp4' || $ext == 'mov' || $ext == 'avi' || $ext == 'mkv' || $ext == 'wmn' || $ext == '3gp') {

            $file_path = $_FILES['Upload_Images']['name'];
            $target_dir = "uploads/videos/";
            $target_file = $target_dir . time() . basename($_FILES["Upload_Images"]["name"]);

            if (move_uploaded_file($_FILES["Upload_Images"]["tmp_name"], $target_file)) {
                $r_img_name = time() . $file_path;
                $upload = new UploadApi();
                echo $target_file;


                    $a= json_encode(
                        $upload->upload($target_file, [
                            'resource_type' => 'video',
                            'public_id' => $r_img_name,
                            'use_filename' => TRUE,
                            'overwrite' => TRUE
                
                        ]),
                        JSON_PRETTY_PRINT
                    );


                 $b=json_decode($a);
                   
                

                $a = json_decode($a);
                $video_width = $a->width;
                $video_height = $a->height;
                $type = $a->resource_type;
                $url = $a->secure_url;
                $name = $_POST['name'];
                $about = $_POST['about_memory'];
                $is_releted = $_POST['select'];
                $date = $_POST['date'];

            

               
                $sql = "INSERT INTO info (name,about,is_releted,file_format,file_url,date,width,height)VALUES('$name','$about','$is_releted','$type','$url','$date','$video_width','$video_height')";
                if (mysqli_query($conn, $sql)) {
                    
                    echo "<script> alert('Image Uploaded Succesfully') </script>";
                    header("Location:index.php");
                } else {
                    echo "error while uploading...";
                }
            } else {
                echo "upload filed";
            }
           
        } elseif ($ext == 'gif' || $ext == 'jpeg' || $ext == 'png' || $ext == 'svg'  || $ext == 'webp' || $ext == 'avif' || $ext=='jpg') {

            $file_path = $_FILES['Upload_Images']['name'];
            $target_dir = "uploads/images/";
            $target_file = $target_dir . time() . basename($_FILES["Upload_Images"]["name"]);

            if (move_uploaded_file($_FILES["Upload_Images"]["tmp_name"], $target_file)) {
                $r_img_name = time() . $file_path;
                $upload = new UploadApi();
                echo $target_file;


                    $a= json_encode(
                        $upload->upload($target_file, [
                          
                            'public_id' => $r_img_name,
                            'use_filename' => TRUE,
                            'overwrite' => TRUE
                
                        ]),
                        JSON_PRETTY_PRINT
                    );


                 $b=json_decode($a);
                   
                

                $a = json_decode($a);
                $video_width = $a->width;
                $video_height = $a->height;
                $type = $a->resource_type;
                $url = $a->secure_url;
                $name = $_POST['name'];
                $about = $_POST['about_memory'];
                $is_releted = $_POST['select'];
                $date = $_POST['date'];

            

               
                $sql = "INSERT INTO info (name,about,is_releted,file_format,file_url,date,width,height)VALUES('$name','$about','$is_releted','$type','$url','$date','$video_width','$video_height')";
                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('Image Uploaded Succesfully')</script>";
                    header("Location:add.php");
                } else {
                    echo "error while uploading ";
                }
            } else {
                echo "upload filed";
            }
        } else {

            echo "not supoortrd format please use supported format";
        }
    } else {
        echo "please upload file now";
    }
} else {
    header("Location:add.php");
}
