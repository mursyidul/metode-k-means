<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title><?=getOption('app_name');?></title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="stylesheet" type="text/css" href="<?=contenturl('themes/');?>lib/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?=contenturl('themes/');?>lib/bootstrap/css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="<?=contenturl('themes/');?>stylesheets/theme.css" />
    <link rel="stylesheet" href="<?=contenturl('themes/');?>lib/font-awesome/css/font-awesome.css" />

    <script src="<?=contenturl('themes/');?>lib/jquery-1.8.1.min.js" type="text/javascript"></script>
    
    
    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: "Times New Roman"; }
        .brand .first {
            color: #ccc;          
            font-family:"Times New Roman";
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
        
        .verticalLine {
            border-left: thick solid #ff0000;
        }
        
      
        
    </style>

    
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7"> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8"> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9"> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body> 
  <!--<![endif]-->
    <div class="container" style="width:1000px">
    <div style="background-color:#fff;">
    <div class="navbar" style="width:1000px;">
    
        <div class="navbar-inner" style="background-image: url('<?=contenturl()."headbg.png";?>'); background-repeat: repeat;">
            <div class="container-fluid" style="background-image: url('<?=contenturl()."ornamen.png";?>'); background-repeat: repeat-y;">
            	    
               
                <a class="brand" href="<?=site_url();?>"><img src="<?=contenturl();?>/logo.png"/><img src="<?=contenturl();?>/IIEC-logo.png"/></a>
            </div>
        </div>
       <div style="background-image: url('<?=contenturl()."bghead.png";?>'); background-repeat: repeat-x;">&nbsp;</div>
    </div>    
    

    <div class="container-fixed" style="margin-left:20px;">
        
        <div class="row-fluid">
            <div class="span3">
            <div class="sidebar-nav" style="width:300px;">
            <div class="nav-header" ><i class="icon-user"></i>User Login</div>
            <ul id="login-menu" class="nav nav-list collapse in">
             
                <?php
               
                echo form_open(site_url('auth/login'));
                ?>
                    <label>Username</label>
                    <input type="text" class="span12" name="username" />
                    <label>Password</label>
                    <input type="password" class="span12" name="password" />
                    <button class="btn btn-primary pull-right">Sign In</button>
                    
                    <div class="clearfix"></div>
                </form>
                
         
            </ul>                
</div>

	    <div class="row-fixed">
	  
    <div class="span4"><img src="<?=contenturl().'iihslogo.png';?>"></img></div>
    <div class="span4"><img src="<?=contenturl().'iisslogo.png';?>"></img></div>
    
    </div>
   
        </div>
        <div class="span9" style="width:600px;margin-left:120px">
        
        <img src="<?=contenturl().'indexbanner.jpg';?>"></img>
		<h3>Selamat Datang</h3>
		<h4>Tes Potensi Akademik Dan Psikotest Online</h4>
		<p><?=getOption("sambutan");?></p>



        
        </div>
    </div>
    

    
    <footer>
        <hr />
        <p><center>&copy; 2014 <a href="<?=site_url();?>">IIEC | International Islamic Education Council</a></center>
        <p>
        <center>
        	<?php
        	echo "Author ".copyright();
        	?>
        </center>
        </p>
    </footer>
    

    


    <script src="<?=contenturl('themes/');?>lib/bootstrap/js/bootstrap.js"></script>
    </div>
  </div></div></body>
</html>


