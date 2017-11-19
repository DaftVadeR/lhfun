<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Leadhome - Search Properties</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
    <link rel="stylesheet" href="assets/css/public/app.css">

    <base href="http://localhost/leadhome/" />
</head>
<body>
<header id="main-header">
    <div class="container-fluid">
        <nav>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo" href=".">
                    <img src="assets/img/logo.svg" class="logo-img" width="35" height="29" alt="LeadHome">
                    <span class="logo-text">Leadhome</span>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Search properties <i class="fa fa-search col-primary" aria-hidden="true"></i></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            More <i class="fa fa-caret-down col-primary" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="mgn-right-sm"><a href="#">Contact Us</a></li>
                    <li class="mgn-right-sm">
                        <a href="#" class="btn btn-primary">Book free evaluation</a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-border">Hi Patrick!</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<section id="main-content" class="section-pad">
    <div class="container-fluid">
        <h1>Search Properties</h1>

        <div class="row">
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

        </div>
    </div>
</section>
<footer id="main-footer">
    <nav id="footer-nav" class="section-pad">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <h5>Leadhome</h5>
                    <ul class="link-list">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Meet the team</a></li>
                        <li><a href="#">Our partners</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h5>Discover</h5>
                    <ul class="link-list">
                        <li><a href="#">How it works</a></li>
                        <li><a href="#">What mas us different</a></li>
                        <li><a href="#">Frequently asked questions</a></li>
                        <li><a href="#">Meet the area experts</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h5>Act</h5>
                    <ul class="link-list">
                        <li><a href="#">See how much we can save you</a></li>
                        <li><a href="#">Sell your house with Leadhome</a></li>
                        <li><a href="#">Search properties</a></li>
                        <li><a href="#">Book a viewing</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h5>Contact Us</h5>
                    <ul class="link-list">
                        <li><a href="#">Let us call you back</a></li>
                        <li><a href="#">Launch the chat</a></li>
                        <li><a href="#">+27 123 1234</a></li>
                        <li><a href="#">hello@leadhome.co.za</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div id="footer-bot" class="section-pad">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <a class="logo logo-primary pull-left mgn-right-lg" href=".">
                        <img src="assets/img/logo.svg" class="logo-img" width="35" height="29" alt="LeadHome">
                        <span class="logo-text">Leadhome</span>
                    </a>
                    <p>&copy; 2017 Leadhome - All rights reserved - <a href="#" class="plain-text-link">Terms of use</a></p>
                </div>
                <div class="col-sm-5">
                    <ul class="inline-btn-list">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>

