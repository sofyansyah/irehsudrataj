@extends('layout.master')

@section('content')

<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color:#fff; font-family: 'Madita';"">Bagidelo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
<form class="navbar-form navbar-left">
      <div class="input-group">
          <div class="input-group-btn">
          <button class="btn btn-default" type="submit" style="width:40px;">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
        <input type="text" class="form-control" placeholder="Search"> 
      </div>
    </form>
      <ul class="nav navbar-nav navbar-right">
        <a href="#"><button class="btn btn-danger navbar-btn" style="border:none; background-color:#c0392b;">Sign Up</button></a>
        <a href="#"><button class="btn btn-default navbar-btn" style="border:none; color:#c0392b">Sign In</button></a>
      </ul>
    </div>
  </div>
</nav>
    

<br/>

<div class="container text-center" style="margin-top:100px;">    
  <div class="row">
    <div class="col-sm-2">
      
        <img src="public/img/logo1.jpg" class="img-circle" height="150" width="150" alt="Avatar" /><br/></br>
          <p>Lorem Ipsum</p>
     
      <div class="well">
        <p>Lorem Ipsum</p>
        <p>
          <span class="label label-default">Photoshop</span>
          <span class="label label-primary">Illustrator</span>
          <span class="label label-success">After Effect</span>
          <span class="label label-info">PHP</span>
          <span class="label label-warning">Java Script</span>
          <span class="label label-danger">Java</span>
        </p>
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Lorem Ipsum</strong></p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vel risus eros.
      </div>
        <p>Lorem Ipsum</p>
        <div class="row">
        <div class="col-sm-12" style="text-align:left;">
        <img src="public/img/agita.png" class="img-circle" height="50" width="50" alt="Avatar"><br/>   
            </div></div><br>
        <p>Lorem Ipsum</p>
      <div class="row">
        <div class="col-sm-4">
        <img src="public/img/gua.png" class="img-circle" height="50" width="50" alt="Avatar"><br/>
          </div>
          <div class="col-sm-4">
         <img src="public/img/heri.png" class="img-circle" height="50" width="50" alt="Avatar">   
    </div>
           <div class="col-sm-4">
         <img src="public/img/febi.png" class="img-circle" height="50" width="50" alt="Avatar">
    </div>
        </div>
        <br>
           <div class="row">
        <div class="col-sm-4">
        <img src="public/img/wara.png" class="img-circle" height="50" width="50" alt="Avatar"><br/>
          </div>
          <div class="col-sm-4">
         <img src="public/img/rio.png" class="img-circle" height="50" width="50" alt="Avatar">
    </div>
           <div class="col-sm-4">
         <img src="public/img/nadia.png" class="img-circle" height="50" width="50" alt="Avatar">
    </div>
        </div>
        </div>

  
      
    <div class="col-sm-7">
        
    <!--<div class="row">   
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body" style="height:200px; padding:0;">
            <img src="public/img/ava.jpeg" style="width:650px; height:200px;" />
              </div>
            </div>
        </div>
        </div>-->
        
        <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left" style="border:none;">
            <ul class="nav nav-tabs">
			<li class="active">
            <a  href="#1" data-toggle="tab">Activity</a>
			</li>
            <li><a href="#2" data-toggle="tab">About Us</a>
                </li>
			<li><a href="#3" data-toggle="tab">Meeting</a>
			</li>
			<li><a href="#4" data-toggle="tab">Message</a>
			</li>
		</ul>             
          </div>
        </div>
      </div>
        
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <textarea class="form-control" rows="5" id="comment"></textarea><br>
              <button type="button" class="btn btn-default btn-sm">
                <!--<span class="glyphicon glyphicon-thumbs-up"></span>-->Update
              </button> 
            </div>
          </div>
        </div>
      </div>
        
      
      
      <div class="row">
        <div class="col-sm-3">
          <div class="thumbnail">
              <img src="public/img/gua.png" class="img-circle" height="80" width="80" alt="Avatar">
            </div><!-- /thumbnail -->    
            <p>Gua</p>
        </div>
        <div class="col-sm-9">
          <div class="panel panel-default">
              <div class="panel-heading">
                  <strong>gua</strong> <span class="text-muted" style="text-align:left;">update 5 days ago</span>
              </div>
              <div class="panel-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vel risus eros. Cras ac viverra mauris, nec ornare tortor. Cras euismod egestas neque a luctus. Phasellus dapibus convallis ligula, sed tempus lacus dignissim quis. Duis imperdiet ut odio ac consectetur. Proin non tortor lectus
              </div><!-- /panel-body -->
            </div><!-- /panel panel-default -->
          </div>
        </div>
      
      
        
    </div>
    <div class="col-sm-3">
<br><br>
      <div class="thumbnail">    
        <img src="public/img/peta.jpg" alt="Paris" width="400" height="400">
          <p>Lorem Ipsum</p>
        <!--<p><strong>Sarinah</strong></p>
        <p>Fri. 27 November 2016</p>
        <button class="btn btn-primary">Info</button>-->
      </div>     
     <!-- <div class="well" style="padding: 80px;">
        <p style="vertical-align:center;">Advertising in Here</p>
      </div>-->
</div>
</div>



@endsection