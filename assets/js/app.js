var ScaleLoader = VueSpinner.ScaleLoader;

var vapp = new Vue({
    components: {
        'dot-loader':ScaleLoader
    },
    el: '#search-results',
    data: {
        searchResults:[],
        resultsPage:1,
        vueReady:true,
        searchApiUrl:'https://lh-silver-api-staging.leadhome.co.za/api/suburbs',
        propertiesApiUrl:'https://lh-silver-api-staging.leadhome.co.za/api/properties'
    },
    created: function(){
        this.getNewResults();
    },
    methods: {
        getPropertiesNextPageUrl: function () {
            var vm = this;
            return vm.propertiesApiUrl + '/?page=' + vm.resultsPage;
        },
        getSearchUrl: function (searchTerm) {
            var vm = this;
            return vm.searchApiUrl + '/?query=' + searchTerm;
        },
        getTitleCase: function(str) {
            var words = str.split(" ");
            var newStr = "";

            for (var wordKey in words) {
                var firstLetter = words[wordKey].charAt(0).toUpperCase();
                var remainder = words[wordKey].slice(1).toLowerCase();

                newStr = newStr.concat((newStr.length > 0 ? " " : ''), firstLetter, remainder);
            }

            return newStr;
        },
        loadNextPage: function(e) {
            e.preventDefault();
            this.searchResults = [];

            this.getNewResults();
        },
        getNewResults: function () {
            var vm = this;
            window.scrollTo(0, 0);

            axios.get(this.getPropertiesNextPageUrl())
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