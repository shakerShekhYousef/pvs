(function ($) {
    "use strict";
    let table = $('#datatable').DataTable({
        serverSide: true,
        scrollY: 500,
        scrollX: true,
        scrollCollapse: true,
        processing: true,
        "ordering": false,
        pageLength: 10,
        ajax: {
            url: $('#table-url').data("url"),
            data: function (d) {
                d.search = $('input[type="search"]').val()
            }
        },
        order: [0, 'asc'],
        autoWidth: false,
        language: {
            paginate: {
                next: 'Next &#8250;',
                previous: '&#8249; Previous'
            }
        },
        columns: [
            {"data": 'checkbox', "name": 'checkbox', "orderable": false, "searchable": false},
            {"data": "image", "name": 'image'},
            {"data": "maker", "name": 'maker', "searchable": true},
            {"data": "model", 'name': 'model', "searchable": true},
            {"data": "year", 'name': 'year', "searchable": true},
            {"data": "price", 'name': 'price', "searchable": true},
        ]
    });
    $('.filter-select').change(function () {
        table.draw();
    });
})(jQuery)

