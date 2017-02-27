@extends('layout.master')

<style>


.container{
  max-width:1100px;
}
.container-fluid{
  max-width: 1100px;
}

.menu-sidebar{padding: 0;
  background-color: none;
  max-width:250px;

}
.menu-sidebar li{padding: 5px;
 text-align:left;

}
ul{
  padding:0;
}
 li{
  list-style-type: none;
  font-size:16px;
}
li:hover{
  background-color: #f9f9f9;
  color:#aaa;
}
h2{margin-left:8px;}

.input-group{
  width: 300px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
}
.content-idea{
  background-color:#f9f9f9; 
  padding:35px 40px 45px 40px; 
  border:none;
  margin-bottom:20px;
  border-radius:5px;
}
.icon-content li{
  display: inline;
  padding:5px;
}
.populer{
  padding:0px;
}
.populer li{
  padding:5px;
}

.btn-default{
  border:none !important;
  background-color: #f9f9f9!important;
}
.col-sm-12{
  margin-bottom:20px;
}
.panel{
  border: none;
  box-shadow: none !important;
  -webkit-box-shadow: none !important;
}
.pull-left{
  padding:0px !important;

}

</style>

@section('content')

<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color:#dd5f4c; font-family: 'Madita'; font-size:25px;" >Bagidelo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
<form class="navbar-form navbar-left" >
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search" style="background-color:#f9f9f9; border:none;">
  </div>
</form>
      <ul class="nav navbar-nav navbar-right">
        <a href="#"><button class="btn btn-default navbar-btn" style="border:none; color:#aaa;">Sign In</button></a>
      </ul>
    </div>
  </div>
</nav>
    
<div class="container" style="padding-top:30px; margin:0 auto;">    
  <div class="row">
    <div class="col-sm-2">
    <div class="panel">
     <ul class="menu-sidebar">
         <li><a href=""><span class="glyphicon glyphicon-home"> Home</span></a></li>
         <li><a href=""><span class="glyphicon glyphicon-user"> Browse</span></a></li>
         <li><a href=""><span class="glyphicon glyphicon-cog"> Teamwork</span></a></li>
         <li><a href=""><span class="glyphicon glyphicon-log-out"> Event</span></a></li>
    </ul>
    </div> 
  </div>

    <div class="col-md-7">
        <div class="row">
          <div class="col-md-12 text-left">
            <div class="content-idea">
              <div class="col-md-2" style="float:left;">
                <img src="{{asset('img/gua.png')}}" class="img-circle" width="55" height="55" style="margin-left:-15px;">
              </div>
              <div class="col-md-10" style="padding:0px;">
                <h2 style="padding:0px; margin:0px;"> Weekend Mengajar</h2>
                <p style="font-size: 10pt; padding-left:10px;"><i>Post at 2 March 2017</i></p>
              </div>
                <p> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            <hr>
            <div class="col-md-9 pull-left">
              <ul class="icon-content">
                 <li><i class="glyphicon glyphicon-heart"></i></li>
                 <li><i class="glyphicon glyphicon-user"></i></li>
                <li><i class="glyphicon glyphicon-comment"></i></li>
            </ul>
              
            </div>
            <div class="col-md-3 pull-right">
              <div class="dropdown" style="float:right;">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="border;none;">
                  <span class="glyphicon glyphicon-option-horizontal"></span></button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#">Bookmarsk</a></li>
                      <li><a href="#">Edit</a></li>
                      <li><a href="#">Delete</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
              </div>     
         </div>
        </div>
      </div>
     </div>

<div class="row">
          <div class="col-md-12 text-left">
            <div class="content-idea">
              <div class="col-md-2" style="float:left;">
                <img src="{{asset('img/gua.png')}}" class="img-circle" width="55" height="55" style="margin-left:-15px;">
              </div>
              <div class="col-md-10" style="padding:0px;">
                <h2 style="padding:0px; margin:0px;"> Weekend Mengajar</h2>
                <p style="font-size: 10pt; padding-left:10px;">Post at November</p>
              </div>
                <p> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            <hr>
            <div class="col-md-9 pull-left">
              <ul class="icon-content">
                 <li><i class="glyphicon glyphicon-user"></i></li>
                 <li><i class="glyphicon glyphicon-user"></i></li>
                <li><i class="glyphicon glyphicon-user"></i></li>
            </ul>
              
            </div>
            <div class="col-md-3 pull-right">
              <div class="dropdown" style="float:right;">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="border;none;">
                  <span class="glyphicon glyphicon-option-horizontal"></span></button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#">Bookmarsk</a></li>
                      <li><a href="#">Edit</a></li>
                      <li><a href="#">Delete</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
              </div>     
         </div>
        </div>
      </div>
     </div>         
    </div>

    <div class="col-sm-3 text-left">
      <div class="panel">     
        <ul class="populer"><h4 style="padding-left: 4px;">Populer Idea</h4>
         <li><a href="">Weekend mengajar</a></li>
         <li><a href="">Weekend mengaji</a></li>
         <li><a href="">Aplikasi menabung</a></li>
         <li><a href="">Website responsive</a></li>
         <li><a href="">Downhill bareng</a></li>
        </ul>
      </div>   
    </div> 
    <div class="col-sm-3 text-left">
      <div class="panel">     
        <ul class="populer"><h4 style="padding-left: 4px;">Populer Idea</h4>
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



@endsection