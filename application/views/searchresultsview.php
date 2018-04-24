<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      

	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<!-- BEGIN CSS FRAMEWORK -->
	<link rel="stylesheet" href="http://localhost/Stan/assets/bootstrapuser/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/stan/assets/plugins/font-awesome/css/font-awesome.min.css">
	<!-- END CSS FRAMEWORK -->
	
	<!-- BEGIN CSS PLUGIN -->
	
	
	<!-- END CSS PLUGIN -->
	
	<!-- BEGIN CSS TEMPLATE -->
	
	
	<!-- END CSS TEMPLATE -->
    <title>HOME</title>

    <!---<meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">-->

    <link href="<?php echo base_url(); ?>assets/bootstrapuser/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
      


  </head>
  <body>
  <?php $no=0;?>
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
                <li ><a href="<?php echo base_url(); ?>index.php/college_newsfeed"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                <li class=""><a href="<?php echo base_url(); ?>index.php/home"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
                
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-search"></span>Search <b class="caret"></b></a>
                    <ul class="dropdown-menu" style="min-width: 300px;">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="navbar-form navbar-left" action="Search" method="post" role="search">
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
                <li class="dropdown"><a href="http://localhost/Stan/index.php/inbox" class="dropdown-toggle" data-toggle="dropdown"><span
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
   
        
       

<div class="wrapper">
        <div class="container">
        	<div class="row">
                <div class="col-md-12">
                <header id="header">

  <div class="coverpic">
  
      <img class="cover-pic" src="<?php echo base_url(); ?>assets/img/background/07.jpg">
    
  </div>

 
                	<nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">

                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home"><img class="img-responsive" src="<?php foreach($record as $row){ echo $row->DP;}?>"></a>
                          <span class="site-name"><b><?php foreach($record as $row){ echo $row->Name;}?></b><span>
                             
                          
                        </div>
                    
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="mainNav" >
                          
                           
                        </div><!-- /.navbar-collapse -->
					</nav>
                    
                </header><!--/#HEADER-->                 
                        
    </div>
    

		</div>
		
	</div>
</div>
       <div class="row">
        	<div class="details2 basic">
        		<h1>Search Result</h1>
        		<p style="margin:40px;"><?php if($post==1)
        			print_r($message);
        			else{?></p>

        		<div class="grid-body">
								<table cellspacing="0" width="90%">
									<thead>
										<tr>

											<th>No.</th>
											<th>Name</th>
											<th>Username</th>
											<th>Type</th>
											<th>Year Of Joining</th>
											<th>Profile</th>
                                                                                </tr></thead>
<tbody>
        	</div>
        </div>
        <?php foreach($post as $posts){?>
     <tr>
         <td> <?php echo ++$no;?> </td>
         <td id="Name"> <?php echo $posts->Name;?> </td>
         <td> <?php echo $posts->username;?> </td>
          <td> <?php echo $posts->Type;?> </td>
          <td> <?php echo $posts->YearofJoining;?> </td>
         <td><a href="Search/viewprof/<?php echo $posts->Type;?>/<?php echo $posts->username;?>">View Profile</a>
     



 </tr>    
     <?php }}?>  

										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END BASIC DATATABLES -->
				</div>
					
        
                    
    <script src="<?php echo base_url(); ?>assets/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrapuser/js/bootstrap.min.js"></script>
  <!-- BEGIN COMPOSE MESSAGE -->
                  <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-wrapper">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header bg-blue">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><i class="fa fa-envelope"></i> Compose New Message</h4>
                          </div>
                          <form action="#" method="post">
                            <div class="modal-body">
                              <div class="form-group">
                                <input name="to" type="email" class="form-control" placeholder="To">
                              </div>
                              
                              <div class="form-group">
                                <textarea name="message" id="email_message" class="form-control" placeholder="Message" style="height: 320px;"></textarea>
                              </div>
                              
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>
                              <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-envelope"></i> Send Message</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- END COMPOSE MESSAGE -->

  </body>

</html>




<html>

<!--php 

$no=1;
foreach($details as $row)
{echo "$no.";
echo $row->name;
echo"(".($row->type).")";
$no++;
echo"<br>";


}




?>-->


</html>
