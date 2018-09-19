<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>

    <link rel="stylesheet" href="public/css/w3style.css">
    <script src="public/js/jquery-3.3.1.min.js" type="text/javascript" ></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="public/easyui/themes/default/easyui.css">
    <link rel="stylesheet" href="public/easyui/themes/color.css">
    <script src="public/easyui/jquery.easyui.min.js"></script>
    <link rel="stylesheet" href="public/css/page-custom.css">
    
    <style>
        .material-icons {vertical-align:-30%}
    </style>
</head>
<body id="custom">
    
    <div class="w3-top" id="top-nav">
        <div class="w3-bar w3-large w3-padding-small">
            <a href="#" class="w3-bar-item""><i class="material-icons">menu</i></a>

            <a href="#" class="w3-bar-item w3-button">Link 1</a>
            <a href="#" class="w3-bar-item w3-button">Link 2</a>

            <a href="#" class="w3-bar-item w3-right"><i class="material-icons">more_vert</i></a>
        </div>
    </div>


    <!-- Page Content -->
    <div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

    <div id="bg1"></div>
    <div id="bg2"></div>
    <div id="bg3"></div>
    <div id="bg4"></div>

    <div class="w3-container w3-center">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <form action="temp.php" style="max-width:400px;margin:auto; padding:50px; background-color:#e0e0e0;" class="w3-card w3-round">
            <h2 class="w3-text-indigo">FORM LOGIN</h2>
                <br>
            <div class="input-container">
                <i class="material-icons icon">account_circle</i>
                <input class="input-field" type="text" placeholder="Username" name="usrnm">
            </div>
            <div class="input-container">
                <i class="material-icons icon">vpn_key</i>
                <input class="input-field" type="password" placeholder="Password" name="psw">
            </div>
                <p>&nbsp;</p>
            <button class="btn w3-hover-light-green"><i class="material-icons">fingerprint</i> &nbsp; LOGIN</button>
        </form>

    </div>

    <div class="w3-bottom" id="bottom-nav">
        <div class="w3-bar">
            <a href="#" class="w3-bar-item w3-button">Home</a>
            <a href="#" class="w3-bar-item w3-button">Link 1</a>
            <a href="#" class="w3-bar-item w3-button">Link 2</a>
            <a href="#" class="w3-bar-item w3-button">Link 3</a>
        </div>
    </div>
</body>
</html>
