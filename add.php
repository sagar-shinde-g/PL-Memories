
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Add PL Memories">
    <meta name="description" content="">
    <title>Add Memories</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/Add-Memories.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" "="" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" "="" defer=""></script>
    <meta name="generator" content="Nicepage 4.17.10, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <style>

.u-section-1 {
  background-image: linear-gradient(0deg, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url("images/aaa.jpg");
  background-position: 50% 50%;
}
    </style>
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Add Memories">
    <meta property="og:type" content="website">
  </head>

<?php
include('layouts/header.php');


?>

<section class="u-clearfix u-image u-shading u-section-1" id="sec-1363" data-image-width="4000"
    data-image-height="1800">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-clearfix u-expanded-width u-group-elements u-group-elements-1">
            <h1 class="u-custom-font u-font-montserrat u-text u-text-1">Add PL Memories&nbsp;</h1>
            <div
                class="u-align-center u-border-1 u-border-white u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-line u-line-horizontal u-line-1">
            </div>
        </div>
        <div class="u-align-center u-form u-form-1">
            <form action="upload.php" method="POST" enctype="multipart/form-data"
                class="u-clearfix u-form-custom-backend u-form-spacing-14 u-form-vertical u-inner-form" source="custom"
                name="add_memory_form" style="padding: 10px;" redirect="true">
                <div class="u-form-group u-form-name u-label-top">
                    <label for="name-37a9" class="u-label">Name</label>
                    <input type="text" placeholder="Enter your Name" id="name-37a9" name="name" value=""
                        class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                </div>
                <div class="u-form-date u-form-group u-label-top u-form-group-2">
                    <label for="date-5533" class="u-label">Date</label>
                    <input type="date" placeholder="MM/DD/YYYY" id="date-5533" name="date" value=""
                        class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                </div>
                <div class="u-form-group u-label-top u-form-group-3">
                    <label for="text-7073" class="u-label">About Memories (Optional)</label>
                    <input type="text" value="" placeholder="Tell About This Memory" id="text-7073" name="about_memory"
                        class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                </div>
                <div class="u-form-group u-form-select u-label-top u-form-group-4">
                    <label for="select-38d9" class="u-label">Is Related To PL Memories?</label>
                    <div class="u-form-select-wrapper">
                        <select id="select-38d9" name="select"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                            <option value="Yes" selected>Yes</option>
                            <option value="No">No</option>
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                            <path fill="currentColor" d="M4 8L0 4h8z"></path>
                        </svg>
                    </div>
                </div>
                <div class="u-form-group u-label-top u-form-group-5">
                    <label for="text-c319" class="u-label">Upload Images</label>
                    <input type="file" value='' placeholder="" id="text-c319" name="Upload_Images" accept="Image/* , Video/*"
                        class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                </div>
                <div class="u-align-center u-form-group u-form-submit u-label-top">
                    <input type="submit" name="add_memory" value="submit" class="u-form-control-hidden">
                    <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-palette-1-base u-btn-1">ADD</a>
                </div>
                <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then
                    try again. </div>
                <input type="hidden" value="" name="recaptchaResponse">
            </form>
        </div>
    </div>
</section>
<?php

include('layouts/footer.php');
?>