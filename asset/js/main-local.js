//this is the application.js file from the example code//
$(function ()
{
	'use strict';

	// Initialize the jQuery File Upload widget:
	$('#fileupload').fileupload();
	
	// Enable iframe cross-domain access via redirect option:
	$('#fileupload').fileupload(
		'option',
		'redirect',
		window.location.href.replace(
			/\/[^\/]*$/,
			'./cors/result.html?%s'
			)
		);

//Set your url localhost or your ndd (perrot-julien.fr)
	if (window.location.hostname === 'localhost') {
		//Load files
		// Upload server status check for browsers with CORS support:
		if ($.ajaxSettings.xhr().withCredentials !== undefined)
		{
			$.ajax({
				url: 'mimin/barang/upload',
				dataType: 'json', 
				
				success : function(data) {  

					var fu = $('#fileupload').data('fileupload'), 
					template;
					fu._adjustMaxNumberOfFiles(-data.length);
					template = fu._renderDownload(data)
					.appendTo($('#fileupload .files'));
					
					// Force reflow:
					fu._reflow = fu._transition && template.length &&
					template[0].offsetWidth;
					template.addClass('in');
					$('#loading').remove();
				}

			}).fail(function () {
				$('<span class="alert alert-success"/>')
				.text('Upload server avaliable - ' +
					new Date())
				.appendTo('#fileupload');
			});
		}
	} else {
		// Load existing files:
		$('#fileupload').each(function () {
			var that = this;
			$.getJSON(this.action, function (result) {
				if (result && result.length) {
					$(that).fileupload('option', 'done')
					.call(that, null, {
						result: result
					});
				}
			});
		});
	}


	// Open download dialogs via iframes,
	// to prevent aborting current uploads:
	$('#fileupload .files a:not([target^=_blank])').live('click', function (e) {
		e.preventDefault();
		$('<iframe style="display:none;"></iframe>')
		.prop('src', this.href)
		.appendTo('body');
	});
});