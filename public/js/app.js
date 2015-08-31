Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

new Vue({
    el: '#cards',

    data: {
        'query': '',
        'i': 1,
        url: 'http://laravel-cards.dev/cards',
        cards: []
    },

    ready: function() {
        this.fetchCards();
        $(window).scroll(function(){
            if($(window).scrollTop() == $(document).height() - $(window).height() -50 )
            {
                console.log(this.current);
                console.log(this.url);
                this.fetchCards();
            }
        }.bind(this));
    },

    methods: {
        fetchCards: function() {
            this.$http.get(this.$get('url'), function(cards) {
                this.$set('cards', cards.data);
                this.$set('url', cards.next_page_url);
                this.$set('current', cards.current_page);
            })
        }
    }
});