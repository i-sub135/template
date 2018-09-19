<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>webSite</title>

    <link rel="stylesheet" href="public/css/w3style.css">
    <script src="public/js/jquery-3.3.1.min.js" type="text/javascript" ></script>
    <script src="public/js/page-custom.js" type="text/javascript" ></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="public/easyui/themes/default/easyui.css">
    <link rel="stylesheet" href="public/easyui/themes/color.css">
    <script src="public/easyui/jquery.easyui.min.js"></script>
    <link rel="stylesheet" href="public/css/page-custom.css">
    
    <style>
        .material-icons {vertical-align:-15%}
    </style>
</head>
<body id="custom">
    
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="width:300px; display:none; z-index:99999;" id="leftMenu">
        <div class="w3-card w3-pale-green w3-center">
            <img width="90%" src="public/img/PT.png" alt="foto">
            <h3 id="pt-title">PT. Alim Rugi</h3>
        </div>
        <p>&nbsp;</p>

        <a href="/template" class="w3-bar-item w3-button"> <i class="material-icons">play_for_work</i> Login</a>
        <a href="#" class="w3-bar-item w3-button">Link 2</a>
        <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>

    <div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0; z-index:99999;" id="rightMenu">
        <div class="w3-card w3-pale-blue w3-center w3-padding-24">
            <img width="50%" class="w3-circle" src="public/img/profile_logo.jpg" alt="foto">
            <br>
            Nama <br>
            alamat
        </div>
        <p>&nbsp;</p>
        <a href="#" class="w3-bar-item w3-button">Link 1</a>
        <a href="#" class="w3-bar-item w3-button">Link 2</a>
        <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>

    <div class="w3-top">
        <div class="w3-bar w3-deep-purple w3-large w3-padding-small">
            <a href="#" class="w3-bar-item" onclick="openLeftMenu()"><i class="material-icons">menu</i></a>

            <a href="#" class="w3-bar-item w3-button">Link 1</a>
            <a href="#" class="w3-bar-item w3-button">Link 2</a>

            <a href="#" class="w3-bar-item w3-right"  onclick="openRightMenu()"><i class="material-icons">more_vert</i></a>
        </div>
    </div>


    <!-- Page Content -->
    <div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

    <div id="bg1"></div>
    <div id="bg2"></div>
    <div id="bg3"></div>
    <div id="bg4"></div>

    <div class="w3-container">
    <p>&nbsp;</p>
    <br>
        <div class="w3-card w3-padding">
            <?php 
		include 'home.php'
		 ?>
            <br>
        </div>
    </div>
    <p>&nbsp;</p>

    <div class="w3-bottom">
        <div class="w3-bar w3-light-gray">
            <a href="#" class="w3-bar-item w3-button">Home</a>
            <a href="#" class="w3-bar-item w3-button">Link 1</a>
            <a href="#" class="w3-bar-item w3-button">Link 2</a>
            <a href="#" class="w3-bar-item w3-button">Link 3</a>
        </div>
    </div>
</body>
</html>
