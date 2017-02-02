/**
 * JS Document
 */

jQuery.fn.inputValue = function(labelField, defaultValue, formId) {
	var labelField = labelField || "Digite aqui sua busca...";
	var defaultValue = defaultValue || "";
	var formId = formId || "trabalhe-conosco";
	
	var fields = this;
	
	jQuery("#"+formId).submit(function() {
		fields.each(function() {
			if (jQuery(this).val() == labelField) {
				jQuery(this).val("");
			}
		});
	});
	
	return fields.each(function() {
		
		if (defaultValue != "") {
			jQuery(this).val(defaultValue);
		} else {
			jQuery(this).val(labelField);
		}
		
		jQuery(this).focus(function() {
			if (jQuery(this).val() == labelField) {
				jQuery(this).val("");
			}
		});
		
		jQuery(this).blur(function() {
			if (jQuery(this).val() == "") {
				jQuery(this).val(labelField);
			}
		});
	});
};