<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChannelDoc</title>
    <!-- CSS/login.css -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/login.css')?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!--Nav-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ChannelDoc</a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Appointments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                        Use the users name here
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">My Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
            </div> -->
        </div>
    </nav>
    <!--Body-->
    <!--Old design-->
    <section>
        <!-- <h1>Welcome!</h1>
        <p>We are here to provide you with a new experience to connect with any private practitioner in Sri Lanka. <br>Government approved private practitioners
    around the nation are linked together in our platform, enabling you a new experience from the ordinary channeling process.</P>
    <br> -->
        <div class="container position-absolute top-50 start-50 translate-middle">
            <form action="<?php echo site_url('Login/create')?>" method="post">
                <div class="row">
                    <h2 style="text-align:center">Login with Doctor/Patient account</h2> <!--Images/Logo.png-->
                    <div class="col">
                        <input type="text" name="email" placeholder="Email" required class="col-md-12 p-3 mt-2 rounded">
                        <input type="password" name="password" placeholder="Password" required class="col-md-12 p-3 mt-2 rounded">
                        <!-- <input type="submit" name=submit value="Login" class="col-md-6 p-2 mt-2"> -->
                        <div class="text-center p-3">
                            <input type="submit" name=submit class="btn btn-outline-success profile-button btn-lg" value="Login in to ChannelDoc">
                        </div>
                    </div>
                </div>
            </form>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="text-center p-3">
                            <a href="<?php echo base_url('Register/pracIndex')?>" class="btn btn-success profile-button btn-lg">Sign up as a Practitioner</a>
                        </div>
                        <!--  -->
                    </div>
                    <div class="col">
                        <div class="text-center p-3">
                        <a href="<?php echo base_url('Register/patIndex')?>" class="btn btn-success profile-button btn-lg">Sign up as a Patient</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--Base design-->
    <!-- <section>
        <div class="container rounded bg-white mt-1 mb-1 col-md-5">
            <div class="row">
                <div class="col-md-12 border-right">
                    <div class="d-flex flex-column align-items-center p-3 py-5">
                        
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right text-success display-6 p-2" id="header1">Please Enter Login Credentials</h4>
                        </div>

                        <form action="<?php echo site_url('Login/create') ?>" method="post">
                        <div class="row mt-2">
                            <div class="col-md-12 p-3">
                                <label class="labels">Email Address :</label>
                                <imput class="form-control" placeholder="email" type="email" name="email">
                            </div>
                            <div class="col-md-12 p-3">
                                <label class="labels">Password :</label>
                                <imput class="form-control" placeholder="password" type="password" name="password">
                            </div>
                        </div>

                        <div class="text-center p-3">
                            <input type="submit" class="btn btn-outline-success profile-button btn-lg" value="Login in to ChannelDoc">
                        </div>
                    </form>

                    <label class="p-2">Don't have an account</label>
                    <a href="<?php echo base_url('Register/index')?>" class="link-primary">Register Here</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--Footer-->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>