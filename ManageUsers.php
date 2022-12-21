<!DOCTYPE html>
<html>

<head>
    <title>Manage Users</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/769/769215.png">
    <link rel="stylesheet" type="text/css" href="css/manageusers.css">

    <script>
    $(window).on("load resize ", function() {
        var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
        $('.tbl-header').css({
            'padding-right': scrollWidth
        });
    }).resize();
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha1256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/manage_users.js"></script>
    <script>
    $(document).ready(function() {
        $.ajax({
            url: "manage_users_up.php"
        }).done(function(data) {
            $('#manage_users').html(data);
        });
        setInterval(function() {
            $.ajax({
                url: "manage_users_up.php"
            }).done(function(data) {
                $('#manage_users').html(data);
            });
        }, 5000);
    });
    </script>
</head>

<body>
    <?php include'header.php';?>
    <main>
        <!-- <h1 class="slideInDown animated">Add a new User or update his information <br> or remove him</h1> -->
        <div class="form-style-5 slideInDown animated">
            <div class="alert">
                <label id="alert"></label>
            </div>
            <form>
                <fieldset>
                    <legend><span class="number">1</span> User Fingerprint ID:</legend>
                    <label>Enter Fingerprint ID between 1 & 127:</label>
                    <input type="number" name="fingerid" id="fingerid" placeholder="User Fingerprint ID...">
                    <button type="button" name="fingerid_add" class="fingerid_add">Add Fingerprint ID</button>
                </fieldset>
                <fieldset>
                    <legend><span class="number">2</span> User Info</legend>
                    <input type="text" name="name" id="name" placeholder="User Name...">
                    <input type="text" name="number" id="number" placeholder="Serial Number...">
                    <input type="email" name="email" id="email" placeholder="User Email...">
                </fieldset>
                <fieldset>
                    <legend><span class="number">3</span> Additional Info</legend>
                    <label>
                        Time In:
                        <input type="time" name="timein" id="timein">
                        <input type="radio" name="gender" class="gender" value="Female">Female
                        <input type="radio" name="gender" class="gender" value="Male" checked="checked">Male
                    </label>
                </fieldset>
                <button type="button" name="user_add" class="user_add">Add User</button>
                <button type="button" name="user_upd" class="user_upd">Update User</button>
                <button type="button" name="user_rmo" class="user_rmo">Remove User</button>
            </form>
        </div>

        <div class="section">
            <!--User table-->
            <div class="tbl-header slideInRight animated">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>Finger .ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>S.No</th>
                            <th>Date</th>
                            <th>Time in</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content slideInRight animated">
                <table cellpadding="0" cellspacing="0" border="0">
                    <div id="manage_users"></div>
            </div>
        </div>

    </main>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

header,
tbody button {
    background-color: transparent;
    border: none;
    display: block;
    margin: auto;
    border-bottom: 2px solid #fff;  
    color: #fff;
}
main {
    font-family: 'Open Sans', sans-serif;
    font-weight: 300;
    line-height: 1.42em;
    color: #A7A1AE;
    background-color: #1F2739;
}

* {
    text-decoration: auto;
    box-sizing: border-box;
    background: 1F2739;
    background-color: #1F2739;
}

body {
    background: linear-gradient(to right, #1f2739, #1f2739);
}

.topnav {
    overflow: hidden;
    background-color: #1f2739;
}

/* h1 {
    font-size: 3em;
    font-weight: 300;
    line-height: 1em;
    text-align: center;
    color: #4DC3FA;
} */

h2 {
    font-size: 1em;
    font-weight: 300;
    text-align: center;
    display: block;
    line-height: 1em;
    padding-bottom: 2em;
    color: #FB667A;
}

h2 a {
    font-weight: 700;
    text-transform: uppercase;
    color: #FB667A;
    text-decoration: none;
}

.blue {
    color: #185875;
}

.yellow {
    color: #FFF842;
}

.container th h1 {
    font-weight: bold;
    font-size: 1em;
    text-align: left;
    color: #185875;
}

.container td {
    font-weight: normal;
    font-size: 1em;
    -webkit-box-shadow: 0 2px 2px -2px #0E1119;
    -moz-box-shadow: 0 2px 2px -2px #0E1119;
    box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
    text-align: left;
    overflow: hidden;
    width: 80%;
    margin: 0 auto;
    display: table;
    padding: 0 0 8em 0;
}

.container td,
.container th {
    padding-bottom: 2%;
    padding-top: 2%;
    padding-left: 2%;

}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
    background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
    background-color: #2C3446;
}

.container th {
    background-color: #1F2739;
    table-layout: fixed;
}


.container td:first-child {
    color: #FB667A;
}

.container tr:hover {
    background-color: #464A52;
    -webkit-box-shadow: 0 6px 6px -6px #0E1119;
    -moz-box-shadow: 0 6px 6px -6px #0E1119;
    box-shadow: 0 6px 6px -6px #0E1119;
}

.container th:hover {

    background-color: #FFF842;
    color: #403E10;
    font-weight: bold;

    box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
    transform: translate3d(6px, -6px, 0);

    transition-delay: 0s;
    transition-duration: 0.4s;
    transition-property: all;
    transition-timing-function: line;
}

@media (max-width: 800px) {

    .container td:nth-child(4),
    .container th:nth-child(4) {
        display: none;
    }
}

table {
    width: 100%;
    table-layout: fixed;
}

h1 {
    font-size: 30px;
    color: #3fff3f;
    text-transform: uppercase;
    font-weight: 300;
    font-family: New Century Schoolbook, TeX Gyre Schola, serif;
    text-align: center;
    margin-bottom: 15px;
}

table {
    width: 100%;
    table-layout: fixed;
}

.tbl-header {
    background-color: rgba(255, 255, 255, 0.3);
}

.tbl-content {
    height: 400px;
    overflow-x: auto;
    margin-top: 0px;
    border: 1px solid rgba(255, 255, 255, 0.3);
}

th {
    padding: 20px 15px;
    text-align: center;
    font-weight: 500;
    font-size: 17px;
    color: #fff;
    text-transform: uppercase;
}

td {

    padding: 15px;
    text-align: center;
    vertical-align: middle;
    font-weight: 300;
    font-size: 14px;
    color: #fff;
    border-bottom: solid 2px rgba(255, 255, 255, 0.1);
}

section {
    margin: 50px;
}

::-webkit-scrollbar {
    width: 6px;
}

::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

section {
    overflow-x: hidden;
}

.slideInRight {
    animation-name: slideInRight;
}

.slideInDown {
    animation-name: slideInDown;
}

.animated {
    animation-duration: 1s;
    animation-fill-mode: both;
}

@keyframes slideInRight {
    from {
        transform: translate3d(100%, 0, 0);
        visibility: visible;
    }

    to {
        transform: translate3d(0, 0, 0);
    }
}

@keyframes slideInDown {
    from {
        transform: translate3d(0, 100%, 0);
        visibility: visible;
    }

    to {
        transform: translate3d(0, 0, 0);
    }
}

@media screen and (max-width: 900px) {
    section {
        margin: 10px;
    }

    th {
        padding: 8px 2px;
        font-size: 11px;
    }

    td {
        padding: 8px;
        font-size: 10px;
    }

    h1 {
        font-size: 18px;
    }
}
    </style>
</body>

</html>