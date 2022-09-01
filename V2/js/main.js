const root = new Vue(
    {
        el: '#root',
        data: {
            listDisc: [],
        },
        methods: {
            getDiscs: function () {
                axios.get('http://localhost/php-ajax-dischi/V2/call/call.php')
                    .then((response) => {
                        this.listDisc = response.data;
                        this.filteredCardGenre = this.listDisc;
                        console.log(this.listDisc);
                    });
            },
        },
        created() {
            this.getDiscs();
        }
    },
);