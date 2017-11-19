var ScaleLoader = VueSpinner.ScaleLoader;

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