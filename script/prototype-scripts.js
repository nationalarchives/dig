(function($){
    $('.hdd-transfer-option').hide();
    $('#show-hdd-transfer').on('click', function (e) {
        e.preventDefault();
        $('.hdd-transfer-option').toggle();
    })

})(jQuery);