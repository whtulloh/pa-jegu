<!DOCTYPE HTML>
<!--
/*
 * jQuery File Upload Plugin Demo 6.13
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
-->
<html lang="en">
<head>
<!-- Force latest IE rendering engine or ChromeFrame if installed -->
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<meta charset="utf-8">
<title>jQuery File Upload Demo</title>
<meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support, progress bar and preview images for jQuery. Supports cross-domain, chunked and resumable file uploads. Works with any server-side platform (Google App Engine, PHP, Python, Ruby on Rails, Java, etc.) that supports standard HTML form file uploads.">
<meta name="viewport" content="width=device-width">
<!-- Bootstrap CSS Toolkit styles -->
<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap-image-gallery.min.css');?>">
<!-- Generic page styles -->
<link rel="stylesheet" href="<?php echo base_url('asset/css/style.css');?>">
<!-- Bootstrap styles for responsive website layout, supporting different screen sizes -->
<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap-responsive.min.css');?>">
<!-- Bootstrap CSS fixes for IE6 -->
<!--[if lt IE 7]><link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap-ie6.min.css"><![endif]-->
<!-- Bootstrap Image Gallery styles -->
<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap-responsive.min.css');?>">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="<?php echo base_url('asset/css/jquery.fileupload-ui.css');?>">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="<?php echo base_url('asset/css/jquery.fileupload-ui-noscript.css');?>"></noscript>
<!-- Shim to make HTML5 elements usable in older Internet Explorer versions -->
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">

            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Administration</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Admin</a></li>

            
              
            </ul>
            <p class="navbar-text pull-right">Logged in as <a href="#">Admin</a></p>
          </div><!--/.nav-collapse -->
        </div>
      </div>

    </div>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3">
            <div class="well sidebar-nav">
                <ul class="nav nav-list">
                
                    <li class="nav-header">Blog</li>
                    <li ><a href="#" title="new-article">New article</a></li>

                </ul>
            </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
            <div class="hero-unit">
                <div id="content-admin">

                 

                    <div id="new-article">
                        <h1>New article</h1>

                        <div id="upload-img">
                            <h2>Upload (Format : JPG, PNG)</h2>


                            <form id="fileupload" action="<? echo base_url() . 'mimin/upload/upload_img'; ?>" method="POST" enctype="multipart/form-data">
                                <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                                <div class="row fileupload-buttonbar">
                                    <div class="span7">
                                        <!-- The fileinput-button span is used to style the file input field as button -->
                                        <span class="btn btn-success fileinput-button">
                                            <span><i class="icon-plus icon-white"></i> Add files...</span>
                                            <input type="file" name="userfile" multiple>
                                        </span>
                                        <button type="submit" class="btn btn-primary start">
                                            <i class="icon-upload icon-white"></i> Start upload
                                        </button>
                                        <button type="reset" class="btn btn-warning cancel">
                                            <i class="icon-ban-circle icon-white"></i> Cancel upload
                                        </button>
                                        <button type="button" class="btn btn-danger delete">
                                            <i class="icon-trash icon-white"></i> Delete
                                        </button>
                                        <input type="checkbox" class="toggle">
                                    </div>
                                    <div class="span5">
                                        <!-- The global progress bar -->
                                        <div class="progress progress-success progress-striped active fade">
                                            <div class="bar" style="width:0%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- The loading indicator is shown during image processing -->
                                <div class="fileupload-loading"></div>
                                <br>
                                <!-- The table listing the files available for upload/download -->
                                <table class="table table-striped"><tbody class="files" data-toggle="modal-gallery" data-target="#modal-gallery"></tbody></table>
                            </form>





                            <br>
                            <div class="well">
                                <h3>Demo Notes</h3>
                                <ul>
                                    <li>The maximum file size for uploads in this demo is <strong>5 MB</strong> (default file size is unlimited).</li>
                                    <li>Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in this demo (by default there is no file type restriction).</li>
                                    <li>Uploaded files will be deleted automatically after <strong>5 minutes</strong> (demo setting).</li>
                                    <li>You can <strong>drag &amp; drop</strong> files from your desktop on this webpage with Google Chrome, Mozilla Firefox and Apple Safari.</li>
                                    <li>Please refer to the <a href="https://github.com/blueimp/jQuery-File-Upload">project website</a> and <a href="https://github.com/blueimp/jQuery-File-Upload/wiki">documentation</a> for more information.</li>
                                    <li>Built with Twitter's <a href="http://twitter.github.com/bootstrap/">Bootstrap</a> toolkit and Icons from <a href="http://glyphicons.com/">Glyphicons</a>.</li>
                                </ul>
                            </div>
                        </div>



                        <!-- modal-gallery is the modal dialog used for the image gallery -->
                        <div id="modal-gallery" class="modal modal-gallery hide fade">
                            <div class="modal-header">
                                <a class="close" data-dismiss="modal">&times;</a>
                                <h3 class="modal-title"></h3>
                            </div>
                            <div class="modal-body"><div class="modal-image"></div></div>
                            <div class="modal-footer">
                                <a class="btn btn-primary modal-next">Next <i class="icon-arrow-right icon-white"></i></a>
                                <a class="btn btn-info modal-prev"><i class="icon-arrow-left icon-white"></i> Previous</a>
                                <a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000"><i class="icon-play icon-white"></i> Slideshow</a>
                                <a class="btn modal-download" target="_blank"><i class="icon-download"></i> Download</a>
                            </div>
                        </div>




                        <!-- The template to display files available for upload -->
                        <script id="template-upload" type="text/x-tmpl">
                            {% for (var i=0, files=o.files, l=files.length, file=files[0]; i< l; file=files[++i]) { %}
                            <tr class="template-upload fade">
                                <td class="preview"><span class="fade"></span></td>
                                <td class="name">{%=file.name%}</td>
                                <td class="size">{%=o.formatFileSize(file.size)%}</td>
                                {% if (file.error) { %}
                                <td class="error" colspan="2"><span class="label label-important">{%=locale.fileupload.error%}</span> {%=locale.fileupload.errors[file.error] || file.error%}</td>
                                {% } else if (o.files.valid && !i) { %}
                                <td>
                                    <div class="progress progress-success progress-striped active"><div class="bar" style="width:0%;"></div></div>
                                </td>
                                <td class="start">{% if (!o.options.autoUpload) { %}
                                    <button class="btn btn-primary">
                                        <i class="icon-upload icon-white"></i> {%=locale.fileupload.start%}
                                    </button>
                                    {% } %}</td>
                                {% } else { %}
                                <td colspan="2"></td>
                                {% } %}
                                <td class="cancel">{% if (!i) { %}
                                    <button class="btn btn-warning">
                                        <i class="icon-ban-circle icon-white"></i> {%=locale.fileupload.cancel%}
                                    </button>
                                    {% } %}</td>
                            </tr>
                            {% } %}
                            </script>

                            <div id="download-files">
                            <!-- The template to display files available for download -->
                            <script id="template-download" type="text/x-tmpl">
                                {% for (var i=0, files=o.files, l=files.length, file=files[0]; i< l; file=files[++i]) { %}
                                <tr class="template-download fade">
                                    {% if (file.error) { %}
                                    <td></td>
                                    <td class="name">{%=file.name%}</td>
                                    <td class="size">{%=o.formatFileSize(file.size)%}</td>
                                    <td class="error" colspan="2"><span class="label label-important">{%=locale.fileupload.error%}</span> {%=locale.fileupload.errors[file.error] || file.error%}</td>
                                    {% } else { %}
                                    <td class="preview">{% if (file.thumbnail_url) { %}
                                        <a href="{%=file.url%}" title="{%=file.name%}" rel="gallery" download="{%=file.name%}"><img width="100px" src="{%=file.thumbnail_url%}"></a>
                                        {% } %}</td>
                                    <td class="name">
                                        <a href="{%=file.url%}" title="{%=file.name%}" rel="{%=file.thumbnail_url&&'gallery'%}" download="{%=file.name%}">{%=file.name%}</a>
                                    </td>
                                    <td class="size">{%=o.formatFileSize(file.size)%}</td>
                                    <td colspan="2"></td>
                                    {% } %}
                                    <td class="delete">
                                        <button class="btn btn-danger" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}">
                                            <i class="icon-trash icon-white"></i> {%=locale.fileupload.destroy%}
                                        </button>
                                        <input type="checkbox" name="delete" value="1">
                                    </td>

                                    <td class="add">
                                        <button class="btn btn-success add-article"  title="{%=file.name%}" data-type="PRIMARYIMAGE" data-url="{%=file.url%}">
                                            <i class="icon-plus icon-white"></i> Add 
                                        </button>

                                    </td>
                                </tr>
                                {% } %}

                               
                                </script>
                            </div>


                            </div>
                        </div>


                    </div>
                </div>

            </div><!--/span-->
        </div><!--/row-->

        <hr>

        <footer>
            <p>&copy; Company 2012</p>

        </footer>

    </div><!--/.fluid-container-->
<script src="<?php echo base_url('asset/js/jquery-1.7.2.min.js');?>"></script>
<script src="<?php echo base_url('asset/js/jquery.ui.1.8.16.min.js');?>"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?php echo base_url('asset/js/jquery.ui.widget.js');?>"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="<?php echo base_url('asset/js/tmpl.js');?>"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="<?php echo base_url('asset/js/load-image.js');?>"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="<?php echo base_url('asset/js/canvas-to-blob.min.js');?>"></script>
<!-- Bootstrap JS and Bootstrap Image Gallery are not required, but included for the demo -->
<script src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('asset/js/bootstrap-image-gallery.min.js');?>"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?php echo base_url('asset/js/jquery.iframe-transport.js');?>"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo base_url('asset/js/jquery.fileupload.js');?>"></script>
<!-- The File Upload file processing plugin -->
<script src="<?php echo base_url('asset/js/jquery.fileupload-fp.js');?>"></script>
<!-- The File Upload user interface plugin -->
<script src="<?php echo base_url('asset/js/jquery.fileupload-ui.js');?>"></script>
<script src="<?php echo base_url('asset/js/locale.js');?>"></script>
<!-- The main application script -->
<script src="<?php echo base_url('asset/js/main-local.js');?>"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE8+ -->
<!--[if gte IE 8]><script src="js/cors/jquery.xdr-transport.js"></script><![endif]-->
</body> 
</html>
