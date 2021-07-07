<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Graded_Assignment</title>

        <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <style>
            * {
              box-sizing: border-box;
              font-family: 'Sofia', cursive;
            }
            ul {
              margin: 0;
              padding: 0;
            }
            ul li {
              position: relative;
              padding: 12px 8px 12px 40px;
              background: #B9ABFF;
              font-size: 18px;
              transition: 0.2s;
              display: flex;
              flex-flow: row nowrap;
              align-items: center;
              justify-content: flex-start;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
            }
            ul li:nth-child(odd) {
              background: #BFA8FF;
            }
            ul li:hover {
              background: #6152EE;
            }
            ul li .task {
                flex-grow: 1;
            }
            ul li .action {
                margin: 5px 15px;
                vertical-align: middle;
            }
            ul li a {
                color: grey;
            }
            .header {
              background-color: purple;
              padding: 30px 40px;
              color: black;
              text-align: center;
            }
            .header:after {
              content: "";
              display: table;
              clear: both;
            }
            .wpw{
            color:red;            
            }
            input {
              margin: 0;
              border: none;
              border-radius: 0;
              width: 75%;
              padding: 10px;
              float: left;
              font-size: 16px;
            }
            .addBtn {
              padding: 10px;
              width: 25%;
              background: #6152EE;
              color: black;
              float: left;
              text-align: center;
              font-size: 16px;
              cursor: pointer;
              transition: 0.3s;
              border-radius: 0;
              border: none;
            }
            .addBtn:hover {
              background-color: yellow;
            }
    </style>
    <body>
       @include('blog.index')
       @yield('content')
      
         <ul id="myUL">
          <li>
            <div class="task">
                Finish Graded assignment
            </div>
            <div class="action">
                <a href=""><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
                <a href=""><i class="fa fa-trash-alt"></i></a> 
            </div>
          </li>
          <li>
            <div class="task">
              Participate in online lecture
            </div>
            <div class="action">
                <a href=""><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
                <a href=""><i class="fa fa-trash-alt"></i></a> 
            </div>
          </li>
          <li>
            <div class="task">
               Complete project
            </div>
            <div class="action">
                <a href=""><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
                <a href=""><i class="fa fa-trash-alt"></i></a> 
            </div>
          </li>
        </ul>
    </body>
</html>
