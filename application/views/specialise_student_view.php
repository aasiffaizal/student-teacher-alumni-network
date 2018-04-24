
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
    
    

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }

    .othertop{margin-top:10px;}
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

   <div class="container">
<div class="row">
<div class="col-md-10 ">
<form class="form-horizontal" name="splformstu" action="<?php echo base_url();?>index.php/register/student/<?php print_r($username)?>"  role="form" method="post">
<fieldset>

<!-- Form Name -->
<legend>Student form requirement</legend>

<!-- Text input-->




<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Name</label>  
  <div class="col-md-4">
 <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-user">
        </i>
       </div>
       <input id="Name" name="Name" type="text" value="<?php print_r($Name);?>" class="form-control input-md">
      </div>

    
  </div>

  
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">Username</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-envelope-o"></i>
        
       </div>
    <input id="username" name="username" type="text" value="<?php print_r($username)?>" class="form-control input-md">
    
      </div>
  
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Year">Year</label>  
  <div class="col-md-4">

  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-birthday-cake"></i>
        
       </div>
       <input id="Year" name="Year"  type="text" placeholder="Year" class="form-control input-md">
      </div>
  
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Year">Branch</label>  
  <div class="col-md-4">

  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-birthday-cake"></i>
        
       </div>
       <input id="Branch" name="Branch"  type="text" placeholder="Branch" class="form-control input-md">
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
     <input id="Class" name="Class" type="text" placeholder="Class" class="form-control input-md">
      </div>
 
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Skills">Skills </label>
  <div class="col-md-4">                     
    <textarea class="form-control" rows="10" placeholder="Skills" id="Skills" name="Skills"></textarea>
  </div>
</div>



    
    
   
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="MinPro">Mini Project</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-clock-o"></i>
        
       </div>
    <input id="MinPro" name="MinPro" type="text" placeholder="Mini Project Topic " class="form-control input-md">
    
    
      </div>
 
  </div>
</div>
    
    
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="MinProO">Overview</label>
  <div class="col-md-4">                     
    <textarea class="form-control" rows="10" placeholder="Mini Project Overview" id="MinProO" name="MinProO"></textarea>
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
    <input id="Sem" name="sem" type="text" placeholder="Seminar Topic " class="form-control input-md">
    
    
      </div>
 
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="SemO">Overview</label>
  <div class="col-md-4">                     
    <textarea class="form-control" rows="10"  id="SemO" name="SemO" placeholder="Seminar Overview"></textarea>
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
    <input id="MainPro" name="MaiPro" type="text" placeholder="Main Project Topic " class="form-control input-md">
    
    
      </div>
 
  </div>
</div>
    
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="MainProO">Overview</label>
  <div class="col-md-4">                     
    <textarea class="form-control" rows="10"  id="MainProO" name="MainProO" placeholder="Main Project Overview"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Company">Company</label>  
  <div class="col-md-4">

  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-birthday-cake"></i>
        
       </div>
       <input id="Company" name="Company"  type="text" placeholder="Company" class="form-control input-md">
      </div>
  
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Designation">Designation</label>  
  <div class="col-md-4">

  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-birthday-cake"></i>
        
       </div>
       <input id="Designation" name="Designation"  type="text" placeholder="Designation" class="form-control input-md">
      </div>
  
    
  </div>
</div>


    





<div class="form-group">
  <label class="col-md-4 control-label" ></label>  
  <div class="col-md-4">
  <button class="btn btn-lg btn-primary btn-block" type="submit"> Submit</button>
  
    
  </div>
</div>

</fieldset>
</form>
</div>
<div class="col-md-2 hidden-xs">
<img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail ">
  </div>


</div>
   </div>
    <!-- jQuery Version 1.11.1 -->
    <script src="<?php echo base_url(); ?>assets/assets/js/jquery-1.11.1.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bootstrapuser/js/bootstrap.min.js"></script>

</body>

</html>

