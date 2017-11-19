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
        <div id="search-app">
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
                <dot-loader :loading="!vueReady || searchResults.length == 0" :color="'#FF6A70'" :size="50"></dot-loader>
                <div>
                <transition name="fade">
                    <div class="results-inner" v-if="vueReady && searchResults.length > 0">
                        <div class="row">
                            <div class="col-sm-6 col-md-4" v-for="item in searchResults">
                                <div class="item-block">

                                    <img v-bind:src="item.images.length > 0 ? item.images[0].small : 'assets/img/properties/1.png'" alt="Home 1" class="block-img" />

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
                                </div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/vue"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="assets/js/vue-spinner.min.js"></script>

<script src="assets/js/app.js"></script>
</body>
</html>

