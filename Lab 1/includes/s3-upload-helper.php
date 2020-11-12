<?php

require '../vendor/autoload.php';

use Aws\S3\S3Client;

use Aws\Exception\AwsException;

if (isset($_POST['s3-submit'])) {
    $bucketName = "cs230labbucket";
    $file = $_FILES['s3-image'];
    $file_name = $file['name'];
    $file_tmp_name = $file['tmp_name'];
    $file_error = $file['error'];
    $file_size = $file['size'];

    $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    try{


        $s3Client = S3Client::factory(
            array('region'=> 'us-east-1', 
            'version'=>'latest', 
            'credentials' => array(
                'key'=> "AKIAW5VZUBZWXXNJUR5C",
                'secret' => ""
            ))
        );
        $result = $s3Client -> putObject([

            'Bucket' => $bucketName,
            'Key' => 'test_uploads/'.uniqueid('',true).'.'.$$ext,
            'SourceFile' => $file_tmp_name,
            'ACL' =>'public_read'
        ]);

        echo 'Success! Photo Url: '. $result->get('ObjectURL');

    }   catch(Aws\S3\Exception\S3Exception $e){
        die('Error uploading file: '.$e->getMessage());
    }
}
