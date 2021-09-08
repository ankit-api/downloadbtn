<?php
    $url = "https://pixabay.com/get/g0efa6a5f7f3a943f850816c053a01018e81deca5b69a8bf9299f0bd7947a03a3efb80c29817828d673e9b02d63852f76cd1aa9b4a2dc961ceb0b879ba89659e0_1280.jpg";
    $img = "../downloads/image1.png";
    file_put_contents($img, file_get_contents($url));
    echo "file downloaded";
?>