

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>404 | Oops! Page not found.</title>
    

    <link href="{{ asset('plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   

</head>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f ;
                font-family: 'Raleway', sans-serif ;
                font-weight: 100 ;
                height: 100vh ;
                margin: 0 ;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center ;
            }

            .title {
                font-size: 84px;
            }

            a {
                color: #00aaff ;
                
                font-size: 15px ;
               
                text-decoration: none ;
               
            }

            .m-b-md {
                margin-bottom: 0px;
                color: #f39c12;
            }

            h1 {
                margin-bottom: 0px ;
                color: #f39c12 ;
                font-size: 80px ;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        

            <div class="content">
                <div class="title m-b-md">
                  <h1> <i class="fa fa-warning" aria-hidden="true"></i> 404</h1>
                </div>

                    <!-- Main content -->
    <section class="content">
      <div class="error-page">
      

        <div class="error-content">
         <h3> Oops! Page not found.</h3>
 	
          <p>
            We could not find the page you were looking for.
            Meanwhile, you may <a href="{{ url('/home') }}">return back</a>
            </p>                
                      
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->
               
            </div>
        </div>
    </body>
</html>



