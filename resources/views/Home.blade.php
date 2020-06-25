<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{app("AppName")}}</title>
    <!-- fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"/>
    <!-- Roboto Font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet"/>
    <!-- Raleway Font-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,800&amp;display=swap" rel="stylesheet"/>
    <!-- Poppins Font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,900&amp;display=swap" rel="stylesheet"/>
    <!-- Metrophobic Font-->
    <link href="https://fonts.googleapis.com/css?family=Metrophobic&amp;display=swap" rel="stylesheet"/>
    <!-- Luckiest-->
    <link href="https://fonts.googleapis.com/css?family=Bangers|Luckiest+Guy&amp;display=swap" rel="stylesheet"/>
    <!-- Righteous-->
    <link href="https://fonts.googleapis.com/css?family=Righteous&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Amiri:400,700&amp;display=swap" rel="stylesheet"/>
    <!-- Bootstrap-->
    <link rel="stylesheet" href="{{secure_asset('assets2/css/bootstrap.min.css')}}"/>
    <!-- Normalize-->
    <link rel="stylesheet" href="{{secure_asset('assets2/css/normalize.css')}}"/>
    <!-- Main Source-->
    <link rel="stylesheet" href="{{secure_asset('assets2/css/main.css')}}"/>
    <link rel="stylesheet" href="{{secure_asset('assets2/css/dark-theme.css')}}"/>
  </head>
  <body>
    <header class="navigation-bar">
      <div class="container">
        <!-- Navbar-->
        <div class="main-navbar">
          <nav class="navbar navbar-expand-lg"><a class="navbar-brand" href="{{secure_asset('home')}}">{{app("AppName")}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href="{{secure_asset('home')}}"><i class="fas fa-home"></i>Feed</a></li>
                <li class="nav-item"><a class="nav-link" href="{{secure_asset('profile')}}"><i class="fas fa-user"></i>Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="{{secure_asset('friends')}}"><i class="fas fa-user-friends"></i>Friends</a></li>
                <li class="nav-item"><a class="nav-link" href="{{secure_asset('inbox')}}"><i class="fas fa-envelope"></i>Inbox
                  @if(app('User')->inbox)
                  <span class="counts-message">{{app('User')->inbox}}</span></a>
                  @else
                  <span class="counts-message" style = "display:none"></span></a>
                  @endif
                </li>
                <li class="nav-item"><a class="nav-link" href="{{secure_asset('notifications')}}"><i class="fas fa-bell"></i>Notifications
                  @if(app('User')->notifications)
                  <span class="counts-notifications">{{app('User')->notifications}}</span></a>
                  @else
                  <span class="counts-notifications" style = "display:none"></span></a>
                  @endif
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="{{app('User')->image}}"/></a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="{{secure_asset('settings')}}">Settings</a><a class="modes dropdown-item" href="#" data-content="Enable dark theme">Disable dark theme</a><a class="dropdown-item" href="{{secure_asset('logout')}}">Log Out</a></div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="mobile-nav">
          <nav class="navbar navbar-expand-lg">
            <div class="header"><span class="menu"></span><a class="navbar-brand" href="{{secure_asset('home')}}">{{app("AppName")}}</a></div>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a class="nav-link" href="{{secure_asset('home')}}" title="Feed"><i class="fas fa-home"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="{{secure_asset('friends')}}" title="Friends"><i class="fas fa-user-friends"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="{{secure_asset('profile')}}" title="Profile"><img class="img-fluid" src="{{app('User')->image}}"/></a></li>
              <li class="nav-item"><a class="nav-link" href="{{secure_asset('inbox')}}" title="Inbox"><i class="fas fa-envelope"></i></a>
              </li>
                @if(app("User")->inbox)
                <span class="counts-message">{{app('User')->inbox}}</span></a>
                else
                <span class="counts-message" style = "display:none">{{app('User')->inbox}}</span></a>
                @endif
              </li>
              <li class="nav-item"><a class="nav-link" href="{{secure_asset('notifications')}}" title="Notifications"><i class="fas fa-bell"></i><span class="counts-notifications">{{app('User')->notifications}}</span></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <div class="pop-setting">
      <div class="menu-setting">
        <div class="inner-box">
          <div class="head-title">
            <h2>Menu</h2><a href="#"><i class="fas fa-times closer"></i></a>
          </div>
          <ul class="list-unstyled">
            <li> <a href="{{secure_asset('settings')}}">Settings</a></li>
            <li> <a href=href="{{secure_asset('logout')}}">Log Out</a></li>
            <li> <a href="#">Help</a></li>
            <li> <a href="#">Terms of use</a></li>
            <li> <a href="#">Privacy policy</a></li>
            <li><a class="modes" href="#" data-content="Enable dark theme">Disable dark theme</a></li>
          </ul>
        </div>
      </div>
    </div>
    <main>
      <div class="container">
        <div class="home-page">
          <div class="row">
            
              <div class="col-lg-12">
              @if(count($Data) == 0)
                <div class="unpost">
                  <p>{{$Message->Message}}</p>
                  @if(property_exists($Message, 'Url'))
                  <a href="{{$Message->Url}}">{{$Message->Button}}</a>
                  @endif
                </div>
                @else
                @foreach($Data as $D)
                <div class="post" id="secret-post">
                  <div class="post-content">
                    <div class="text-content">
                      <div class="question">
                        @if($D->anonymous)
                        <?php //(<div class="vertical-bar"></div><a class="username" ><img class="img-fluid" src="{{$D->image}}"/><span>{{$D->name}}</span></a><a class="time">Just now</a>) ?>
                        <div class="vertical-bar"></div><a class="username"><i class="fas fa-mask"></i>{{$D->name}}</a><a class="time">{{$D->time}}</a>
                        @else
                        <div class="vertical-bar"></div><a class="username" href="{{secure_asset('profile/' . $D->asker_id)}}"><img class="img-fluid" src="{{$D->image}}"/><span>{{$D->name}}</span></a><a class="time">{{$D->time}}</a>
                        @endif
                        <div class="message">{{$D->content}}</div>
                      </div>
                        <div class="reply"><a class="username" href="{{secure_asset('profile/' . $D->replier_id)}}"><img class="img-fluid" src="{{$D->image2}}"/>{{$D->name2}}</a><a class="action"><i class="fas fa-reply"></i></a>
                      <div class="reply-text"><span>{{$D->answer}}</span></div>
                    </div>
                    </div>
                  </div>
                  @if(Gate::allows("MyQuestion" , $D->replier_id))
                  <div class="options"><a class="clips" href="#"><i class="fas fa-ellipsis-h"></i></a>
                    <ul class="list-unstyled">
                      <li><a href="{{secure_asset('deletequestion/' . $D->id)}}">Delete Post</a></li>
                    </ul>
                  </div>
                  @endif
                  @if(false)
                  <div class="actions">
                    <div class="share-button"><i class="fas fa-retweet"></i></div>
                    <div class="like-button"><i class="fas fa-heart"></i><span class="like-counter">{{$D->likes}}</span></div>
                  </div>
                  @endif
                </div>
                @endforeach
                @endif
              </div>
            
            
          </div>
        </div>
      </div>
    </main>
    <!-- jQuery v3.4.0-->
    <script src="{{secure_asset('assets2/js/jquery-3.4.0.min.js')}}"></script>
    <!-- BootsTrap v4.3.1-->
    <script src="{{secure_asset('assets2/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    
    <!-- Main Soruce-->
    <script src="{{secure_asset('assets2/js/main.js')}}"></script>
  </body>
</html>
