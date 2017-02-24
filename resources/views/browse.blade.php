@extends('layout.master')

<style>
.container{
  max-width:1000px;
}
.container-fluid{
  max-width: 1000px;
}
 li{
  list-style-type: none;
}
h2{margin-left:8px;}

.input-group{
  width: 300px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
}
.content-idea{
  background-color:#fff; 
  padding:35px 40px 45px 40px; 
  border:none
}
.populer li{
  margin-bottom:5px;
}
.trending{
  padding:10px;
}
.btn-default{
  border:none !important;
  background-color: none!important;
}
.col-sm-12{
  margin-bottom:20px;
}

</style>

@section('content')

<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color:#fff; font-family: 'Madita'; font-size:25px;" >Bagidelo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
<form class="navbar-form navbar-left">
  <div class="input-group">
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
    



<div class="container" style="padding-top:100px; margin:0 auto;">    
  <div class="row">
    <div class="col-sm-2">
     <ul class="menu-sidebar" style="background-color: none; padding: 20px;">
     <li><a href=""><span class="glyphicon glyphicon-home" style="padding:10px;">  Home</span></a></li>
     <li><a href=""><span class="glyphicon glyphicon-user" style="padding:10px;">  Browse</span></a></li>
     <li><a href=""><span class="glyphicon glyphicon-cog" style="padding:10px;">  Team</span></a></li>
     <li><a href=""><span class="glyphicon glyphicon-log-out" style="padding:10px;">  logout</span></a></li>
 </ul>
        
        </div>
    <div class="col-sm-7">
        <div class="row">
        <div class="col-sm-12 text-left">
        <div class="content-idea" style="background-color:#fff; padding:35px 40px 45px 40px; border:none;">
        <div class="col-md-1">
            <img src="{{asset('img/gua.png')}}" class="img-circle" width="55" height="55" style="margin-left:-15px;">
            </div>
        <div class="col-md-10">
            <h2> Weekend Mengajar</h2>
              </div>
              <div class="col-md-1">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="border;none;">
                      <span class="glyphicon glyphicon-option-horizontal"></span>
                    </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                           <li><a href="#">Watch</a></li>
                           <li><a href="#">Edit</a></li>
                           <li><a href="#">Delete</a></li>
                           <li role="separator" class="divider"></li>
                           <li><a href="#">Separated link</a></li>
                         </ul>
              </div>
          </div>
            <p> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            <a href=""><span class="label label-default" style="padding: 5px;">Education</span></a>
            <a href=""><span class="label label-default" style="padding: 5px;">Website<span></a>
            <a href=""><span class="label label-default" style="padding: 5px;">Aplikasi</span></a>


            <hr>
  <div class="col-md-9">
  <div class="icon-content" style="">
  </div>
  </div>
   <div class="col-md-3">
   <div class="icon-wanna" >
        <button class="btn btn-danger">I wanna do this !</button>
        </div>
        </div>
        </div>

      </div>
        </div>


        <div class="row">
        <div class="col-sm-12 text-left">
      
        <div class="content-idea" style="background-color:#fff; padding:40px; border:none; margin-bottm:10px;">
        <div class="col-md-1">
            <img src="{{asset('img/heri.png')}}" class="img-circle" width="55" height="55" style="margin-left:-15px;">
            </div>
        <div class="col-md-11">
            <h2>Pameran Gallery</h2>
              </div>
            <p> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            <a href=""><span class="label label-default" style="padding: 5px;">Education</span></a>
            <a href=""><span class="label label-default" style="padding: 5px;">Website<span></a>
            <a href=""><span class="label label-default" style="padding: 5px;">Aplikasi</span></a>
            <hr>
    <div class="col-md-9">
      <div class="icon-content" style="">
         </div>
      </div>
   <div class="col-md-3">
   <div class="icon-wanna" >
        <button class="btn btn-danger">I wanna do this !</button>
    </div>
        </div>
        
        </div>
      </div>
        </div>
         
    </div>
    <div class="col-sm-3 text-left">
    <div class="panel">
      <div class="trending" style="background-color: #fff;">    
         <h4 style="text-align:left; margin-left:40px;">Popular Ideas</h4>
         <ul class="populer">
         <li><a href="">Weekend mengajar</a></li>
         <li><a href="">Weekend mengaji</a></li>
         <li><a href="">Aplikasi menabung</a></li>
         <li><a href="">Website responsive</a></li>
         <li><a href="">Downhill bareng</a></li>
         </ul>
         </div>
      </div>   
      </div>  
</div>
</div>



@endsection