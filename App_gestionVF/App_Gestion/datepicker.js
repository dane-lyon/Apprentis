jQuery(function($){
	$('#emprunt, #retour').datepicker({
		dateFormat: 'yy-mm-dd',
		minDate: 1,
		onSelect: function(date){
			//$('#retour').datepicker('option','minDate',date);
			var option = null;
			if(this.id == 'emprunt')
			{
				option = 'minDate'
			}
			else
			{
				option = 'maxDate'
			}
			$('.Selec_Date').not('#'+this.id).datepicker('option',option,date);
		}
	});
});