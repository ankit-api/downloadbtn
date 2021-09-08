
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Downloading image</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="submit" class="btn" name="btn" value="Download Image">
    </form>
</body>
<script>
    $(document).ready(function(){
    $(".btn").on("click", ()=>{
        // window.alert("hello");

    })
})
</script>

<?php
    //   https://cdn.pixabay.com/photo/2015/10/09/00/55/lotus-978659_960_720.jpg
    if(isset($_POST["btn"])){
        $imgurl = "https://cdn.pixabay.com/photo/2015/10/09/00/55/lotus-978659_960_720.jpg";
        $initCURL = curl_init($imgurl);
        curl_setopt($initCURL, CURLOPT_RETURNTRANSFER, true);
        $downloadingImgLink = curl_exec($initCURL);
        curl_close($initCURL);
        header('Cache-Control: public');
        header('Content-Description: File Transfer');
        header('Content-type: image/jpg');
        header('Content-Transfer-Encoding: binary');
        header('Content-Disposition: attachment; filename="image.jpg"');
        // echo $downloadingImgLink;
        readfile($imgurl);
    }
?>

</html>
