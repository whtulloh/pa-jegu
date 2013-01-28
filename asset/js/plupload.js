$(document).ready(function(){
    var baseurl = $('#baseurl').val();
    var i = 0;
    $('.uploadFiles').click(function(){
        
       $('#uplaodBox').dialog('open');
        return false
    })
    $('#uplaodBox').dialog({
        
        autoOpen : false,
        modal    : true,
        buttons : {
            'Close' : function(){
                $(this).dialog('close')
            }
        },
        width : 1000,
        height : 500
    })
    
    function log() {
		var str = "";

		plupload.each(arguments, function(arg) {
			var row = "";

			if (typeof(arg) != "string") {
				plupload.each(arg, function(value, key) {
					// Convert items in File objects to human readable form
					if (arg instanceof plupload.File) {
						// Convert status to human readable
						switch (value) {
							case plupload.QUEUED:
								value = 'QUEUED';
								break;

							case plupload.UPLOADING:
								value = 'UPLOADING';
								break;

							case plupload.FAILED:
								value = 'FAILED';
								break;

							case plupload.DONE:
								value = 'DONE';
								break;
						}
					}

					if (typeof(value) != "function") {
						row += (row ? ', ': '') + key + '=' + value;
					}
				});

				str += row + " ";
			} else { 
				str += arg + " ";
			}
		});

		$('#log').val($('#log').val() + str + "\r\n");
	}

	$("#uploader").pluploadQueue({
		// General settings
		runtimes: 'gears,browserplus,silverlight,flash,html4',
		url: baseurl + 'mimin/barang/uploadtoserver',
		max_file_size: '100mb',
		chunk_size: '1mb',
		unique_names: true,

		// Resize images on clientside if we can
		resize: {width: 320, height: 240, quality: 90},

		// Specify what files to browse for
		filters: [
			{title: "Image files", extensions: "jpg,gif,png"},
			{title: "Zip files", extensions: "zip"},
                        {title : "Media Files", extensions : 'flv,mp4'}
		],

		// Flash/Silverlight paths
		flash_swf_url:baseurl +  'asset/js/plupload/plupload.flash.swf',
		silverlight_xap_url:baseurl + 'asset/js/plupload/plupload.silverlight.xap',

		// PreInit events, bound before any internal events
		preinit: {
			Init: function(up, info) {
				log('[Init]', 'Info:', info, 'Features:', up.features);
			},

			UploadFile: function(up, file) {
				log('[UploadFile]', file);

				// You can override settings before the file is uploaded
				// up.settings.url = 'upload.php?id=' + file.id;
				// up.settings.multipart_params = {param1: 'value1', param2: 'value2'};
			}
		},

		// Post init events, bound after the internal events
		init: {
			Refresh: function(up) {
				// Called when upload shim is moved
				log('[Refresh]');
			},

			StateChanged: function(up) {
				// Called when the state of the queue is changed
				log('[StateChanged]', up.state == plupload.STARTED ? "STARTED": "STOPPED");
			},

			QueueChanged: function(up) {
				// Called when the files in queue are changed by adding/removing files
				log('[QueueChanged]');
			},

			UploadProgress: function(up, file) {
				// Called while a file is being uploaded
				log('[UploadProgress]', 'File:', file, "Total:", up.total);
			},

			FilesAdded: function(up, files) {
				// Callced when files are added to queue
				log('[FilesAdded]');

				plupload.each(files, function(file) {
					log('  File:', file);
				});
			},

			FilesRemoved: function(up, files) {
				// Called when files where removed from queue
				log('[FilesRemoved]');

				plupload.each(files, function(file) {
					log('  File:', file);
				});
			},

			FileUploaded: function(up, file, info) {
				// Called when a file has finished uploading
				log('[FileUploaded] File:', file, "Info:", info);
                                // i must display image
                                var files = $('<p><a target="_blank" href="'+baseurl + 'asset/img/barang/'+file.target_name+'">Files '+i+'</a>size : '+file.size+'</p>')
                                $(files).hide().insertAfter('#insertAfterme').slideDown('slow');
                                i++
			},

			ChunkUploaded: function(up, file, info) {
				// Called when a file chunk has finished uploading
				log('[ChunkUploaded] File:', file, "Info:", info);
			},

			Error: function(up, args) {
				// Called when a error has occured

				// Handle file specific error and general error
				if (args.file) {
					log('[error]', args, "File:", args.file);
				} else {
					log('[error]', args);
				}
			}
		}
	});

	$('#log').val('');
	$('#clear').click(function(e) {
		e.preventDefault();
		$("#uploader").pluploadQueue().splice();
	});
    
})