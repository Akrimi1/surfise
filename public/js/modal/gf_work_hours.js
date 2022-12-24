(function($) {
    "use strict";
    
    function addWorkHoursRow($container) {
        var row_html = $container.find('.gf-group-work-hours').eq(0)[0].outerHTML, $row;
        $row = $('<div />', {html: row_html});
        $row.find('.gf-group-work-hours').append('<div class="remove" title="Remove"></div>');

        $container.append($row);
        refreshInputNames($container);
        $container.find('.gf-group-work-hours').last().find('select option').prop('selected', false);
    }
    
    function refreshInputNames($container) {
        var name_template = $container.data('input-name-template');
        $container.find('.gf-group-work-hours').each(function (i) {
            i++;
            $(this).find('.gf-day-dropdown select').attr('name', name_template + i + '.1');
            $(this).find('.gf-start-time-dropdown select').attr('name', name_template + i + '.2');
            $(this).find('.gf-end-time-dropdown select').attr('name', name_template + i + '.3');
        });
    }

    $(document).on('click', '.gf-add-work-hours-row', function (e) {
        e.preventDefault();
        var $parent = $(this).parent().find('.gf-container-work-hours');
        addWorkHoursRow($parent);
    });
    
    $(document).on('click', '.gf-group-work-hours .remove', function (e) {
        var $container = $(this).parent().parent();
        $(this).parent().remove();
        refreshInputNames($container);
    });
    
})(jQuery);
