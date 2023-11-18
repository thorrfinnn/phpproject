<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audio Player</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Center the audio player */
        .center-audio {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
        }
        
    </style>
</head>
<body>

<?php 
    include("navbar.php");
    include("css.php");
?>

<div class="center-audio">
    <audio controls>
        <source src="test.mp3" type="audio/mpeg">
    </audio>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2Xofn1+YoVoahHHJ1ms9+6Zl5n5J9tMShI21" crossorigin="anonymous"></script>
</body>
</html>

      