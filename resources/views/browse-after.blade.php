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
.menu-sidebar img{
  height:14px;
  margin-right:10px;


}
.menu-sidebar li{padding: 10px;
 text-align:left;

}
ul{
  padding:0;
}
 li{
  list-style-type: none;
  font-size:14px;
  font-family: 'Helvetica';
}
li:hover{
  background-color: #f9f9f9;
  color:#aaa;
}

.input-group{
  max-width: 400px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
}
.content-idea h2{margin-left:8px;
color:#dd5f4c;}

.content-idea{
  background-color:#f9f9f9; 
  padding:35px 40px 45px 40px; 
  border:none;
  margin-bottom:20px;
  border-radius:5px;
}

.content-idea p{
font-size: 12pt;
padding-bottom: 20px;

}

.create-idea{
 padding:20px 20px;
 border-radius:5px;
 background-color: #dd5f4c; 
 color:#fff;
 margin-bottom: 20px;
}
.icon-content li{
  display: inline;
  
}
.footer{
  text-align: right;
}
.footer li{
  display: inline;
  padding:5px;
  
}
.populer{

  border-radius:5px;
}
.populer li{
  padding:5px;
}

.btn-default{
  border:none !important;
  background-color: #f9f9f9!important;
  color:#aaa;
}
.col-sm-12{
  margin-bottom:20px;
}
.panel{
  border:none;
  box-shadow: none !important;
  -webkit-box-shadow: none !important;
  border-radius:10px;
}
.pull-left{
  padding:0px !important;

}
.navbar-nav i{
  font-size: 15pt;
}
.navbar-nav a:hover{
  background-color: #fff !important;

}

.navbar-nav .btn i:hover{
  color:black;
}
.navbar-header{
   padding-left: 10px;
}

p{
  font-size:12pt;
}
.dropdown-menu:before{

    position: absolute;
    content: '';
    display: block;
    position: absolute;
    top: -10px;
    left: 120px;
    border-bottom: solid 10px #fff;
    border-left: solid 10px transparent;
    border-right: solid 10px transparent;
}
.dropdown-menu {
  border-color:#f9f9f9 !important;
  box-shadow:none!important;
}
.dropdown-menu li a{
  color:#aaa!important;
}
</style>

@section('content')

<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar" style="background-color: #aaa;"></span>
        <span class="icon-bar" style="background-color: #aaa"></span>
        <span class="icon-bar" style="background-color: #aaa;"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="padding: 10px;"><img src="{{asset('img/logogram.png')}}" /></a>
      <a class="navbar-brand" href="#" style="font-family: 'Madita'; color:#dd5f4c; font-size:16pt;"><b>Bagidelo</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
<form class="navbar-form navbar-left" >
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1" style="border:none; background-color: #f9f9f9; "><img src="{{asset('/img/img/search.svg')}}" height="14px"></span>
  <input type="text" class="form-control" placeholder="search idea and team.." aria-describedby="basic-addon1" style="background-color: #F9f9f9; border:none; box-shadow: none;">
</div>
</form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><img src="{{asset('/img/img/post.svg')}}" height="25px"></a></li>
        <li><a href="#"><img src="{{asset('/img/img/notif.svg')}}" height="25px"></a></li>
        <li><div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="padding:15px;">
                 <li><img src="{{asset('/img/img/user.svg')}}" height="25px"></button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#">Sofyan Syah</a></li>
                      <li><a href="#">Account Setting</a></li>
                      <li><a href="#">Message</a></li>
                      <li><a href="#">Log Out</a></li>
                    </ul>
              </div>   </li>  

      </ul>
    </div>
  </div>
</nav>
    
<div class="container" style="padding-top:30px; margin:0 auto;">    
  <div class="row">
    <div class="col-sm-3">
    <div class="panel">
     <ul class="menu-sidebar">
         <li><a href=""><img src="{{asset('/img/img/home.svg')}}"> Home</a></li>
         <li><a href=""><img src="{{asset('/img/img/browse.svg')}}"> Browse Ideas</a></li>
         <li><a href=""><img src="{{asset('/img/img/team.svg')}}"> My Team</a></li>
         <li><a href=""><img src="{{asset('/img/img/events.svg')}}"> Events</a></li>
         <li><a href=""><img src="{{asset('/img/img/compets.svg')}}"> Competition</a></li>
    </ul>
    </div> 
  </div>

    <div class="col-md-7">
      <div class="create-idea">
        <div class="row"> 
            <div class="col-md-3">
              <img src="{{asset('img/nadia.png')}}" width="120px" class="img-rounded" />
            </div>
            <div class="col-md-9 text-left">
            <h2 style="margin-top:0;">Lorem ipsum dolor sit amet</h2>
              <p style="text-align: justify;"> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..."</p><br>  
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
                <h2 style="padding:0px; margin:0px;">Weekend Mengajar</h2>
                <p style="font-size: 10pt;">Ideator by<a href="" style="color:#dd5f4c;"> Sofyan</a><i> 2 Days ago</i></p>
              </div>
                <p> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            <hr>
            <div class="col-md-9 pull-left">
              <ul class="icon-content">
                 <li><img src="{{asset('/img/img/love.svg')}}" height="20px"> 10</li>
                 <li><img src="{{asset('/img/img/comment.svg')}}" height="20px"> 25</li>
                 <li><img src="{{asset('/img/img/user.svg')}}" height="20px"> 12</li>
            </ul>
              
            </div>
            <div class="col-md-3 pull-right">
              <div class="dropdown" style="float:right;">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="border;none;">
                  <span class="glyphicon glyphicon-option-horizontal"></span></button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#">Bookmark idea</a></li>
                      <li><a href="#">Report idea</a></li>
                      <li><a href="#">Editidea</a></li>
                      <li><a href="#">Delete idea</a></li>
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
                <img src="{{asset('img/heri.png')}}" class="img-circle" width="55" height="55" style="margin-left:-15px;">
              </div>
              <div class="col-md-10" style="padding:0px;">
                <h2 style="padding:0px; margin:0px;"> Bersepeda ke Monas</h2>
                <p style="font-size: 10pt;">Ideator by<a href=""> Heri</a><i> 2 Days ago</i></p>
              </div>
                <p> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            <hr>
            <div class="col-md-9 pull-left">
              <ul class="icon-content">
                 <li><i class="glyphicon glyphicon-heart"></i> 10</li>
                 <li><i class="glyphicon glyphicon-comment"></i> 25</li>
                 <li><i class="glyphicon glyphicon-user"></i> 12</li>
            </ul>
              
            </div>
            <div class="col-md-3 pull-right">
              <div class="dropdown" style="float:right;">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="border;none;">
                  <span class="glyphicon glyphicon-option-horizontal"></span></button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#">Bookmark idea</a></li>
                      <li><a href="#">Report idea</a></li>
                      <li><a href="#">Editidea</a></li>
                      <li><a href="#">Delete idea</a></li>
                    </ul>
              </div>     
         </div>
        </div>


          <div class="col-md-12 text-center">
            <button class="btn btn-danger">Learn More</button>
            </div>
        </div>
      </div>
     </div>         
   

    <div class="col-sm-2 text-left">
      <div class="panel">     
        <ul class="populer"><h4 style="padding-left: 4px; margin-top: -5px;"><img src="{{asset('/img/img/star.svg')}}" width="15px" style="vertical-align: top;"></span> Populer Idea</h4>
         <li><a href="">Laundry Online Application</a></li>
         <li><a href="">Weekend Mengajar</a></li>
         <li><a href="">Bersepeda ke Monas</a></li>
         <li><a href="">Website responsive</a></li>
         <li><a href="">Downhill bareng</a></li>
         <li><a href="">Kopdar komunitas mural</a></li>
         <li><a href="">Diskusi ukm di bogor</a></li>
        </ul>
      </div>   
    </div> 
  </div>
</div>
</br>

<div class="panel-footer">
<ul class="footer" style="padding:0px;">
  <li style="float:left;">&copy 2017 Bagidelo. All right Reserved</li>
  <li><a href="">About Us</a></li>
  <li><a href="">Contact</a></li>
  <li><a href="">Help</a></li>
  <li><a href="">Terms</a></li>
  <li><a href="">Privacy</a></li>
  <li><a href="">Advertisment</a></li>
  <li><a href="">Career</a></li>
  </ul>

  
  
  </div>







@endsection