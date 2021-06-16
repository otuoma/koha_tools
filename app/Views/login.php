<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Koha xTra Tools</title>

    <script src="/intranet-tmpl/lib/jquery/jquery-2.2.3.min_20.1104000.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link type="text/css" href="/intranet-tmpl/lib/font-awesome/css/font-awesome.min_20.1104000.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/css/login.css" rel="stylesheet">
</head>
<body class="text-center">

<main class="form-signin">
    <form action="<?php echo base_url(); ?>/index.php/home/login" method="post" class="text-left">
        <?php echo csrf_field(); ?>
        <div class="text-center">
            <img class="mb-4" src="https://staff.mydigitalibrary.app/intranet-tmpl/prog/img/logo_UDL.gif" alt="" height="155">
        </div>

        <div class="alert alert-warning">
            <?php echo session()->get('login_status'); ?>
        </div>

        <div class="form-floating mb-3">
            <label for="floatingInput">Username</label>
            <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="userid">
        </div>
        <div class="form-floating">
            <label for="floatingPassword">Password</label>
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2017–2021</p>
    </form>
</main>
</body>
</html>