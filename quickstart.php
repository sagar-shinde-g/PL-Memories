

<html lang="HTML5">

<head>
    <title>PHP Quick Start</title>
</head>

<body>
    <?php

    require_once __DIR__ . '/vendor/autoload.php';


    use Cloudinary\Configuration\Configuration;
    use Cloudinary\Api\Upload\UploadApi;
    use Cloudinary\Api\Admin\AdminApi;
    use Cloudinary\Tag\ImageTag;
    use Cloudinary\Transformation\Background;
    use Cloudinary\Transformation\Resize;

    echo '<h1>Cloudinary PHP Quick Start</h1>';

    // replace `cloudinary://my_key:my_secret@my_cloud_name` with your environment variable

    Configuration::instance('cloudinary://291218526993796:Rq84kQP-K95r25ti2V4E98pqWgk@sagar612?secure=true');

    // Upload API
    echo '<h2>Upload API Response</h2>';

    // Upload the image
    $upload = new UploadApi();
    echo '<pre>';
    $a= json_encode(
        $upload->upload('th.webp', [
            // 'resource_type' => 'video',
            // 'public_id' => 'flower_sample',
            // 'use_filename' => TRUE,
            // 'overwrite' => TRUE

            'public_id' => 'flower_sample',
            'use_filename' => TRUE,
            'overwrite' => TRUE

        ]),
        JSON_PRETTY_PRINT
    );
    echo '</pre>';

   echo "<pre>";
print_r($b=json_decode($a));

 echo "</pre>";

 echo $b->secure_url;

