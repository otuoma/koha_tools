<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Koha xTra Tools</title>

    <script src="/intranet-tmpl/lib/jquery/jquery-2.2.3.min_20.1104000.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="/intranet-tmpl/lib/datatables/datatables.min_20.1104000.css" type="text/css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/js/jquery-fileupload.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link type="text/css" href="/intranet-tmpl/lib/font-awesome/css/font-awesome.min_20.1104000.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/css/dashboard.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar sticky-top flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Koha xTra Tools</a>

        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="/"> <span class="fa fa-home"></span> Koha</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column" style="margin-top: 42px;">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <span class="fa fa-id-card"></span>
                                Branches <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>/index.php/branches/">
                                <span class="fa fa-file"></span> Add Branches </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>/files/branches_template.csv">
                                <span class="fa fa-download"></span> Download Template
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <?= $this->renderSection('main-content') ?>
            </main>
        </div>
    </div>


    </body>
</html>