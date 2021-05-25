<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>
        .button {
            background-color: #BE0E36;
            display: block;
            margin: 10px;
            border-radius: 7px;
            float: right;
            width: 110px;
            height: 40px;
          }
          .question{
            width: -webkit-fill-available;
            height: 120px;
            text-align: center;
            border-radius: 7px
          }
    </style>
</head>
<body style="background-color: #131619">
    <nav class="navbar navbar-default" style="background-color: #131619">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Askfm Clone</a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="{{ route('user.homepage') }}">Home</a></li>
            <li><a href="{{ route('user.questions') }}">Questions</a></li>
            <li><a href="{{ route('user.profile') }}">Profile</a></li>
            <li><a href="{{ route('user.friends') }}">Friends</a></li>
            <li><a href="{{ route('user.notification') }}">Notification</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                 href="#">Settings <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('user.settings') }}">Settings</a></li>
                    <li><a href="{{ route('user.logout') }}">Logout</a></li>
                  </ul>
            </li>
          </ul>
        </div>
      </nav>
      <div class="container">
          <div class="row">
                <div class="col-sm-8">
                    <div class="container-fluid" style="background-color: #020202; border-radius: 7px" >
                        <header style="color: white; text-align: center">Question</header>
                        <form action="">
                            <div >
                                <input class="question" type="text" name="question"
                                placeholder="Ask Question" >
                                <button class="button">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4"> Secondary Stuff</div>
          </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
