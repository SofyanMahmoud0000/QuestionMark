<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
    <link rel="stylesheet" href="{{asset('assets2/css/bootstrap.min.css')}}"/>
    <!-- Normalize-->
    <link rel="stylesheet" href="{{asset('assets2/css/normalize.css')}}"/>
    <!-- Main Source-->
    <link rel="stylesheet" href="{{asset('assets2/css/main.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets2/css/dark-theme.css')}}"/>
    <title>Profile</title>
  </head>
  <body>
    <header class="navigation-bar">
      <div class="container">
        <!-- Navbar-->
        <div class="main-navbar">
          <nav class="navbar navbar-expand-lg"><a class="navbar-brand" href="home">{{app("AppName")}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{asset('home')}}"><i class="fas fa-home"></i>Feed</a></li>
                <li class="nav-item active"><a class="nav-link" href="{{asset('profile')}}"><i class="fas fa-user"></i>Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="{{asset('friends')}}"><i class="fas fa-user-friends"></i>Friends</a></li>
                <li class="nav-item"><a class="nav-link" href="{{asset('inbox')}}"><i class="fas fa-envelope"></i>Inbox
                  @if(app('User')->inbox)
                  <span class="counts-message">{{app('User')->inbox}}</span></a>
                  @else
                  <span class="counts-message" style = "display:none"></span></a>
                  @endif
                </li>
                <li class="nav-item"><a class="nav-link" href="{{asset('notifications')}}"><i class="fas fa-bell"></i>Notifications
                  @if(app('User')->notifications)
                  <span class="counts-notifications">{{app('User')->notifications}}</span></a>
                  @else
                  <span class="counts-notifications" style = "display:none"></span></a>
                  @endif
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="{{app('User')->image}}"/></a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="{{asset('settings')}}">Settings</a><a class="modes dropdown-item" href="#" data-content="Enable dark theme">Disable dark theme</a><a class="dropdown-item" href="{{asset('logout')}}">Log Out</a></div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="mobile-nav">
          <nav class="navbar navbar-expand-lg">
            <div class="header"><span class="menu"></span><a class="navbar-brand" href="{{asset('home')}}">{{app("AppName")}}        </a></div>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="{{asset('home')}}" title="Feed"><i class="fas fa-home"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="{{asset('friends')}}" title="Friends"><i class="fas fa-user-friends"></i></a></li>
              <li class="nav-item active"><a class="nav-link" href="{{asset('profile')}}" title="Profile"><img class="img-fluid" src="{{app('User')->image}}"/></a></li>
              <li class="nav-item"><a class="nav-link" href="{{asset('inbox')}}" title="Inbox"><i class="fas fa-envelope"></i></a></li>
                @if(app("User")->inbox)
                <span class="counts-message">{{app('User')->inbox}}</span>
                @else
                <span class="counts-message" style = "display:none">{{app('User')->inbox}}</span>
                @endif
              
              <li class="nav-item"><a class="nav-link" href="{{asset('notifications')}}" title="Notifications"><i class="fas fa-bell"></i></a></li>
                @if(app("User")->notifications)
                <span class="counts-notifications">{{app('User')->notifications}}</span>
                @else
                <span class="counts-notifications" style = "display:none">{{app('User')->notifications}}</span>
                @endif
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
            <li> <a href="{{asset('settings')}}">Settings</a></li>
            <li> <a href="{{asset('logout')}}">Log Out</a></li>
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
          <section class="profile-username">
              <div class="header"><img class="img-fluid cover" src="{{$User->cover}}"/>
                <div class="overlay">
                  <div class="user">
                    <div class="profile-img"><img class="img-fluid" src="{{$User->image}}"/></div><a class="username" href="#">{{$User->username}}<span class="name">{{$User->name}}</span></a>
                    <div class="answer">
                      <div class="reanswer"><span class="title">Answers</span><span class="count">{{$Statistics->answer}}</span></div>
                      <div class="following"><span class="title">Follwing</span><span class="count">{{$Statistics->followeds}}</span></div>
                      <div class="follwers"><span class="title">Follwers</span><span class="count">{{$Statistics->followings}}</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            </div>
      <section class="postest">
        <div class="container">
          <div class="questions">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                @if(auth()->check())
                <div class="form-ask mb-20">
                  <div class="title-user"><span class="title">Ask</span><span class="username">{{$User->name}}</span></div>
                  <form method="post" action="{{asset('createquestion')}}">
                    <input type="hidden" id="the-question"/>
                    <textarea class="form-control" type="text" name="content" placeholder="Type your question"></textarea>
                    <input type = "hidden" name = "id" value = "{{$id}}">
                    <div class="submit-section">
                      <div class="checkit">
                        <input type="hidden" id="checked"/>
                        <div>
                          <input type="checkbox" checked="checked" id="check" name = "anonymous"/>
                          <label class="labelcheck" for="check"><span>Ask anonymous</span></label>
                        </div>
                      </div>
                      <div class="submit-action">
                        <button class="btn-submit" type="submit">Send <i class="fas fa-paper-plane"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
                @endif
              </div>
              <div class="col-lg-8 offset-lg-2">
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
                        <div class="vertical-bar"></div><a class="username"><i class="fas fa-mask"></i>{{$D->name}}</a><a class="time">{{$D->time}}</a>
                        @else
                        <div class="vertical-bar"></div><a class="username" href="{{asset('profile/' . $D->asker_id)}}"><img class="img-fluid" src="{{$D->image}}"/><span>{{$D->name}}</span></a><a class="time">{{$D->time}}</a>
                        @endif
                        <div class="message">{{$D->content}}</div>
                      </div>
                      <div class="reply">
                        <div class="reply-text"><span>{{$D->answer}}</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="options"><a class="clips" href="#"><i class="fas fa-ellipsis-h"></i></a>
                    <ul class="list-unstyled">
                      <li><a href="{{asset('deletequestion/' . $D->id)}}">Delete Post</a></li>
                    </ul>
                  </div>
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
      </section>
      <div class="container"></div>
    </main>
    <!-- jQuery v3.4.0-->
    <script src="{{asset('assets2/js/jquery-3.4.0.min.js')}}"></script>
    <!-- BootsTrap v4.3.1-->
    <script src="{{asset('assets2/js/bootstrap.min.js')}}"></script>
    <!-- TweenMax-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <!-- Main Soruce-->
    <script src="{{asset('assets2/js/main.js')}}"></script>
    <script src="http://localhost:35729/livereload.js"></script>
  </body>
</html>
