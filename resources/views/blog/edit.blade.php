@extends('layouts.master')
@section('content')
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
        @endsection