<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Leadhome - Search Properties</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/public/app.css">

    <base href="http://localhost/leadhome/" />
</head>
<body>
<?php include('inc/header.php');?>
<section id="main-content" class="section-pad">
    <div class="container-fluid">
        <h1>Search Properties</h1>

        <div class="row hidden">
            <div class="col-sm-8">
                <form class="form-inline">
                    <div class="form-group">
                        <label class="sr-only" for="search-term">Property Search</label>
                        <div class="input-group">
                            <select name="search-type">
                                <option value="sale">For Sale</option>
                                <option value="rent">For Rent</option>
                            </select>
                            <input type="text" class="form-control" id="search-term" placeholder="Add suburb or reference number...">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Transfer cash</button>
                </form>
            </div>
            <div class="col-sm-4">
                <div class="map-search-btn input-field ">
                <span class="btn-left text-white">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    Map Search
                </span>
                <span class="btn-right text-dark">
                    Discover new areas
                </span>
                </div>
            </div>
        </div>

        <div id="search-options">
        </div>

        <div id="search-results" class="item-grid">
            <div class="row">
                <?php include('inc/block.php');?>
                <?php include('inc/block.php');?>
                <?php include('inc/block.php');?>
                <?php include('inc/block.php');?>
                <?php include('inc/block.php');?>
                <?php include('inc/block.php');?>
                <?php include('inc/block.php');?>
                <?php include('inc/block.php');?>
                <?php include('inc/block.php');?>
            </div>
            <a href="#" class="btn btn-primary btn-block">
                More properties
            </a>
        </div>
    </div>
</section>
<?php include('inc/footer.php');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>

