<?php
    require "./generate.php";
    if(!isset($_POST['qrInfo'])){
        ?>
        <style type="text/css">
            .QRPic{
                display:none;
            }
        </style>
        <?php
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP QR Generator</title>
</head>
<body>
    <h1>Example of the QR Generator</h1>
   
    <div class="form">
        <form action="/" method="POST">
            <input type="text" placeholder="Enter QR Info" name="qrInfo" /> <input type="button" value="Submit">
        </form>
</div>
<div class="QRPic">
<img src=<?php if(isset($_POST['qrInfo'])){ echo generateQR(300,300,$_POST['qrInfo']); } else { ?> <?php } ?> >
</div>
</body>
</html>