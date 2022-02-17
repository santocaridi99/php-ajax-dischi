new Vue({
    el: "#app",
    data: {
        // dichiaro un array di dischi vuoto che riempirò con chiamata axios
        discs: []
    },
    mounted() {
        axios.get("http://localhost:81/php-ajax-dischi/api/DischiApi.php").then((res) => {
            // riempio array disc
            this.discs = res.data;
        })
    }
})