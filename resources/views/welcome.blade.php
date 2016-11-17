<!DOCTYPE html>
<html>
    <head>
        <title>DRS Group</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{ asset('public/assets/admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('public/assets/admin/dist/css/custom.css') }}" rel="stylesheet" type="text/css" >

    </head>
    <body>
       
             <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <img src="{{URL::to('public/assets/admin/dist/img/drs.png')}}" height="30" alt="User Image">
                            </a>
                        </div>
                         <ul class="nav navbar-nav navbar-right">
                             <li><a href="{{URL::route('admin')}}"><b>Login</b></a></li>
                         </ul>
                    </div>
                </nav>
            </div>
        </div>
        
       

        <div class="container">
            <div class="content home_image">
                <img src="{{URL::to('public/assets/admin/dist/img/home_image.jpg')}}"  alt="User Image">
            </div>
        </div>
    </body>
</html>
