var ScaleLoader = VueSpinner.ScaleLoader;

var properties = new Vue({
    components: {
        'dot-loader':ScaleLoader
    },
    el: '#search-app',
    data: function(){
        return {
            // Search bar - was going to extract to a Vue component but it took too much time, had debugging issues
            searchApiUrl:'https://lh-silver-api-staging.leadhome.co.za/api/suburbs',
            searchString:'',
            previousSearchString:'',
            searchTimeoutId:null,
            searchTermResults:[],
            searchActive:false,
            searchSuggestionsActive:false,

            // Properties
            searchResults:[],
            resultsPage:1,
            vueReady:true,
            propertiesApiUrl:'https://lh-silver-api-staging.leadhome.co.za/api/properties',
        };
    },
    created: function(){
        this.getNewResults();
    },
    methods: {
        // Properties specific
        loadNextPage: function(e) {
            e.preventDefault();
            this.searchResults = [];

            this.getNewResults();
        },
        getNewResults: function () {
            var vm = this;
            window.scrollTo(0, 0);

            axios.get(vm.getPropertiesNextPageUrl())
                .then(function (response) {
                    vm.handlePropertiesResponse(response, vm);
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        getPropertiesNextPageUrl: function () {
            var vm = this;
            return vm.propertiesApiUrl + '/?page=' + vm.resultsPage;
        },
        handlePropertiesResponse: function (response, vm) {
            if (response.hasOwnProperty("data") &&
                response.data.hasOwnProperty("items")) {
                vm.searchResults = response.data.items;

                vm.resultsPage++;
            }
        },
        getItemUrl: function(item) {
            return 'http://leadhome.co.za/property/'+item.id;
        },
        getTitleCase: function(words) {
            return getTitleCase(words);
        },

        // Search specific
        resetTimeoutIfNecessary: function (vm) {
            if (vm.searchTimeoutId != null) {
                clearTimeout(vm.searchTimeoutId);
                vm.searchTimeoutId = null;
            }
        },
        getSuburbSearchSuggestionsRequest: function (searchString, vm) {
            axios.get(vm.getSearchUrl(searchString))
                .then(function (response) {
                    if (response.hasOwnProperty("data") &&
                        response.data.hasOwnProperty("items")) {
                        var newResults = [];

                        for(var i=0; i<response.data.items.length; i++)
                        {
                            newResults[i] = getTitleCase(response.data.items[i].suburb);
                        }

                        vm.searchTermResults = newResults;
                    } else {
                        vm.searchTermResults = [];
                    }
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        checkSearchTerms:function(){
            var vm = this;
            vm.resetTimeoutIfNecessary(vm);

            if(vm.previousSearchString != vm.searchString && vm.searchString != '')
            {
                vm.searchTimeoutId = setTimeout(function () {
                    vm.getSuburbSearchSuggestionsRequest(vm.searchString, vm);
                }, 1200);
            }
        },
        getSearchUrl: function (searchTerm) {
            var vm = this;
            return vm.searchApiUrl + '/?query=' + searchTerm;
        },
        selectSearchSuggestion: function(event) {
            var suburb = event.target.innerText || event.target.textContent;
            this.searchString = suburb;
        },
        setSearchActive:function(isActive) {
            var vm = this;

            setTimeout(function(){
                vm.searchActive = isActive;
            }, 500);
        }
    }
});
