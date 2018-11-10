<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/main.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <title>Quiz Game | Help</title>
</head>

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
            <li class="nav-item active">
                <a class="nav-link" data-toggle="tab" href="help.php">Help</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="scores.php">Scores</a>
            </li>
        </ul>

    </div>
</nav>

<div class="container-fluid vh-100" style="margin-top:80px">

    <div class="card text-center vh-100 shadow-sm bg-white">
        <div class="card-title d-flex flex-column align-items-center card-body p-5">
            <h2>Hello, welcome to Quiz game!</h2>
            <p>Please find a game instructions below</p>
            <ul class="text-left mt-5">
                <li>To start a game, click on "Play" button at <a href="../index.php">Home Page</a></li>
                <li>In the Quiz Game there are three main categories of difficulty. If you answer correctly, you will see
                a question from more difficult group of questions, if not, you will see set of easier questions.</li>
                <li>Every single game has five questions. Only one question is shown at the same time.</li>
                <li>If there is only one question, click on "Finish" button to see a result</li>
                <li>You will see a list of questions you answered correctly or not</li>
                <li>Depends on your answers, you will see a number of points you got. If you would like to save the questions,
                click on "Save" button. You will see a modal window where you should fill your name and click "Save".</li>
                <li>The best scores you can see at <a href="scores.php">Scores page</a></li>
            </ul>

        </div>
        <div class="card-footer text-muted">
        </div>
    </div>

</div>

<?php require('./includes/footer.php') ?>

</body>

</html>

