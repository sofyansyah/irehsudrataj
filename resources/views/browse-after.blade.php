@extends('layout.master')

<style>


.container{
  max-width:900px;
}
.container-fluid{
  max-width: 900px;
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
.navbar-form {
  width: 100%!important;
  max-width: 250px!important;
}
.input-group{
  width: 100%;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
}
.content-idea h2{margin-left:8px;
color:#dd5f4c;}

.content-idea{
  background-color:#fff; 
  border: 0.5px solid #f2f2f2;
  padding:15px; 
  margin-bottom:20px;
}

.content-idea p{
font-size: 14px;

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
      <a class="navbar-brand" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 105.76 27.71" height="25"><defs><style>.cls-1{fill:#dd5f4c;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M2,5.11q-.57.31-1.06.65t-.7.51L0,6.44V2.67l.36-.26a10.53,10.53,0,0,1,1.05-.58,15.94,15.94,0,0,1,1.69-.74A14,14,0,0,1,5.35.51,15.3,15.3,0,0,1,8.15.26a9.83,9.83,0,0,1,5.79,1.43,4.87,4.87,0,0,1,2,4.22,4.93,4.93,0,0,1-2.41,4.37A4.77,4.77,0,0,1,16.83,15a5.51,5.51,0,0,1-2.29,4.7,10.44,10.44,0,0,1-6.32,1.69,18.52,18.52,0,0,1-3.46-.3,8.75,8.75,0,0,1-2.16-.61L2,20.13ZM6,3.69V9.06H8.63a3.62,3.62,0,0,0,2.53-.72,2.93,2.93,0,0,0,.77-2.23q0-2.61-3.95-2.61A11.14,11.14,0,0,0,6,3.69Zm0,8.37v6a11,11,0,0,0,2.16.23,6.26,6.26,0,0,0,3.56-.8A2.82,2.82,0,0,0,12.8,15a2.62,2.62,0,0,0-.92-2.21,4.9,4.9,0,0,0-3-.71Z"/><path class="cls-1" d="M20,9.34A6.85,6.85,0,0,1,25.4,7a10.31,10.31,0,0,1,2.74.33A4.46,4.46,0,0,1,29.72,8l.4.31v9q0,1.08,1,1.08a2.3,2.3,0,0,0,1.53-.7,5.68,5.68,0,0,0,1.16-1.41l.37-.71v3.49l-.17.24a5.73,5.73,0,0,1-.5.54,5.26,5.26,0,0,1-.84.68,5.06,5.06,0,0,1-1.19.54,4.9,4.9,0,0,1-1.53.24,3.06,3.06,0,0,1-2.87-1.45,4.29,4.29,0,0,1-3.38,1.45,5.39,5.39,0,0,1-4.24-1.7A6.57,6.57,0,0,1,18,15.1,8.43,8.43,0,0,1,20,9.34Zm5.86,8.28a3.09,3.09,0,0,0,.69-2.17v-5a5.78,5.78,0,0,0-1.19-.11q-3.83,0-3.83,4.68,0,3.32,2.36,3.32A2.56,2.56,0,0,0,25.85,17.62Z"/><path class="cls-1" d="M33.85,9a5.26,5.26,0,0,1,4.27-2,4.68,4.68,0,0,1,3,.94V7.41h3.55v9.68A10,10,0,0,0,46.3,16a8.12,8.12,0,0,0,1.08-1l.31-.37v3.21a8.61,8.61,0,0,1-3,1.85v.34a8.16,8.16,0,0,1-1.83,5.49,6.28,6.28,0,0,1-5,2.14,4.79,4.79,0,0,1-3.24-1,3.5,3.5,0,0,1-1.16-2.8,4.3,4.3,0,0,1,2.44-3.83q-3.6-1.56-3.6-6A7.66,7.66,0,0,1,33.85,9Zm7.25,9.14V13a3.15,3.15,0,0,0-.71-2.21A2.43,2.43,0,0,0,38.52,10a2.36,2.36,0,0,0-2,1.05A4.88,4.88,0,0,0,35.76,14a4.13,4.13,0,0,0,1.15,3.22,4.43,4.43,0,0,0,3.08,1A7.91,7.91,0,0,0,41.1,18.17Zm-1,5.81a5.18,5.18,0,0,0,1-3.11q-4.37.88-4.37,2.9A1.14,1.14,0,0,0,38,25,2.63,2.63,0,0,0,40.12,24Z"/><path class="cls-1" d="M47.23,2.8a2.38,2.38,0,0,1,3.12,0,2.2,2.2,0,0,1,.57,1.6A2.29,2.29,0,0,1,50.35,6a2.05,2.05,0,0,1-1.56.6A2,2,0,0,1,47.25,6a2.3,2.3,0,0,1-.58-1.59A2.2,2.2,0,0,1,47.23,2.8ZM47,7.41h3.61v9.94q0,1.08,1,1.08a2.3,2.3,0,0,0,1.53-.7,5.69,5.69,0,0,0,1.16-1.41l.37-.71v3.49l-.17.24a5.58,5.58,0,0,1-.5.54,5.23,5.23,0,0,1-.84.68,5,5,0,0,1-1.19.54,4.9,4.9,0,0,1-1.53.24,3.31,3.31,0,0,1-2.6-1,3.9,3.9,0,0,1-.87-2.7Z"/><path class="cls-1" d="M64.86,17.35q0,1.08,1,1.08a2.3,2.3,0,0,0,1.53-.7,5.68,5.68,0,0,0,1.16-1.41l.37-.71v3.49l-.17.24a5.73,5.73,0,0,1-.5.54,5.26,5.26,0,0,1-.84.68,5.06,5.06,0,0,1-1.19.54,4.9,4.9,0,0,1-1.53.24,3.11,3.11,0,0,1-2.87-1.42,4.07,4.07,0,0,1-3.38,1.42,5.38,5.38,0,0,1-4.23-1.72,6.54,6.54,0,0,1-1.53-4.53,8.38,8.38,0,0,1,2-5.73,6.81,6.81,0,0,1,5.39-2.3c.28,0,.67,0,1.16.06V.57h3.58Zm-4.24.44a3.48,3.48,0,0,0,.67-2.4V10.11A6.39,6.39,0,0,0,60.23,10a3.65,3.65,0,0,0-2.85,1.26,5.61,5.61,0,0,0-1.12,3.82q0,3.58,2.36,3.58A2.43,2.43,0,0,0,60.61,17.79Z"/><path class="cls-1" d="M80,18.92a10.53,10.53,0,0,1-.85.65,9.58,9.58,0,0,1-1.38.82,10.35,10.35,0,0,1-1.83.65,8.49,8.49,0,0,1-2.21.3,6.28,6.28,0,0,1-4.88-1.93,7.25,7.25,0,0,1-1.76-5.08,7.69,7.69,0,0,1,1.8-5.21A6,6,0,0,1,73.63,7a4.41,4.41,0,0,1,3.24,1.12A3.91,3.91,0,0,1,78,11.07a4.88,4.88,0,0,1-.57,2.36,5.07,5.07,0,0,1-1.55,1.75,9.67,9.67,0,0,1-2.12,1.14A12.71,12.71,0,0,1,71.3,17a3.47,3.47,0,0,0,2.92,1.11,6,6,0,0,0,2.06-.37,6.55,6.55,0,0,0,1.7-.89,14.52,14.52,0,0,0,1.25-1.05,6.12,6.12,0,0,0,.81-.89l.28-.37v4.12Zm-9.4-4.33a6.92,6.92,0,0,0,3.14-1.21,2.68,2.68,0,0,0,1.18-2.2,1.47,1.47,0,0,0-.38-1.11,1.39,1.39,0,0,0-1-.37,2.47,2.47,0,0,0-2.09,1.21,6,6,0,0,0-.84,3.42Z"/><path class="cls-1" d="M81,3.85Q83,0,86.29,0,90,0,90,4.46a12.63,12.63,0,0,1-2,7,16.57,16.57,0,0,1-4.91,5,2.63,2.63,0,0,0,2.7,1.85,5.23,5.23,0,0,0,2-.38A6,6,0,0,0,89.3,17a11.58,11.58,0,0,0,1.15-1.08A8.82,8.82,0,0,0,91.2,15l.23-.4v3.66l-.26.33a7.92,7.92,0,0,1-.75.74,9.55,9.55,0,0,1-1.22.94,7.15,7.15,0,0,1-1.63.74,6.41,6.41,0,0,1-2,.33,5.85,5.85,0,0,1-4.88-2A9.18,9.18,0,0,1,79,13.48,21,21,0,0,1,81,3.85ZM83.69,6.1a21.17,21.17,0,0,0-1.09,7.07,11.55,11.55,0,0,0,2.91-3.7,10.72,10.72,0,0,0,1.18-5q0-1.31-.74-1.31Q84.76,3.18,83.69,6.1Z"/><path class="cls-1" d="M102.33,18.34a6,6,0,0,1-5.59,3A6.36,6.36,0,0,1,92,19.49a7.17,7.17,0,0,1-1.8-5.21A7.41,7.41,0,0,1,92,9,6.24,6.24,0,0,1,96.73,7a6.53,6.53,0,0,1,4.7,1.77,7,7,0,0,1,1.89,5.27v.17a8.05,8.05,0,0,1-.11,1.48,7,7,0,0,0,1.35-.41,5.36,5.36,0,0,0,.92-.47l.28-.2v2.78A8.86,8.86,0,0,1,102.33,18.34Zm-5.58-6.5a3.05,3.05,0,0,1,2.06-1.14A2.46,2.46,0,0,0,96.9,10,2.92,2.92,0,0,0,94.59,11a4.87,4.87,0,0,0-.92,3.24,4.94,4.94,0,0,0,.91,3.22,2.86,2.86,0,0,0,2.3,1.09,3.07,3.07,0,0,0,2-.62,4.25,4.25,0,0,1-2.1-1.53A4,4,0,0,1,96,14.08,3.56,3.56,0,0,1,96.75,11.84Zm3.42,3.86a8.58,8.58,0,0,0,.17-1.53q0-1.14-.79-1.14a.71.71,0,0,0-.57.27,1.09,1.09,0,0,0-.23.72A1.66,1.66,0,0,0,100.17,15.7Z"/></g></g></svg>
      </a>
      <!-- <a class="navbar-brand" href="#" style="font-family: 'Madita'; color:#dd5f4c; font-size:16pt;"><b>Bagidelo</b></a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
<form class="navbar-form navbar-left" >
<div class="input-group"><!-- 
  <span class="input-group-addon" id="basic-addon1" style="border:none; background-color: #f9f9f9; "><img src="{{asset('/img/img/search.svg')}}" height="14px"></span> -->
  <input type="text" class="form-control" placeholder="search idea and team.." aria-describedby="basic-addon1" style="background-color: #F9f9f9; border: 1px solid #f2f2f2; box-shadow: none;">
</div>
</form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><img src="{{asset('/img/img/post.svg')}}" height="25px"></a></li>
        <li><a href="#"><img src="{{asset('/img/img/notif.svg')}}" height="25px"></a></li>
        <li><div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="padding:15px;">
                 <li><img style="border-radius:2px;" src="{{asset('/img/gua.png')}}" height="25px"></button>
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
    
<div class="container" style="margin:0 auto;">    
<!--   <div class="row">
    <div class="col-sm-2">
    <div class="panel">
     <ul class="menu-sidebar">
         <li><a href=""><img src="{{asset('/img/img/home.svg')}}"> Home</a></li>
         <li><a href=""><img src="{{asset('/img/img/browse.svg')}}"> Browse Ideas</a></li>
         <li><a href=""><img src="{{asset('/img/img/team.svg')}}"> My Team</a></li>
         <li><a href=""><img src="{{asset('/img/img/events.svg')}}"> Events</a></li>
         <li><a href=""><img src="{{asset('/img/img/compets.svg')}}"> Competition</a></li>
    </ul>
    </div> 
  </div> -->

    <div class="col-md-9">
      <!-- <div class="create-idea">
        <div class="row"> 
            <div class="col-md-3">
              <img src="{{asset('img/nadia.png')}}" width="120px" class="img-rounded" />
            </div>
            <div class="col-md-9 text-left">
            <h2 style="margin-top:0;">Lorem ipsum dolor sit amet</h2>
              <p style="text-align: justify;"> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..."</p><br>  
            </div>
          </div>
        </div> -->

              <div class="row">
               <div class="col-md-12 text-left">
                <div class="col-md-12 content-idea">

              <div class="col-md-1" style="float:left;">
                <img src="{{asset('img/gua.png')}}" width="32" height="32" style="border-radius: 2px; margin-left:-15px;">
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control" style="border-radius:0!important; background:none!important; border:none!important; box-shadow:none!important;padding: 0; font-size: 18px;" placeholder="Share idea to build community, create a stuff, hangout and build your awesome project" aria-describedby="basic-addon1" style="background-color: #F9f9f9; border: 1px solid #f2f2f2; box-shadow: none;">
                </div>
             </div>
            </div>
          </div>
    
        <div class="row">
          <div class="col-md-12 text-left">
            <div class="col-md-12 content-idea">
              <div class="col-md-1" style="float:left;">
                <img src="{{asset('img/gua.png')}}" width="32" height="32" style="border-radius: 2px; margin-left:-15px;">
              </div>
              <div class="col-md-9" style="padding:0px;">
                <h2 style="padding:0px; margin:0px;">Sofyan Syah</h2>
                <p style="font-size: 12px; color: bbb;">Jakarta, Indonesia</p>
              </div>
              <div class="col-md-2" style="padding:0px;">
              <p style="float:right;font-size:11px;margin-top: 10px;">3 Days Ago</p>
              </div>
              <div class="col-md-12" style="padding:0px;">
              <br/>
              <p>
              <b>Laundry Mobile Application</b>
              </p>
              <br/>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br/>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                
                <hr/>
                <div class="comment">
                <input type="text" class="form-control" style="border-radius:0!important; background:none!important; border:none!important; box-shadow:none!important;" placeholder="Write a comment..." aria-describedby="basic-addon1" style="background-color: #F9f9f9; border: 1px solid #f2f2f2; box-shadow: none;">
                </div>
            </div>
            <!-- <div class="col-md-9 pull-left">
              <ul class="icon-content">
                 <li><img src="{{asset('/img/img/love.svg')}}" height="20px"> 10</li>
                 <li><img src="{{asset('/img/img/comment.svg')}}" height="20px"> 25</li>
                 <li><img src="{{asset('/img/img/user.svg')}}" height="20px"> 12</li>
            </ul>
              
            </div> -->
            <div class="col-md-3 pull-right">
              <!-- <div class="dropdown" style="float:right;">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="border;none;">
                  <span class="glyphicon glyphicon-option-horizontal"></span></button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#">Bookmark idea</a></li>
                      <li><a href="#">Report idea</a></li>
                      <li><a href="#">Editidea</a></li>
                      <li><a href="#">Delete idea</a></li>
                    </ul>
              </div>  -->    
         </div>
        </div>
      </div>
     </div>
     <div class="row">
          <div class="col-md-12 text-left">
            <div class="col-md-12 content-idea">
              <div class="col-md-1" style="float:left;">
                <img src="{{asset('img/gua.png')}}" width="32" height="32" style="border-radius: 2px; margin-left:-15px;">
              </div>
              <div class="col-md-9" style="padding:0px;">
                <h2 style="padding:0px; margin:0px;">Sofyan Syah</h2>
                <p style="font-size: 12px;">Jakarta, Indonesia</p>
              </div>
              <div class="col-md-2" style="padding:0px;">
              <a href="/" class="participating">Participating</a>
              </div>
              <div class="col-md-12" style="padding:0px;">
              <br/>
              <p>
              <b>Laundry Mobile Application</b>
              </p>
              <br/>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br/>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                
                <hr/>
                <div class="comment">
                <input type="text" class="form-control" style="border-radius:0!important; background:none!important; border:none!important; box-shadow:none!important;" placeholder="Write a comment..." aria-describedby="basic-addon1" style="background-color: #F9f9f9; border: 1px solid #f2f2f2; box-shadow: none;">
                </div>
            </div>
            <!-- <div class="col-md-9 pull-left">
              <ul class="icon-content">
                 <li><img src="{{asset('/img/img/love.svg')}}" height="20px"> 10</li>
                 <li><img src="{{asset('/img/img/comment.svg')}}" height="20px"> 25</li>
                 <li><img src="{{asset('/img/img/user.svg')}}" height="20px"> 12</li>
            </ul>
              
            </div> -->
            <div class="col-md-3 pull-right">
              <!-- <div class="dropdown" style="float:right;">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="border;none;">
                  <span class="glyphicon glyphicon-option-horizontal"></span></button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#">Bookmark idea</a></li>
                      <li><a href="#">Report idea</a></li>
                      <li><a href="#">Editidea</a></li>
                      <li><a href="#">Delete idea</a></li>
                    </ul>
              </div>  -->    
         </div>
        </div>
      </div>
     </div>
     <div class="row">
          <div class="col-md-12 text-left">
            <div class="col-md-12 content-idea">
              <div class="col-md-1" style="float:left;">
                <img src="{{asset('img/gua.png')}}" width="32" height="32" style="border-radius: 2px; margin-left:-15px;">
              </div>
              <div class="col-md-9" style="padding:0px;">
                <h2 style="padding:0px; margin:0px;">Sofyan Syah</h2>
                <p style="font-size: 12px;">Jakarta, Indonesia</p>
              </div>
              <div class="col-md-2" style="padding:0px;">
              <a href="/" class="participating">Participating</a>
              </div>
              <div class="col-md-12" style="padding:0px;">
              <br/>
              <p>
              <b>Laundry Mobile Application</b>
              </p>
              <br/>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br/>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                
                <hr/>
                <div class="comment">
                <input type="text" class="form-control" style="border-radius:0!important; background:none!important; border:none!important; box-shadow:none!important;" placeholder="Write a comment..." aria-describedby="basic-addon1" style="background-color: #F9f9f9; border: 1px solid #f2f2f2; box-shadow: none;">
                </div>
            </div>
            <!-- <div class="col-md-9 pull-left">
              <ul class="icon-content">
                 <li><img src="{{asset('/img/img/love.svg')}}" height="20px"> 10</li>
                 <li><img src="{{asset('/img/img/comment.svg')}}" height="20px"> 25</li>
                 <li><img src="{{asset('/img/img/user.svg')}}" height="20px"> 12</li>
            </ul>
              
            </div> -->
            <div class="col-md-3 pull-right">
              <!-- <div class="dropdown" style="float:right;">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="border;none;">
                  <span class="glyphicon glyphicon-option-horizontal"></span></button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                      <li><a href="#">Bookmark idea</a></li>
                      <li><a href="#">Report idea</a></li>
                      <li><a href="#">Editidea</a></li>
                      <li><a href="#">Delete idea</a></li>
                    </ul>
              </div>  -->    
         </div>
        </div>
      </div>
     </div>

     </div>

   

    <div class="col-sm-3 text-left content-idea">
      <div class="panel">     
        <ul class="populer"><h4 style="padding-left: 4px; margin-top: -5px;">Popular Idea</h4>
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
<ul class="footer" style="padding:5px 0 10px; max-width: 990px;margin: 0 auto;">
  <li style="float:left;">&copy 2017 Bagidelo</li>
  <li><a href="">About Us</a></li>
  <li><a href="">Contact</a></li>
  <li><a href="">Help</a></li>
  <li><a href="">Terms</a></li>
  <li><a href="">Privacy</a></li>
  <li><a href="">Advertisment</a></li>
  </ul>

  
  
  </div>



@endsection