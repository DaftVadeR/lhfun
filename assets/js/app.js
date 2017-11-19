var PulseLoader = VueSpinner.PulseLoader;
var GridLoader = VueSpinner.GridLoader;
var ClipLoader = VueSpinner.ClipLoader;
var RiseLoader = VueSpinner.RiseLoader;
var BeatLoader = VueSpinner.BeatLoader;
var SyncLoader = VueSpinner.SyncLoader;
var RotateLoader = VueSpinner.RotateLoader;
var FadeLoader = VueSpinner.FadeLoader;
var PacmanLoader = VueSpinner.PacmanLoader;
var SquareLoader = VueSpinner.SquareLoader;
var ScaleLoader = VueSpinner.ScaleLoader;
var SkewLoader = VueSpinner.SkewLoader;
var MoonLoader = VueSpinner.MoonLoader;
var RingLoader = VueSpinner.RingLoader;
var BounceLoader = VueSpinner.BounceLoader;
var DotLoader = VueSpinner.DotLoader;

var vapp = new Vue({
    components: {
        'dot-loader':ScaleLoader
    },
    el: '#search-results',
    data: {
        searchResults:[],
        resultsPage:1,
        vueReady:true
    },
    created: function(){
        this.getNewResults();
    },
    methods: {
        loadNextPage: function(e) {
            e.preventDefault();
            this.searchResults = [];

            this.getNewResults();
        },
        getNewResults: function () {
            var vm = this;
            window.scrollTo(0, 0);

            axios.get('https://lh-silver-api-staging.leadhome.co.za/api/properties?page='+vm.resultsPage)
                .then(function (response) {
                    console.log(response.data.items.length+' items retrieved');
                    if (response.hasOwnProperty("data") &&
                        response.data.hasOwnProperty("items")) {
                        vm.searchResults = response.data.items;

                        console.log(vm.searchResults);

                        vm.resultsPage++;
                    }
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    }
});