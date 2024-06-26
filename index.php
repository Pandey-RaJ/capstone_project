<?php
session_start();

// Check if the logout parameter is set
if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the same page after destroying the session
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="frontend/style.css">
    <title>About</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container header">
        <header class="d-flex flex-wrap justify-content-center py-3 border-bottom border-dark">
            <a href="index.php" class="d-flex align-items-center mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img class="innovation-logo" src="innovationImages/smrt_logo_light.png" alt="">
            </a>

            <ul class="nav align-items-center">
                <li class="nav-item fs-5">
                    <?php if (isset($_SESSION['companyName'])): ?>
                        <ul class="nav align-items-center">
                            <a href="./frontend/innovation_hub.php" name="idea_sub" type="submit" class="button-color button-width btn btn-primary fs-5 fw-bold ">
                                Idea Submission
                            </a>
                        </ul>
                    <?php else: ?>
                        <ul class="nav align-items-center">
                            <a href="./frontend/admin_login_home.php" type="submit" class="button-color button-width btn btn-primary fs-5 fw-bold ">
                                Admin Portal
                            </a>
                        </ul>
                    <?php endif; ?>
                </li>
            </ul>

        </header>
    </div>

    <div class="container">
        <div class="px-5 pt-5 my-2 text-center border-bottom border-dark">
            <h1 class="display-4 fw-bold text-body-emphasis">Making changes within</h1>
            <h1 class="display-4 fw-bold text-body-emphasis">
                <?php if (isset($_SESSION['companyName'])): ?>
                    <?php echo $_SESSION['companyName']; ?>
                <?php else: ?>
                    <?php echo " Company" ?>
                <?php endif; ?></h1>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-4">Smrt brings about change to the workplace and allows employees to let their voices be heard through a simple submission form.</p>
            </div>
            <div class="overflow-hidden">
              <div class="container px-5 mb-5">
                <img src="innovationImages/ideas.png" class="img-fluid" alt="Example image" width="700" height="500" loading="lazy">
              </div>
            </div>
          </div>
    </div>

    <div class="container">
        <div class="container col-xxl-8 px-4">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-10 col-sm-8 col-lg-6">
                <img src="innovationImages/innovation-pic.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
              </div>
              <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Innovation</h1>
                <p class="lead">The innovation hub serves as a catalyst for generating new ideas, processes, products, and services. It encourages experimentation and risk-taking while providing resources and support for bringing innovative concepts to fruition. Innovation involves not only coming up with novel ideas but also implementing them effectively to create value for the organization and its stakeholders.</p>
              </div>
            </div>
          </div>

        <div class="container col-xxl-8 px-4 ">
        <div class="row flex-lg-row align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                    <img src="innovationImages/collaboration.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Collaboration</h1>
            <p class="lead">Collaboration is essential for harnessing the collective intelligence and diverse perspectives of a team or community. The innovation hub facilitates collaboration by fostering open communication, building trust among members, and breaking down silos that may hinder the flow of ideas.</p>
            </div>
        </div>
        </div>

        <div class="container col-xxl-8 px-4">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
            <img src="innovationImages/creativity.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Creativity</h1>
            <p class="lead">Creativity is the fuel that drives innovation. The innovation hub cultivates a conducive environment where individuals feel empowered to think outside the box, challenge conventional wisdom, and explore unconventional solutions to complex problems. This might involve brainstorming sessions, design thinking workshops, or other creative exercises aimed at unlocking the full potential of participants' imagination and ingenuity.</p>
            </div>
        </div>
        </div>

          
    </div>

    <div class="container mt-auto">
        <footer class="py-3 my-4 border-top border-dark">
            <p class="text-center text-body-secondary">© 2024 Cameron University Capstone</p>
        </footer>
    </div>
    
</body>
</html>