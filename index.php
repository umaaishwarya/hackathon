<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Db</title>
        <style>
            body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-color: #FAF8F1;
    /*background: linear-gradient(to right, #b92b27, #1565c0)*/
}

.card{
    text-align: center;
    margin-bottom:20px;
    border:none;
}

.box {
    border-style: ridge;
    border-radius: 60px;
    width: 500px;
    padding: 40px;
    position: relative;
    top: 50%;
    left: 30%;
    background: #FAEAB1;
    text-align: center;
    transition: 0.25s;
    margin-top: 100px
}

.box input[type="text"],
.box input[type="password"],
.box input[type="email"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #7B2869;
    padding: 10px 10px;
    width: 250px;
    outline: none;
    color: black;
    border-radius: 24px;
    transition: 0.25s
}

.box h1 {
    color: black;
    text-transform: uppercase;
    font-weight: 500
}

.box input[type="text"]:focus,
.box input[type="password"]:focus,
.box input[type="email"]:focus {
    width: 300px;
    border-color: #6C00FF
}

.box input[type="submit"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #7B2869;
    padding: 14px 40px;
    outline: none;
    color: black;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer
}

.box input[type="submit"]:hover {
    background: #7B2869;
    color: white;

}

.forgot {
    text-decoration: underline
}

ul.social-network {
    list-style: none;
    display: inline;
    margin-left: 0 !important;
    padding: 0
}

ul.social-network li {
    display: inline;
    margin: 0 5px
}

.social-network a.icoFacebook:hover {
    background-color: #3B5998
}

.social-network a.icoTwitter:hover {
    background-color: #33ccff
}

.social-network a.icoGoogle:hover {
    background-color: #BD3518
}

.social-network a.icoFacebook:hover i,
.social-network a.icoTwitter:hover i,
.social-network a.icoGoogle:hover i {
    color: #fff
}

a.socialIcon:hover,socialHoverClass {
    color: #44BCDD
}

.social-circle li a {
    display: inline-block;
    position: relative;
    margin: 0 auto 0 auto;
    border-radius: 50%;
    text-align: center;
    width: 50px;
    height: 50px;
    font-size: 20px
}

.social-circle li i {
    margin: 0;
    line-height: 50px;
    text-align: center
}

.social-circle li a:hover i,
.triggeredHover {
    transform: rotate(360deg);
    transition: all 0.2s
}

.social-circle i {
    color: #fff;
    transition: all 0.8s;
    transition: all 0.8s
}
.container{
    text-align: center;
}
        </style>
    </head>
    <body>
    <div class="container"> 
            <div class="row"> 
                <div class="col-md-6"> 
                    <div class="card"> 
                        <form onsubmit="event.preventDefault()" class="box"> 
                            <h1>Login</h1> 
                            <p class="text-muted"> Please enter your login and password!</p> 
                            <input type="email" name="Email" placeholder="Email id"> 
                            <input type="text" name="Firstname" placeholder="First name"> 
                            <input type="text" name="Lastname" placeholder="Last name"> 
                            <input type="password" name="Password" placeholder="Password">

                            <a class="forgot text-muted" href="#">Forgot password?</a> 
                            <input type="submit" name="Login" value="Login" href="#"> 
                            <div class="col-md-12"> <ul class="social-network social-circle"> 
                                <li>
                                    <a href="#" class="icoFacebook" title="Facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li> 
                                <li>
                                    <a href="#" class="icoTwitter" title="Twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li> 
                                    <li>
                                        <a href="#" class="icoGoogle" title="Google +">
                                            <i class="fab fa-google-plus"></i>
                                        </a>
                                    </li> 
                                </ul> 
                            </div> 
                        </form> 
                    </div> 
                </div>
            </div>
        </div>
     </body>
</html>
