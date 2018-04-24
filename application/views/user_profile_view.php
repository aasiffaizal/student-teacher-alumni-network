<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      





    <title>HOME</title>

    <!---<meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">-->

    <link href="<?php echo base_url(); ?>assets/bootstrapuser/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
      


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
                <li ><a href="<?php echo base_url(); ?>index.php/college_newsfeed"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                <li class="active"><a href="<?php echo base_url(); ?>index.php/home"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
                
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
                <li><a href="http://localhost/Stan/index.php/Login/inbox"> <span
                    class="glyphicon glyphicon-comment"></span>Inbox <span class="label label-primary"><?php echo $message;?></span>
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
                          <a class="navbar-brand" href="#"><img class="img-responsive" src="<?php foreach($record as $row){ echo $row->DP;}?>"></a>
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
        <div class="col-lg-6">
            
        
         <ul class="details1 basic">
             <li><h3>Basic details</h3></li>
             <li>Name :
                <?php foreach($record as $row){echo $row->Name;}?></li>
             <li>Gender :
                <?php foreach($record as $row){echo $row->Gender;}?></li>
             <li>Date of Birth :
                <?php foreach($record as $row){echo $row->dob;}?></li>
             <li>Year of joining :
                <?php foreach($record as $row){echo $row->YearofJoining;}?></li>
             <li>Email ID :
                <?php foreach($record as $row){echo $row->email;}?></li>
             <li>Type :
             
                 <?php foreach($record as $row){ echo $row->Type; }?></li>
                 <?php foreach($record as $row){ $Type=$row->Type;} 
              if($Type=='Student')
                {?>
            <li>Year :
            
                <?php foreach($details as $row){ echo $row->Year; }?></li>
             <li>Branch :
                <?php foreach($details as $row){ echo $row->Branch; }?></li><?php }?>
                <?php foreach($record as $row){ $Type=$row->Type;} 
              if($Type=='Alumni')
                {?>
            <li>Year of Graduation:
            
                <?php foreach($details as $row){ $Year=$row->GradYear; if($Year!=0) echo $Year; }?></li><?php }?>

             </ul> 
                    
        </div>
                    
        <?php foreach($record as $row){ $Type=$row->Type;} 
              if($Type!='Teacher')
                {?>             
              <div class="col-md-6">
        
         <ul class="details1 basic">
             <li><h3>Work </h3></li>
        <?php foreach($record as $row){ $Type=$row->Type;} 
              if($Type=='Student')
                {?><li>Worked at :<?php foreach($details as $row){echo $row->Company;}?></li><?php }?>
        <?php foreach($record as $row){ $Type=$row->Type;} 
              if($Type=='Alumni')
                {?><li>Working at :<?php foreach($details as $row){echo $row->Company;}?></li>
              <li>Experience :<?php foreach($details as $row){echo $row->Experience;}?></li> <?php }?>
             <li>Designation :<?php foreach($details as $row){echo $row->Designation;}?></li>
             
             <li>Skills :<?php foreach($details as $row){echo $row->Skills;}?></li>
            
            </ul> 
                    
        </div>
        <?php
          }?>


          <?php foreach($record as $row){ $Type=$row->Type;} 
              if($Type=='Teacher')
                {?>
        <div class="col-md-6">
        
         <ul class="details1 basic">
             <li><h3>Work</h3></li>
             <li>Designation : <?php foreach($details as $row){echo $row->Designation;}?></li>
             <li>Department :<?php foreach($details as $row){echo $row->Department;}?></li>
             <li>Subjects :<?php foreach($details as $row){echo $row->Subjects;}?></li>
            
            </ul> 
          <?php
          }?>
                    
        </div>
        <?php foreach($record as $row){ $Type=$row->Type;} 
              if($Type!='Teacher')
                {?>

                    
                                 <div class="row">            
        <div class="col-md-6">
        
         <ul class="details basic">
             <li><h3>Mini Project</h3></li>
             <li>Topic :<?php foreach($details as $row){echo $row->MiniPro;}?></li>
             <li>Overview :<?php foreach($details as $row){echo $row->MiniProO;}?></li>   
        </div>            
        <div class="col-md-6">
        
         <ul class="details basic">
             <li><h3>Seminar</h3></li>
             <li>Topic :<?php foreach($details as $row){echo $row->Sem;}?></li>
             <li>Overview :<?php foreach($details as $row){echo $row->SemO;}?></li>   
        </div>
        </div>
        <?php foreach($details as $row){$present=$row->MainPro;}
          if($present!=NULL){?>
        <div class="row">            
        <div class="col-md-12">
        
         <ul class="details1 basic">
             <li><h3>Main Project</h3></li>
             <li>Topic :<?php foreach($details as $row){echo $row->MainPro;}?></li>
             <li>Overview :<?php foreach($details as $row){echo $row->MainProO;}?></li>   
        </div>
        </div>
        <?php }?>
<?php
          }?>
        
                    
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