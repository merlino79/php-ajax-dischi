const app = new Vue({

    el: '#app',
    data: {

        dischi: [],
        apiURL: 'http://localhost:8888/php-ajax-dischi/data/api.php'
    },

    methods: {
        getAPI() {
            axios.get(this.apiURL, )
                .then((res) => {
                    this.dischi = res.data.albums;
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