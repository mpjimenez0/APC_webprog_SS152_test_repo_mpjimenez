<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Welcome to my first CodeIgniter application.</title>
<style type="text/css">
    body {background-color: #fff;margin: 40px;font: 13px/20px normal Helvetica, Arial, sans-serif;color: #4F5155;}
    h1 {color: #fff;background-color: #FB4314;border-bottom: 1px solid #D0D0D0;font-size: 19px;font-weight: normal;margin: 0 0 14px 0;padding: 14px 15px 10px 15px;}
    #container{margin: 10px;border: 1px solid #D0D0D0;-webkit-box-shadow: 0 0 8px #D0D0D0;}
    .gallery{ width:100%; float:left; }
    .gallery ul{ margin:0; padding:0; list-style-type:none;}
    .gallery ul li{ padding:7px; border:2px solid #ccc; float:left; margin:10px 7px; background:none; width:auto; height:auto;}
</style>
</head>
<body>
<div id="container">
    <h1>Welcome to First CodeIgniter Application.</h1>
    <div id="body">
        <div class="gallery">
            <ul>
            <?php if(!empty($images)): foreach($images as $img): ?>
               <li><img src="uploads/<?php echo $img['image']; ?>" alt=""></li>
            <?php endforeach; endif; ?>
            </ul>
        </div>
    </div>
</div>
</body>
</html>