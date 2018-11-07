<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles/main.css" media="screen">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <title>Quiz Game</title>
</head>

<body style="height:100vh">

<?php session_start() ?>
<?php
if (isset($_GET['start'])) {
    $_SESSION['questions'] += 1;
} else {
    $_SESSION['questions'] = 0;
    $_SESSION['score'] = 0;
}
?>

<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">

    <a class="navbar-brand" href="#">Quiz Game</a>

    <!-- Toggler / collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">

        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" data-toggle="tab" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/help.php">Help</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/scores.php">Scores</a>
            </li>
        </ul>

    </div>
</nav>

<div class="container-fluid vh-100" style="margin-top:80px">

    <div class="card text-center vh-100 shadow-sm bg-white">
        <div class="card-title d-flex flex-column align-items-center card-body p-5">
            <h1 class="card-text center">Quiz Game</h1>
            <form>
                <?php if ($_SESSION['questions'] == 0) { ?>
                    <h3 class="center">Welcome to Quiz Game! Click on the button below to start!</h3>
                    <button name="start" class="btn btn-primary justify-content-center d-block"
                            style="padding: 5px 20px 5px 20px">Play
                    </button>
                <?php } ?>
            </form>

            <!-- TODO: -->
            <?php $row = 1 ?>
            <?php $rounds = $_SESSION["questions"] ?>

            <!-- show only when user click on "PLAY" -->
            <?php if ($rounds >= 1 && $rounds <= 5) { ?>
                <form id="question_form" action="" method="post">
                    <h3>
                        <?php
                        //TODO
                        ?>
                    </h3>

                    <!-- First -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radios" id="radio1" value="1" checked>
                        <label class="form-check-label" for="radio1">
                            <?php ?>
                        </label>
                    </div>

                    <!-- Second -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radios" id="radio2" value="2">
                        <label class="form-check-label" for="radio2">
                            <?php ?>
                        </label>
                    </div>

                    <!-- Third -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radios" id="radio3" value="3">
                        <label class="form-check-label" for="radio3">
                            <?php ?>
                        </label>
                    </div>

                    <!-- Fourth -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radios" id="radio4" value="4">
                        <label class="form-check-label" for="radio4">
                            <?php ?>
                        </label>
                    </div>

                    <button class="btn btn-primary mt-3" value="1">
                        <?php $buttonName = ($rounds <= 4) ? "Next" : "Finish" ?>
                        <?php echo $buttonName ?>
                    </button>

                </form>
            <?php } ?>

            <?php if ($rounds > 5) { ?>
                <div class="justify-content-center">
                    <h2>Result</h2>
                    <h3>Score: <?php ?></h3>
                </div>
            <?php } ?>

        </div>
        <div class="card-footer text-muted">
        </div>
    </div>

</div>


<?php require('pages/includes/footer.php') ?>


</body>
</html>


