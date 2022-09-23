const app = new Vue({ 
    el: '#app',
    data: {
        listaDischi: []

    },
    methods: {
        fetchDischi() {
            axios.get('http://localhost:8888/boolean/php-ajax-dischi/api/dischi.php')
            .then( res => {
                console.log(res)
                this.listaDischi = res.data.response
            })
        }
    },

    created() {
        this.fetchDischi()
    }
})