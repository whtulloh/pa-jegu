<!DOCTYPE HTML>
<html>
    <head>
        <title>Bootstrap ada fixed sidebar</title>
        <style type="text/css">
            @import url('<?php echo base_url();?>asset/css/cerulean.css');
            @import url('<?php echo base_url();?>asset/css/bootstrap-responsive.css');
            body {
                padding-bottom: 40px;
                padding-top: 60px;
            }
            
            .sidebar-nav {
                padding: 9px 0;
            }
            
            .sidebar-nav-fixed {
                position:fixed;
                top:60px;
                width:21.97%;
            }
            
            @media (max-width: 767px) {
                .sidebar-nav-fixed {
                    width:auto;
                }
            }
            
            @media (max-width: 979px) {
                .sidebar-nav-fixed {
                    position:static;
                    width: auto;
                }
            }
             
             /* for demo purposes (fixed top navbar placement in the fiddle. Ok to remove */
             
            @media (max-width: 767px) {
                body {
                    padding-top: 0;
                }
            }
            
            @media (max-width: 979px) {
                body {
                    padding-top: 0;
                }
            }
        </style>
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
       <a class="brand" href="#">Project name</a>
       <div class="btn-group pull-right">
         <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
           <i class="icon-user"></i> Username
           <span class="caret"></span>
         </a>
         <ul class="dropdown-menu">
           <li><a href="#">Profile</a></li>
           <li class="divider"></li>
           <li><a href="#">Sign Out</a></li>
         </ul>
       </div>
       <div class="nav-collapse">
         <ul class="nav">
           <li class="active"><a href="#">Home</a></li>
           <li><a href="#about">About</a></li>
           <li><a href="backup_header">BackupHeader</a></li>
           <li class=" dropdown ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="product/bean">Bean Bag</a></li>
                <li><a href="product/karpet">Karpet</a></li>
              </ul>
            </li>
         </ul>
         <form class="form-search">
            <div class="input-append">
              <input type="text" class="span2 search-query">
              <button type="submit" class="btn">Search</button>
            </div>
          </form>
       </div><!--/.nav-collapse -->
     </div>
   </div>
 </div>
 <div class="container-fluid">
   <div class="row-fluid">
     <div class="span3">
       <div class="well sidebar-nav sidebar-nav-fixed">
         <ul class="nav nav-list">
           <li class="nav-header">Sidebar</li>
           <li class="active"><a href="#">Link</a></li>
           <li><a href="#">Link</a></li>
           <li><a href="#">Link</a></li>
           <li><a href="#">Link</a></li>
           <li class="nav-header">Sidebar</li>
           <li><a href="#">Link</a></li>
           <li><a href="#">Link</a></li>
           <li><a href="#">Link</a></li>
           <li><a href="#">Link</a></li>
           <li><a href="#">Link</a></li>
           <li><a href="#">Link</a></li>
           <li class="nav-header">Sidebar</li>
           <li><a href="#">Link</a></li>
           <li><a href="#">Link</a></li>
           <li><a href="#">Link</a></li>
         </ul>
       </div><!--/.well -->
     </div><!--/span-->
     <div class="span9">
       <div class="hero-unit">
         <h1>Hello, world!</h1>
         <p>This  is  a  template for a simple marketing or informational website.  It  includes  a large callout called the hero unit and three  supporting  pieces of  content. Use it as a starting point to create  something more  unique.</p>
         <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
       </div>
       <div class="row-fluid">
         <div class="span4">
           <h2>Heading</h2>
           <p>Donec  id  elit  non mi porta gravida at eget metus. Fusce dapibus, tellus  ac  cursus  commodo, tortor mauris condimentum nibh, ut fermentum massa  justo  sit  amet risus. Etiam porta sem malesuada magna mollis euismod.  Donec  sed  odio dui. </p>
           <p><a class="btn" href="#">View details &raquo;</a></p>
         </div><!--/span-->
         <div class="span4">
           <h2>Heading</h2>
           <p>Donec  id  elit  non mi porta gravida at eget metus. Fusce dapibus, tellus  ac  cursus  commodo, tortor mauris condimentum nibh, ut fermentum massa  justo  sit  amet risus. Etiam porta sem malesuada magna mollis euismod.  Donec  sed  odio dui. </p>
           <p><a class="btn" href="#">View details &raquo;</a></p>
         </div><!--/span-->
         <div class="span4">
           <h2>Heading</h2>
           <p>Donec  id  elit  non mi porta gravida at eget metus. Fusce dapibus, tellus  ac  cursus  commodo, tortor mauris condimentum nibh, ut fermentum massa  justo  sit  amet risus. Etiam porta sem malesuada magna mollis euismod.  Donec  sed  odio dui. </p>
           <p><a class="btn" href="#">View details &raquo;</a></p>
         </div><!--/span-->
       </div><!--/row-->
       <div class="row-fluid">
         <div class="span4">
           <h2>Heading</h2>
           <p>Donec  id  elit  non mi porta gravida at eget metus. Fusce dapibus, tellus  ac  cursus  commodo, tortor mauris condimentum nibh, ut fermentum massa  justo  sit  amet risus. Etiam porta sem malesuada magna mollis euismod.  Donec  sed  odio dui. </p>
           <p><a class="btn" href="#">View details &raquo;</a></p>
         </div><!--/span-->
         <div class="span4">
           <h2>Heading</h2>
           <p>Donec  id  elit  non mi porta gravida at eget metus. Fusce dapibus, tellus  ac  cursus  commodo, tortor mauris condimentum nibh, ut fermentum massa  justo  sit  amet risus. Etiam porta sem malesuada magna mollis euismod.  Donec  sed  odio dui. </p>
           <p><a class="btn" href="#">View details &raquo;</a></p>
         </div><!--/span-->
         <div class="span4">
           <h2>Heading</h2>
           <p>Donec  id  elit  non mi porta gravida at eget metus. Fusce dapibus, tellus  ac  cursus  commodo, tortor mauris condimentum nibh, ut fermentum massa  justo  sit  amet risus. Etiam porta sem malesuada magna mollis euismod.  Donec  sed  odio dui. </p>
           <p><a class="btn" href="#">View details &raquo;</a></p>
         </div><!--/span-->
      </div><!--/row-->
      <hr>
      <footer class="hero-unit">
        <p>&copy; Company 2012</p>
      </footer> 
     </div><!--/span-->
   </div><!--/row-->
 
  
 </div><!--/.fluid-container-->
   <script src="<?php echo base_url('asset/js/jquery-1.7.2.min.js');?>" type="text/javaxcript"></script>
   <script src="<?php echo base_url('asset/js/bootstrap.js');?>" type="text/javaxcript"></script>
</body>
</html>