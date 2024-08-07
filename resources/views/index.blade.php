
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $title }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/plugins/sweetalert/css/sweetalert.css" rel="stylesheet">

    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="#"> <h4>Silahkan Login</h4></a>
        
                                <form class="mt-5 mb-5 login-input" method="POST" action="#">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email..." required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password..." required>
                                    </div>
                                    <button type="submit" class="btn login-form__btn submit w-100">Sign In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Scripts
    ***********************************-->
    <script src="/assets/plugins/common/common.min.js"></script>
    <script src="/assets/js/custom.min.js"></script>
    <script src="/assets/js/settings.js"></script>
    <script src="/assets/js/gleek.js"></script>
    <script src="/assets/js/styleSwitcher.js"></script>

    <script src="/assets/plugins/sweetalert/js/sweetalert.min.js"></script>
    <script src="/assets/plugins/sweetalert/js/sweetalert.init.js"></script>

    <script>
        document.querySelector(".sweet-wrong").onclick=function(){
            sweetAlert("Oops...","Something went wrong !!","error")
        },
        document.querySelector(".sweet-message").onclick=function(){
            swal("Hey, Here's a message !!")
        },
        document.querySelector(".sweet-text").onclick=function(){
            swal("Hey, Here's a message !!","It's pretty, isn't it?")
        },
        document.querySelector(".sweet-success").onclick=function(){
            swal("Hey, Good job !!","You clicked the button !!","success")
        },
        document.querySelector(".sweet-confirm").onclick=function(){
            swal({
                title:"Are you sure to delete ?",
                text:"You will not be able to recover this imaginary file !!",
                type:"warning",
                showCancelButton:!0,
                confirmButtonColor:"#DD6B55",
                confirmButtonText:"Yes, delete it !!",
                closeOnConfirm:!1},
            function(){
                swal("Deleted !!","Hey, your imaginary file has been deleted !!","success")})
        },
    </script>
</body>
</html>





