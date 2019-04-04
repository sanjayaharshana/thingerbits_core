$('#refresh-rates').on('click', (e) => {
    $.ajax({
        type: 'GET',
        url: route('admin.currency_rates.refresh'),
        success() {
            DataTable.reload('#currency-rates-table .table');

            window.admin.stopButtonLoading($(e.currentTarget));
        },
        error(xhr) {
            if (xhr.status === 406) {
                error(xhr.responseJSON.message);
            } else {
                error(xhr.statusText);
            }

            window.admin.stopButtonLoading($(e.currentTarget));
        },
    });
});
