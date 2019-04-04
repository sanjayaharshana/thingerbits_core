@push('globals')
    <script>
        FleetCart.selectize = {
            load: function (query, callback) {
                var url = this.$input.data('url');

                if (url === undefined || query.length === 0) {
                    return callback();
                }

                $.get(url + '?query=' + query, callback, 'json');
            }
        };
    </script>
@endpush
