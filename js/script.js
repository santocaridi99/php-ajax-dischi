new Vue({
    el: "#app",
    data: {
        // dichiaro un array di dischi vuoto che riempirò con chiamata axios
        discs: [],
        // dichiaro array di dischi filtrati
        filteredDisc: [],
        // variabile genere selezionato (cambiera al change della select)
        selectedGenre: '',
    },
    mounted() {
        axios.get("http://localhost:81/php-ajax-dischi/api/DischiApi.php").then((res) => {
            // riempio array disc
            this.discs = res.data;
            this.filteredDisc = res.data;
        });
    },
    methods: {
        genreFilter() {
            this.filteredDisc = this.discs.filter((disc) => {
                return disc.genre === this.selectedGenre || this.selectedGenre === '';
            });
        },

    },
})