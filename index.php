<?php
include('conn.php');

?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="IT Batch&nbsp;2019-2022, Our Memories">
    <meta name="description" content="">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Lobster:400|Ubuntu:300,300i,400,400i,500,500i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">


    <title>Home</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" "="" defer=""></script>
    <script class=" u-script" type="text/javascript" src="js/nicepage.js" "="" defer=""></script>
    <meta name=" generator" content="Nicepage 4.17.10, nicepage.com">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
<style>
   .u-section-1 {
  background-image: linear-gradient(0deg, rgba(0,0,0,0.05), rgba(0,0,0,0.05)), url("images/abc1.jpg");
  background-position: 50% 50%;
}
</style>


</head>


<?php
include('layouts/header.php');
?>
<section class="u-clearfix u-image u-shading u-section-1" id="carousel_4b01" data-image-width="1318"
    data-image-height="640">
    <div class="u-clearfix u-sheet u-valign-top-xl u-sheet-1">
        <div class="u-align-center u-container-style u-expanded-width u-group u-shape-rectangle u-group-1">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h3 class="u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000">
                    PLGPl</h3>
                <h2 class="u-custom-font u-font-raleway u-text u-text-2" data-animation-name="customAnimationIn"
                    data-animation-duration="1000">IT&nbsp;<br>Batch&nbsp;2019-2022
                </h2>
                <a href="About.html" data-page-id="208540953"
                    class="u-active-palette-2-light-2 u-btn u-btn-round u-button-style u-gradient u-hover-palette-2-light-2 u-none u-radius-50 u-text-active-palette-4-light-2 u-text-body-alt-color u-text-hover-palette-4-light-2 u-btn-1"
                    data-animation-name="customAnimationIn" data-animation-duration="1000">More more</a>
            </div>
        </div>
    </div>
</section>
<section class="u-align-center u-clearfix u-section-2" id="sec-7ad8">
    <div class="u-clearfix u-sheet u-valign-middle-xl u-valign-middle-xs u-sheet-1">
        <h2 class="u-align-center u-custom-font u-font-lobster u-text u-text-1" data-animation-name="flipIn"
            data-animation-duration="1000" data-animation-direction="X">Our Memories</h2>
    </div>
</section>
<section class="u-clearfix u-section-3" id="sec-bcc3">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
<?php
$sql="SELECT * FROM info order by id desc";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){

if($row['file_format']=='image'){
echo '                
<div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item u-list-item-1"
                    data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">
                    <div class="u-container-layout u-similar-container u-container-layout-1">
                        <img class="u-expanded-width u-image u-image-default u-image-1"
                            src="'. $row['file_url'].'"
                            alt="" data-image-width="'. $row['width'].'" data-image-height="'. $row['height'].'"
                            data-href="'. $row['file_url'].'">
                        <p class="u-custom-font u-font-lobster u-text u-text-1">'. $row['date'].'| by '. $row['name'].'</p>
                        <h1 class="u-custom-font u-font-ubuntu u-text u-title u-text-2">'. $row['about'].'</h1><span
                            class="u-border-2 u-border-palette-1-base u-file-icon u-icon u-icon-circle u-text-palette-1-base u-icon-1"
                            data-href="'. $row['file_url'].'" download><img src="images/724935-fbb66b35.png" alt=""></span>
                    </div>
                </div>
              

';

}else{

    echo '
    <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item u-list-item-2" data-animation-name="flipIn" data-animation-duration="1000" data-animation-direction="X">
                        <div class="u-container-layout u-similar-container u-container-layout-2">
                            <video controls class="u-expanded-width u-image u-image-default u-image-2"
                                  alt="" data-href="'. $row['file_url'].'">
                                  <source src="'. $row['file_url'].'" type="video/mp4">
                                
                                </video>
                            <p class="u-custom-font u-font-lobster u-text u-text-3">'. $row['date'].'| by '. $row['name'].'</p>
                            <h1 class="u-custom-font u-font-ubuntu u-text u-title u-text-4">'. $row['about'].'</h1><span
                                class="u-border-2 u-border-palette-1-base u-file-icon u-icon u-icon-circle u-text-palette-1-base u-icon-2"
                                data-href="'. $row['file_url'].'"><img src="images/724935-fbb66b35.png" alt=""></span>
                        </div>
                    </div>
    ';
}




}

}
?>


                



               




               
            </div>
        </div>
    </div>
</section>

<?php
include('layouts/footer.php');
?>