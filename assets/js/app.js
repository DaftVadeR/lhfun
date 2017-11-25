function getTitleCase(str) {
    var words = str.split(" ");
    var newStr = "";

    for (var wordKey in words) {
        var firstLetter = words[wordKey].charAt(0).toUpperCase();
        var remainder = words[wordKey].slice(1).toLowerCase();

        newStr = newStr.concat((newStr.length > 0 ? " " : ''), firstLetter, remainder);
    }

    return newStr;
}

var ScaleLoader = VueSpinner.ScaleLoader;

var Search = Vue.extend({
    template: '#search-app',

    methods: {
        onHit:function(item){
            console.log('ITEM HIT');
            console.log(item);
        },
        prepareResponseData: function(data) {
            var formattedSearchData = [];

            if (data.hasOwnProperty("items") && items.length > 0) {
                for (var i=0; i<data.length; i++) {
                    formattedSearchData[i] = {
                        name:getTitleCase(data[i].suburb)
                    };
                }
            }

            return formattedSearchData;
        }
    }
});

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
        },
        getItemUrl: function(item) {
            return 'http://leadhome.co.za/property/'+item.id;
        },
        getTitleCase: function(words) {
            return getTitleCase(words);
        }
    }
});