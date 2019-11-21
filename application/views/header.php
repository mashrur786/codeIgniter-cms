<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar10">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar10">
            <ul class="navbar-nav nav-fill w-100">
                <li class="nav-item">
                     <a class="nav-link" href="<?php echo base_url('/index.php/contents'); ?>"> All Content</a>
                </li>
                <li class="nav-item">
                     <a class="nav-link" href="<?php echo base_url('/index.php/contents/add'); ?>"> Add Content</a>
                </li>
                <li class="nav-item">
                     <a class="nav-link" href="<?php echo base_url('/index.php/contents/search'); ?>">Search Content</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

