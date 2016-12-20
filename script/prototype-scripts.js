(function ($) {

    // HDD transfer option
    $('.hdd-transfer-option').hide();
    $('#show-hdd-transfer').on('click', function (e) {
        e.preventDefault();
        $('.hdd-transfer-option').toggle();
    });

    // Toggling matches
    $('#show-ok').on('click', function (e) {
        var $this = $(this);
        var text = ($(e.target).text() === 'Hide matches') ? 'Show matches' : 'Hide matches';
        e.preventDefault();
        $('#comparison-table .success').toggle();
        $(e.target).text(text);
    }).click();

    var $rows = $('table tr:nth-of-type(5)');
    $rows.nextAll().hide();
    $('#show_all').click(function () {
        $this = $(this);
        $rows.nextAll().fadeToggle("fast");
        if ($.trim($this.text()) === 'Show less') {
            $this.text('Show more');
        } else {
            $this.text('Show less');
        }
    });
})(jQuery);