<html>
<head>
    
    <link href="<?php echo base_url(); ?>assets/bootstrapuser/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style_collegepage.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>home-res/res/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    
</head>
    
<body>
    
    
    
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
                    <div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                    class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="site-icon">STAN</li>
                <li class="active" ><a href="<?php echo base_url(); ?>index.php/college_newsfeed"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                <li class=""><a href="<?php echo base_url(); ?>index.php/home"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
                
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-search"></span>Search <b class="caret"></b></a>
                    <ul class="dropdown-menu" style="min-width: 300px;">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="navbar-form navbar-left" action="<?php echo base_url(); ?>index.php/Search" method="post" role="search">
                                    <div class="input-group">
                                        <input type="text" name="Name" class="form-control" placeholder="Search" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit">
                                                Go!</button>
                                        </span>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-comment"></span>Inbox <span class="label label-primary"></span>
                </a>
                </li>
                <li><a href="http://localhost/Stan/index.php/Update"><span class="glyphicon glyphicon-pencil"></span>Edit</a></li>
              
                        <li><a href="http://localhost/Stan/index.php/Login/logout"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
                        
    </div>                    
    
    
<div class="container">
	 <div id="blog" class="row"> 
                
                  <div class="col-sm-2 paddingTop20">
            <nav class="nav-sidebar">
                <ul class="nav">
                    <li class="active"><a href="javascript:;"><span class="glyphicon glyphicon-star"></span> NEWSFEED</a></li>
                    <li><a href="http://www.modelengineering.college/">College site</a></li>
                    <li><a href="#">Cusat website</a></li>
                    <li><a href="https://www.exam.cusat.ac.in">Cusat Exam</a></li>
                    <li class="nav-divider"></li>
                    
                </ul>
            </nav>
                      <div><h2 class="add"></h2></div>
        </div>
                 <div class="col-md-10 blogShort">
                     <h1><?php foreach($message as $row)
                                          { 
                                            if($row->tag==1)
                                                        {
                                                          echo $row->title;  ?></h1>
                                                          <article><p>
                                                          <?php 
                                                          echo $row->message;
                                                        }
                                          }

                  //Position 1 (place each of these php codes within html
                                   //tags to adjust their position in the college page
                            ?>
                            </p></article>
                     
                 </div>
                  <div class="col-md-10 blogShort">
                     <h1><?php foreach($message as $row)
                                          { 
                                            if($row->tag==2)
                                                        {
                                                          echo $row->title;  ?></h1>
                                                          <article><p>
                                                          <?php 
                                                          echo $row->message;
                                                        }
                                          }

                  //Position 2 (place each of these php codes within html
                                   //tags to adjust their position in the college page
                            ?>
                 </p></article>
                 </div>
                 
                  <div class="col-md-10 blogShort">
                     <h1><?php foreach($message as $row)
                                          { 
                                            if($row->tag==3)
                                                        {
                                                          echo $row->title;  ?></h1>
                                                          <article><p>
                                                          <?php 
                                                          echo $row->message;
                                                        }
                                          }

                  //Position 3 (place each of these php codes within html
                                   //tags to adjust their position in the college page
                            ?>

                         </p></article> 
                 </div>
                 
               <div class="col-md-12 gap10"></div>
             </div>
</div>
    </body>
    </html>

    <script src="<?php echo base_url(); ?>assets/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrapuser/js/bootstrap.min.js"></script>