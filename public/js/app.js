Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

new Vue({
    el: '#cards',

    data: {
        'i': 1
    },

    ready: function() {
        this.fetchCards();
        $(window).scroll(function(){
            if($(window).scrollTop() == $(document).height() - $(window).height())
            {
                $.ajax({
                    url: $('.navigation').html(),
                    success: function(data)
                    {
                        if(data)
                        {
                            this.$set('cards', data.data);
                            console.log(data);
                        }
                    }
                });
            }
        });
    },

    methods: {
        fetchCards: function() {
            this.$http.get('cards', function(cards) {
                this.$set('cards', cards.data);
                this.$set('next', cards.next_page_url);
                this.$set('current', cards.current_page);
            })
        }
    }
});