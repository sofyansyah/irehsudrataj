@extends('layout.master')
@section('content')

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Bagidelo</a>
    </div>
    <form class="navbar-form navbar-left">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>

<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        
        <img src="public/img/logo.jpg" class="img-circle" height="150" width="150" alt="Avatar"><br><br>
          <p>Lorem Ipsum</p>
      </div>
      <div class="well">
        <p>Skill</p>
        <p>
          <span class="label label-default">Photoshop</span>
          <span class="label label-primary">Illustrator</span>
          <span class="label label-success">After Effect</span>
          <span class="label label-info">PHP</span>
          <span class="label label-warning">Java Script</span>
          <span class="label label-danger">Android</span>
        </p>
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Ey!</strong></p>
        People are looking at your profile. Find out who.
      </div>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-7">
    <div class="row">
          
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body" style="height:200px; padding:0;">
            <img src="public/img/ava.jpeg" style="width:650px; height:200px;" />
              </div>
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
              <button type="button" class="btn btn-default btn-sm">
                <!--<span class="glyphicon glyphicon-thumbs-up"></span>-->Attach File
              </button>
                 <button type="button" class="btn btn-default btn-sm">
                <!--<span class="glyphicon glyphicon-thumbs-up"></span>-->Picture
              </button>   
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <img src="public/img/agita.png" class="img-circle" height="55" width="55" alt="Avatar">
            <p>Afita</p>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <img src="public/img/febi.png" class="img-circle" height="55" width="55" alt="Avatar">
            <p>Febi</p>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <img src="public/img/gua.png" class="img-circle" height="55" width="55" alt="Avatar">
              <p>Gua</p>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <img src="public/img/heri.png" class="img-circle" height="55" width="55" alt="Avatar">
            <p>heri</p>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>     
    </div>
    <div class="col-sm-2 well">
      <div class="thumbnail">
        <p>Upcoming Events:</p>
        <img src="public/img/smartphone.png" alt="Paris" width="400" height="300">
        <p><strong>Sarinah</strong></p>
        <p>Fri. 27 November 2016</p>
        <button class="btn btn-primary">Info</button>
      </div>      
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

@endsection