<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <title>Quiz Game | Scores</title>
</head>

<body class="vh-100">

<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">

    <a class="navbar-brand" href="#">Quiz Game</a>

    <!-- Toggler / collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="help.php">Help</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" data-toggle="tab" href="scores.php">Scores</a>
            </li>
        </ul>

    </div>
</nav>


<div class="container-fluid vh-100" style="margin-top:80px">

    <div class="card text-center vh-100 shadow-sm bg-white">
        <div class="card-title d-flex flex-column align-items-center card-body p-5">
            <h1 class="card-text center">The Best Scores</h1>

            <?php require ("../file_functions.php"); ?>
            <?php $array = getScores(); ?>

            <?php if (!empty($array)) { ?>
                <ol>
                    <?php foreach ($array as $key => $value) {
                         if (!empty($key) or !empty($value)) { ?>
                            <li class="text-left"> <?php echo $key . ' - ' . $value ?></li>
                        <?php } ?>
                    <?php } ?>
                </ol>
            <?php } else { ?>
                <h4 class="mt-3">No scores yet.</h4>
            <?php } ?>

        </div>
        <div class="card-footer text-muted"></div>
    </div>
</div>


<?php require('includes/footer.php') ?>

</body>
</html>
