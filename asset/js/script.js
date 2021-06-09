const app = new Vue({

    el: '#app',
    data: {

        albums: [],
        apiURL: 'http://localhost:8888/php-ajax-dischi/data/api.php'
    },

    methods: {
        getAPI() {
            axios.get(this.apiURL, )
                .then((res) => {
                    this.albums = res.data.albums;
                    console.log(res.data);
                })
                //per vedere errori nelle chiamtae api        
                .catch((err) => {
                    console.log(err);
                })
        }


    },

    created() {
        this.getAPI();
    }

});

console.log(app);