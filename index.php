<html lang="en">
<head>

    <?php require_once('includes/meta.php'); ?>
    <link rel="icon" href="../../favicon.ico">

    <title>{{ title }}</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Custom styles for the prototype -->
    <link href="styles/dist/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <?php require_once('includes/logo.php') ?>
        <?php require_once('includes/notification-panel.php') ?>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <?php require_once('includes/sidebar.php') ?>
        <?php require_once('includes/main-content.php') ?>
    </div>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>