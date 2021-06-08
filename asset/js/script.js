const app = new Vue({
    el: '#app',
    data: {

        dischi: [],
        mess: 'ciao',






    },
    mounted() {
        axios.get('http://localhost:8888/php-ajax-dischi/data/api.php')
            .then((res) => {
                this.disci = res.data;
                console.log(res.data);
            })
            //per vedere errori nelle chiamtae api        
            .catch((err) => {
                console.log(err);
            })
    },

});

console.log(app);