<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>

    <!-- bootstrap 5 CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Novel Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
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

        <div class="container mt-5">
            <h2 class="text-center mb-4">Meet Our Team</h2>
            <div class="row">
                <?php 
                $team = [
                    ['name' => 'Prijon Chand', 'email' => 'chandprijon7@gmail.com', 'intro' => 'Passionate about literature and storytelling.', 'image' => 'uploads\Contact\Prijon.jpg'],
                    ['name' => 'Kushal Rokka', 'email' => 'kushalrokka@gmail.com', 'intro' => 'Loves exploring new book genres.', 'image' => 'uploads\Contact\Kushal.jpg'],
                    ['name' => 'Krishna Chaulagain', 'email' => 'krishnachaulagain@gmail.com', 'intro' => 'Dedicated to curating the best book collection.', 'image' => 'uploads\Contact\Krishna.jpg'],
                    ['name' => 'Ankit Bista', 'email' => 'ankitbista@gmail.com', 'intro' => 'Believes books are the windows to the world.', 'image' => 'uploads\Contact\Ankit.jpg'],
                    ['name' => 'Ranjit Shah', 'email' => 'ranjitshah@gmail.com', 'intro' => 'Avid reader and bookstore manager.', 'image' => 'uploads\Contact\Ranjit.jpg'],
                    ['name' => 'Prashant Goit', 'email' => 'prashantgoit@gmail.com', 'intro' => 'Loves helping customers find their next read.', 'image' => 'uploads\Contact\Prashant.jpg'],
                    ['name' => 'Suraj Khadka', 'email' => 'surajkhadka@gmail.com', 'intro' => 'Enjoys discussing classic literature.', 'image' => 'uploads\Contact\Suraj.jpg'],
                    ['name' => 'Hemanta Singh Khati', 'email' => 'hemantasinghkhati@gmail.com', 'intro' => 'Passionate about independent authors.', 'image' => 'uploads\Contact\Hemanta.jpg'],
                ];
                foreach ($team as $member) { ?>
                    <div class="col-md-3 text-center mb-4">
                        <div class="card">
                            <img src="<?php echo $member['image']; ?>" class="card-img-top" alt="<?php echo $member['name']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $member['name']; ?></h5>
                                <p class="card-text"><?php echo $member['intro']; ?></p>
                                <a href="mailto:<?php echo $member['email']; ?>" class="btn btn-primary">Contact</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>
