<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>

    <!-- bootstrap 5 CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- bootstrap 5 Js bundle CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Novel Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                        <li class="nav-item">
                            <?php if (isset($_SESSION['user_id'])) { ?>
                                <a class="nav-link" href="admin.php">Admin</a>
                            <?php } else { ?>
                                <a class="nav-link" href="login.php">Login</a>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        </div>
        <div class="container mt-5 about-section">
    <div class="text-center">
        <h1 class="fw-bold">About Novel Store</h1>
        <p class="text-muted">Your go-to platform for discovering, reading, and downloading novels.</p>
    </div>

    <!-- Our Mission & What We Offer -->
    <div class="row mt-4 g-4 equal-height-row">
        <div class="col-md-6 d-flex">
            <div class="card shadow-sm p-4 flex-fill">
                <h2><i class="bi bi-lightbulb-fill text-primary"></i> Our Mission</h2>
                <p>At Novel Store, we aim to provide book lovers with easy access to a vast collection of novels, allowing them to explore different genres, discover new authors, and enjoy stories both online and offline.</p>
            </div>
        </div>

        <div class="col-md-6 d-flex">
            <div class="card shadow-sm p-4 flex-fill">
                <h2><i class="bi bi-book text-success"></i> What We Offer</h2>
                <ul class="list-unstyled">
                    <li>📚 Thousands of novels across various genres.</li>
                    <li>🖥️ Online reading in an easy-to-use reader.</li>
                    <li>📥 Offline downloads for anytime access.</li>
                    <li>✍️ Support for independent authors.</li>
                    <li>🎯 Personalized book recommendations.</li>
                </ul>
            </div>
        </div>
    </div>
</div>


        </body>
