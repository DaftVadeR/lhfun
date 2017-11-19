<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Leadhome - Search Properties</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/font-awesome/font-awesome.min.css">

    <base href="http://localhost/leadhome" />
</head>
<body>
<div class="container-fluid">
    <header id="main-header">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <div class="logo">
                            <img src="/assets/images/logo.89cf16dfc4c9a7aaa2e15c574b9458f8.svg" class="s17v8zd0-1 kXuKHa s1lczsw5-0 bCKOwV" width="35" height="29">
                            <span class="logo-text">Leadhome</span>
                        </div>
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="main-content">
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
    </section>
</div>
<footer id="main-footer">
    <div class="container">
        <nav id="footer-nav">
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
        </nav>
        <div id="footer-bot">
            <div class="row">
                <div class="col-sm-7">
                    <a class="navbar-brand" href="#">
                        <div class="logo">
                            <img src="/assets/images/logo.89cf16dfc4c9a7aaa2e15c574b9458f8.svg" class="s17v8zd0-1 kXuKHa s1lczsw5-0 bCKOwV" width="35" height="29">
                            <span class="logo-text">Leadhome</span>
                        </div>
                    </a>
                    <p>&copy; 2017 Leadhome - All rights reserved - <a href="#" class="plain-text-link">Terms of use</a></p>
                </div>
                <div class="col-sm-5">
                    <ul class="inline-btn-list">
                        <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                        <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                        <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                        <li><i class="fa fa-linkedin" aria-hidden="true"></i></li>
                    </ul>
                </div>
            </div>
            <img src="assets/img/logo.png" width="128" height="28" />
        </div>
    </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>

