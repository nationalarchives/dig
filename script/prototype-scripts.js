(function ($) {

    $('.hdd-transfer-option').hide();
    $('#show-hdd-transfer').on('click', function (e) {
        e.preventDefault();
        $('.hdd-transfer-option').toggle();
    });

    $('#show-ok').on('click', function (e) {
        var $this = $(this);
        var text = ($(e.target).text() === 'Hide matches') ? 'Show matches' : 'Hide matches';
        e.preventDefault();
        $('#comparison-table .success').toggle();
        $(e.target).text(text);
    }).click();

})(jQuery);