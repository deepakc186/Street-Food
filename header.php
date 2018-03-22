<!DOCTYPE HTML>
<html>
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap-social.css">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>COmidA | Street</title>
    </head>
    <body>
        
        <nav class="navbar navbar-inverse navbar-toggleable-sm fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-togller-icon"></span>
                </button>
                <a class="navbar-brand">Comida RuE</a>
                <div class="collapse navbar-collapse align-self-center" id="Navbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item <?php if($currentPage =='Home'){echo 'active';}?>"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item <?php if($currentPage =='About'){echo 'active';}?>"><a class="nav-link" href="about.php">About</a></li>
                        <li class="nav-item <?php if($currentPage =='Contact'){echo 'active';}?>"><a class="nav-link" href="Contact.php">Contact</a></li>
                    </ul>
                </div> 
                <div class="col-12 push-md-6">
                    <span class="navbar-text">
                        <a data-toggle="modal" data-target="#loginModal">
                            <span class="fa fa-sign-in"></span>Login</a>
                            <div class="push-md-5">   <a data-toggle="modal" data-target="#SignUpModal">
                                    <span class="fa fa-sign-in"></span>Register</a></div>
                            
                    </span></div>     

            </div>
        </nav>

        <div id="loginModal" class="modal fade" role="dialog">
            <div class="modal-dialog" role="content">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Login</h4>
                        <button type="button" class="close"
                                data-dismiss="modal">
                            &times;
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form-1" role="form">

                            <label for="email" class="col-md-2 col-for-label">Email</label>
                            <div class="form-group">
                                <input required type="email" class="form-control" id="email"> 
                            </div>


                            <label for="password" class="col-md-2 col-for-label">Password:</label>
                            <div class="form-group">
                                <input required type="password" class="form-control" id="password"> 
                            </div>


                            <div class="form-group-row">
                                <button type="submit" class="btn btn-danger btn-block">Log in</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>    
         <div id="SignUpModal" class="modal fade" role="dialog">
            <div class="modal-dialog" role="content">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Register</h4>
                        <button type="button" class="close"
                                data-dismiss="modal">
                            &times;
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form-1" role="form">
                            
                            
                            <label for="Name" class="col-md-2 col-for-label">Name</label>
                            <div class="form-group">
                                <input required type="text" class="form-control" id="name"> 
                            </div>

                            <label for="email" class="col-md-2 col-for-label">Email</label>
                            <div class="form-group">
                                <input required type="email" class="form-control" id="email"> 
                            </div>


                            <label for="password" class="col-md-2 col-for-label">Password:</label>
                            <div class="form-group">
                                <input required type="password" class="form-control" id="password"> 
                            </div>


                            <div class="form-group-row">
                                <button type="submit" class="btn btn-danger btn-block">Register</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>    
        
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>     
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.0.0/dist/bootstrap-validate.js" integrity="sha384-YmuBsjGRLbP6xIXehXIvB6ftbTViDPXx/goUnD/B7EZ8qDE5JVVuBN+Zws8lzmh7" crossorigin="anonymous"></script>
        
        