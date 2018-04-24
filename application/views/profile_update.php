
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User profile form requirement</title>
<link href="<?php echo base_url(); ?>assets/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous">
    <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url(); ?>assets/bootstrapuser/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/prof_edit.css" rel="stylesheet">
    <!-- Custom CSS -->
  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <li class="active"><a href="http://localhost/Stan/index.php/Update"><span class="glyphicon glyphicon-pencil"></span>Edit</a></li>
              
                        <li><a href="http://localhost/Stan/index.php/Login/logout"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
                        
    </div>                    
        
       

    

   <div class="container">
<div class="row">
<div class="col-md-10 ">
<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>index.php/update/uprof">
<fieldset>


<!-- Text input-->




<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Name</label>  
  <div class="col-md-4">
 <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-user">
        </i>
       </div>
       <input id="Name" name="Name" type="text" placeholder="Name" value="<?php foreach($record as $row){echo $row->Name;}?>" class="form-control input-md">
      </div>

    
  </div>
    </div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="gender">Gender</label>  
  <div class="col-md-4">

  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-male"></i>
        
       </div>
       <input id="Gender" name="Gender" type="text" placeholder="Gender" class="form-control input-md" value="<?php foreach($record as $row){echo $row->Gender;}?>">
      </div>
  
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="Upload photo">Upload photo</label>
  <div class="col-md-4">
    <input name="fileToUpload" value="<?php foreach($record as $row){ echo $row->DP;}?>" id="fileToUpload" class="input-file" type="file">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-envelope-o"></i>
        
       </div>
    <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" value="<?php foreach($record as $row){echo $row->email;}?>">
    
      </div>
  
  </div>
</div>

    
   
    
   


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dob">Date Of Birth</label>  
  <div class="col-md-4">

  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-birthday-cake"></i>
        
       </div>
       <input id="dob" name="dob" type="text" placeholder="Date Of Birth" class="form-control input-md" value="<?php foreach($record as $row){echo $row->dob;}?>">
      </div>
  
    
  </div>
</div>







<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Year">Year</label>  
  <div class="col-md-4">

  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-calendar"></i>
        
       </div>
       <input id="Year" name="Year" type="text" value="<?php foreach($details as $row){echo $row->Year;}?>" placeholder="Year" class="form-control input-md">
      </div>
  
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Branch">Branch</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-graduation-cap"></i>
        
       </div>
     <input id="Branch" name="Branch" type="text" value="<?php foreach($details as $row){echo $row->Branch;}?>" placeholder="Branch" class="form-control input-md">
      </div>
 
    
  </div>
</div>








<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Class">Class</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-graduation-cap"></i>
        
       </div>
     <input id="Class" name="Class" type="text" value="<?php foreach($details as $row){echo $row->Class;}?>" placeholder="Class" class="form-control input-md">
      </div>
 
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="YearofJoining">Year of joining</label>  
  <div class="col-md-4">

  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-calendar"></i>
        
       </div>
       <input id="YearofJoining" name="YearofJoining" value="<?php foreach($record as $row){echo $row->YearofJoining;}?>" type="text" placeholder="Year of Joining" class="form-control input-md">
      </div>
  
    
  </div>
</div>


    
 <!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Skills">Skills</label>
  <div class="col-md-4">                     
    <textarea class="form-control" value="<?php foreach($details as $row){echo $row->Skills;}?>"  rows="10"  id="Skills" name="Skills" placeholder="Skills"><?php foreach($details as $row){echo $row->Skills;}?></textarea>
  </div>
</div>
    
    

    
    
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="MiniPro">Mini Project</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-clock-o"></i>
        
       </div>
    <input id="MiniPro" name="MiniPro" value="<?php foreach($details as $row){echo $row->MiniPro;}?>" type="text" placeholder="Miniproject Topic " class="form-control input-md">
    
    
      </div>
 
  </div>
</div>
    
    
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="MiniProO">Overview</label>
  <div class="col-md-4">                     
    <textarea class="form-control" value="<?php foreach($details as $row){echo $row->MiniProO;}?>" rows="10"  id="MiniProO" name="MiniProO" placeholder="Mini Project Overview"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Sem">Seminar</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-clock-o"></i>
        
       </div>
    <input id="Sem" name="Sem" value="<?php foreach($details as $row){echo $row->Sem;}?>" type="text" placeholder="Seminar Topic " class="form-control input-md">
    
    
      </div>
 
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="SemO">Overview</label>
  <div class="col-md-4">                     
    <textarea class="form-control" value="<?php foreach($details as $row){echo $row->SemO;}?>"  rows="10"  id="SemO" name="SemO" placeholder="Seminar Overview"></textarea>
  </div>
</div>
   
    <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="MainPro">Main Project</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-clock-o"></i>
        
       </div>
    <input id="MainPro" name="MainPro" value="<?php foreach($details as $row){echo $row->MainPro;}?>" type="text" placeholder="Main Project Topic " class="form-control input-md">
    
    
      </div>
 
  </div>
</div>
    
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="MainProO">Overview</label>
  <div class="col-md-4">                     
    <textarea class="form-control" rows="10" value="<?php foreach($details as $row){echo $row->MainProO;}?>"  id="MainProO" name="MainProO" placeholder="Main Project Overview"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Company">Company</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-clock-o"></i>
        
       </div>
    <input id="Company" name="Company" value="<?php foreach($details as $row){echo $row->Company;}?>" type="text" placeholder="Company " class="form-control input-md">
    
    
      </div>
 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Designation">Designation</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-clock-o"></i>
        
       </div>
    <input id="Designation" value="<?php foreach($details as $row){echo $row->Designation;}?>" name="Designation" type="text" placeholder="Designation" class="form-control input-md">
    
    
      </div>
 
  </div>
</div>
    






<div class="form-group">
  <label class="col-md-4 control-label" ></label>  
  <div class="col-md-4">
  <button name="sub" value="<?php foreach($record as $row){ echo $row->DP;}?>" class="btn btn-lg btn-primary btn-block" type="submit"> Submit</button>
  
    
  </div>
</div>

</fieldset>
</form>






   </div>
   <div class="col-md-2 hidden-xs">
<img src="<?php foreach($record as $row){ echo $row->DP;}?>" class="img-responsive img-thumbnail ">
  </div>
    <!-- jQuery Version 1.11.1 -->
    <script src="<?php echo base_url(); ?>assets/assets/js/jquery-1.11.1.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/assets/js/jquery.min.js"></script>
    
   

</body>

</html>
