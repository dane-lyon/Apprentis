jQuery(function($) {

    $.datepicker.setDefaults($.datepicker.regional['fr']);

    $('.datepicker').datepicker({
        minDate: 0,
        onSelect: function(date) {
            var option = this.id == 'emprunt' ? 'minDate' : 'maxDate';
            $('.datepicker').not('#' + this.id).datepicker('option', option, date);
        }

    });

});