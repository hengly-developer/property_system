function showList(options) {
    var table = new Tabulator(options.target, {
        ajaxURL: options.url,
        ajaxFiltering: true,
        ajaxSorting: true,
        layout: 'fitColumns',
        pagination: 'remote',
        paginationSize: options.page_size,
        placeholder: 'No data set',
        height: 'auto',
        initialSort: [
            {column: 'created_at', dir: 'desc'}
        ],
        columns: options.columns,
        /*cellEdited: options.edit,*/
        selectable: true,
        rowSelectionChanged: function(data) {
            if (data.length > 0) {
                jQuery('#delete-selected, #deactivate-selected').removeClass('hidden');
            } else {
                jQuery('#delete-selected, #deactivate-selected').addClass('hidden');
            }
        }
    });

    jQuery('#select-all').click(function () {
        if (jQuery(this).hasClass('deselected-row')) {
            jQuery('#delete-selected, #deactivate-selected').addClass('hidden');
            jQuery(this).removeClass('deselected-row').html('Select all');
            table.deselectRow();
        } else {
            jQuery('#delete-selected, #deactivate-selected').removeClass('hidden');
            jQuery(this).addClass('deselected-row').html('Deselect all');
            table.selectRow();
        }
    });

    jQuery('#deactivate-selected').click(function (e) {
        e.preventDefault();
        var rows = table.getSelectedData();
        if (rows.length > 0) {
            if (confirm('Are you sure?')) {
                var ids = [];
                for (var r = 0; r < rows.length; r++) {
                    ids.push(rows[r].id);
                }

                jQuery.ajax({
                    type: 'POST',
                    url: options.deactivate_url,
                    data: {
                        id: ids,
                        _token: options.token
                    },
                    success: function (e) {
                        if (e.ok) {
                            alert(e.message);
                            window.location.href = location.href;
                        }
                    }
                })
            }
        } else {
            alert('Please select at least a row!')
        }
    });

    jQuery('#download-csv').click(function() {
        table.download('csv', 'report.csv');
    });

    jQuery('#download-pdf').click(function () {
        table.download('pdf', 'report.pdf');
    });
}