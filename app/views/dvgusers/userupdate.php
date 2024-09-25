<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
        body {
                background-color: #f8f9fa;
            }
            .col-sm-6 {
                background-color: #f0f0f0;
                padding: 50px;
                border-radius: 15px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.50);
            }
            .form-label {
                font-family: 'Courier New', Courier, monospace;
                font-weight: bold;
            }
            .custom-header {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .custom-header h1 {
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
            margin: 0;}

        
    </style>
</head>

<body>
    <header>
        <!-- Navbar -->
        
    </header>

    <main>
        <div class="container">
            <div class="row mt-3">
                <div class="col-sm-6 mx-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?=site_url('user/add');?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update User's Info</li>
                        </ol>
                    </nav>
                    <h2>Update User's Info</h2>
                    <?php flash_alert()?>
                    <form action="<?=site_url('user/update/'.segment(3));?>" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" placeholder="Enter your Last Name" name="lname" value="<?php echo $dvg_user['dvg_last_name']; ?>" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" placeholder="Enter your First Name" name="fname" value="<?php echo $dvg_user['dvg_first_name']; ?>" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" placeholder="Enter your Email" name="email" value="<?php echo $dvg_user['dvg_email']; ?>" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <input type="text" class="form-control" placeholder="Enter your Gender" name="gender" value="<?php echo $dvg_user['dvg_gender']; ?>" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" placeholder="Enter your Address" name="address" value="<?php echo $dvg_user['dvg_address']; ?>" autocomplete="off">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        <a href="<?=site_url('user/display');?>" class="btn btn-primary" role="button">User List</a>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <!-- place footer here -->
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
