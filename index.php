<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Leadhome - Search Properties</title>
    <link  rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"/>
    <link  rel="icon" href="assets/img/favicon.ico" type="image/x-icon"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700,900" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/public/app.css">

    <base href="http://localhost/leadhome/" />
</head>
<body>
<?php include('inc/header.php');?>
<section id="main-content" class="section-pad">
    <div class="container-fluid">
        <h1>Search Properties</h1>
        <div id="search-app" v-cloak>
            <div class="row mb-md-2">
                <div class="col-xl-8 col-lg-7">
                    <form id="search-form">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <select name="search-type" id="search-type" class="form-control" :class="searchString.length == 0 ? '' : 'has-suggestions'">
                                    <option value="sale">For Sale</option>
                                    <option value="rent">For Rent</option>
                                </select>
                            </span>
                            <div class="input-group" id="search-terms-cont">
                                <input id="search-terms"
                                       v-on:keyup="checkSearchTerms"
                                       v-model="searchString"
                                       v-on:focus="setSearchActive(true)"
                                       v-on:blur="setSearchActive(false)"
                                       type="text"
                                       name="search-terms"
                                       class="form-control"
                                       :class="searchString.length == 0 ? '' : 'has-suggestions'"
                                       placeholder="Add suburb or reference number...">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                        <ul id="search-suggestions"
                            v-if="searchActive && searchTermResults.length > 0"
                            >
                            <li v-for="item in searchTermResults" v-on:click="selectSearchSuggestion">{{ item }}</li>
                        </ul>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-5 d-none d-lg-block">
                    <a class="map-search-btn align" href="#">
                        <span class="btn-left red-grad">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Map Search
                        </span>
                        <span class="btn-right">
                            Discover new areas
                        </span>
                    </a>
                </div>
            </div>

            <div id="search-options">
            </div>

            <div id="properties" class="item-grid">
                <dot-loader :loading="!vueReady || searchResults.length == 0" :color="'#FF6A70'" :size="50"></dot-loader>
                <div>
                <transition name="fade">
                    <div class="results-inner" v-if="vueReady && searchResults.length > 0">
                        <div class="row">
                            <div class="col-sm-6 col-md-4" v-for="item in searchResults">
                                <a class="item-block" v-bind:href="getItemUrl(item)">
                                    <img v-bind:src="item.images.length > 0
                                     ? item.images[0].small : 'assets/img/properties/default.jpg'" alt="Home 1" class="block-img" />

                                    <div class="block-caption">
                                        <span class="price">
                                            R{{item.price}}
                                        </span>
                                        <span class="location">
                                            <i class="fa fa-map-marker clr-prim" aria-hidden="true"></i>
                                            {{getTitleCase(item.suburb)}}
                                        </span>
                                        <ul class="features">
                                            <li>
                                                <span class="sr-only">Bedrooms</span>
                                                <i class="fa fa-bed clr-indigo" aria-hidden="true"></i>
                                                <span class="count">{{ item.beds }}</span>
                                            </li>
                                            <li>
                                                <span class="sr-only">Bathrooms</span>
                                                <span class="fa fa-bathtub clr-indigo"></span>
                                                <span class="count">{{ item.baths }}</span>
                                            </li>
                                            <li>
                                                <span class="sr-only">Parking spaces</span>
                                                <span class="fa fa-car clr-indigo"></span>
                                                <span class="count">{{ item.parking }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="overlay"><span class="btn btn-primary">View property &raquo;</span></div>
                                </a>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary btn-block" v-on:click="loadNextPage" v-show="resultsPage > 1">
                            More properties
                        </a>
                    </div>
                </transition>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('inc/footer.php');?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<script src="https://unpkg.com/vue"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="assets/js/vue-spinner.min.js"></script>

<script src="assets/js/helper.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>

