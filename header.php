<?php
session_start();
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">


</head>
<style>
* {
    text-decoration: none;
    box-sizing: border-box;
}

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);

body {
    background: -webkit-linear-gradient(left, #033729, #ff2c2c);
    background: linear-gradient(to right, #f8fafa, #fff);
    font-family: 'Roboto', sans-serif;
    margin: 0;
    font-size: 15px;
}

header,
main {
    width: 100%;
    display: block;
    margin: 0 auto;
}

.header {
    padding: 5px;
    width: 100%;
    height: 100px;
}

.logo a {
    text-decoration: none;
    font-family: Luminari, fantasy;
    font-size: 45px;
    color: #ce1616;
    font-style: italic;
    text-align: center;
    vertical-align: middle;
    line-height: 100px;
    display: block;
}

#navbar {
    overflow: hidden;
    background-color: #333;
}

#navbar a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

#navbar a:hover {
    background-color: #ddd;
    color: black;
}

.content {
    padding: 16px;
}

.topnav {
    overflow: hidden;
    background-color: #551881;
}

.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

.topnav a:hover {
    background-color: #FFF842;
    color: #403E10;
    font-weight: bold;

    box-shadow: #ff2c2c -1px 1px, #ff2c2c -2px 2px, #ff2c2c -3px 3px, #ff2c2c -4px 4px, #ff2c2c -5px 5px, #ff2c2c -6px 6px;
    transform: translate3d(6px, -6px, 0);

    transition-delay: 0s;
    transition-duration: 0.4s;
    transition-property: all;
    transition-timing-function: line;
}

.topnav .icon {
    display: none;
}

@media screen and (max-width: 600px) {
    .topnav a:not(:first-child) {
        display: none;
    }

    .topnav a.icon {
        float: right;
        display: block;
    }

    .header {
        height: 80px;
    }

    .logo a {
        font-size: 27px;
        line-height: 80px;
    }
}

@media screen and (max-width: 600px) {
    .topnav.responsive {
        position: relative;
    }

    .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
    }

    .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
    }
}

tbody tr:nth-child(even) {
    background-color: #388994;
}

tbody tr:nth-child(odd) {
    background-color: #3f9aa6;
}

tbody tr:hover {
    opacity: 0.8;
}
</style>
<header>
    <div class="header">
        <div class="logo">
            <h1><span class="blue">&lt;</span>Attendance<span class="blue">&gt;</span> <span class="yellow">of student
                    </span>
            </h1>
            <h2>Created with love by Duy Anh và những người bạn</h2>
        </div>
    </div>

    <div class="topnav" id="myTopnav">
        <a href="index.php">Users</a>
        <a href="UsersLog.php">Users Log</a>
        <a href="ManageUsers.php">Manage Users</a>
        <a href="javascript:void(0);" class="icon" onclick="navFunction()">
            <i class="fa fa-bars"></i></a>
    </div>


    <div class="container">
        <div class="menu-icon"><span></span></div>
    </div>


</header>
<script>
function navFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
(function($) {

    $(".menu-icon").on("click", function() {
        $(this).toggleClass("open");
        $(".container").toggleClass("nav-open");
        $("nav ul li").toggleClass("animate");
    });

})(jQuery);
</script>