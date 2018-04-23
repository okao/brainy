<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Brainy | Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        /**
* Daily UI :: 001
* Design a sign up page, modal, form, app screen, etc.
**/
        /**
        * Style Declarations
        **/
        html,
        body {
            height: 100%;
        }

        body {
            background: url("images/bg1.png");
            background-repeat: no-repeat;
            background-size: cover;
            opacity: 0.95;
            font-family: "Proxima Nova", Arial, Helvetica, sans-serif;
        }

        select option {
            margin: 40px;
            background: rgba(15, 154, 8, 0.5);
            color: #fff;
            text-shadow: 0 1px 0 rgba(15, 154, 8, 0.6);
        }

        select option[value="1"] { /* value not val */
            background: rgba(15, 154, 8, 0.5);
        }

        select option[value="2"] { /* value not val */
            background: rgba(15, 154, 8, 0.5);
        }

        option:checked, select:focus::-ms-value, select:focus option:checked:hover{
            background-color: rgb(53, 140, 61);
        }

        #login-email:focus, #login-password:focus {
            background-color: #0f9a08;
        }

        input[type=text]:focus, textarea:focus {
            box-shadow: 0 0 5px rgb(15, 154, 8);
            border: 1px solid rgb(15, 154, 8);
        }

        #page-wrapper {
            display: table;
            width: 100%;
            height: 100%;
        }
        #page-wrapper #modal-wrapper {
            display: table-cell;
            width: 100%;
            height: 100%;
            vertical-align: middle;
        }

        #modal {
            margin: 0 auto;
            box-shadow: 0px 34px 27px rgba(0, 0, 0, 0.32), inset 0 0 1px rgba(0, 0, 0, 0.2);
            max-width: 530px;
            background: white;
        }

        @media only screen and (max-width: 768px) {
            #modal {
                max-width: 80%;
            }
        }

        .box {
            background: #0F9A08;
            background: linear-gradient(135deg, #0F9A08 0%, #054102 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#FF3B8686", endColorstr="#FF79BD9A", GradientType=1 );
            padding: 40px;
            text-align: center;
            position: relative;
        }
        .box .box-header {
            font-size: 1.75em;
            font-weight: 300;
            color: white;
            text-align: left;
            margin: 0 0 36px;
        }
        .box svg {
            fill: white;
        }

        button.proceed {
            display: block;
            width: 100%;
            padding: 20px 0;
            color: white;
            background: #0F9A08;
            background: linear-gradient(135deg, #0F9A08 0%, #054102 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#FF3B8686", endColorstr="#FF0B486B", GradientType=1 );
            border: 0;
            font-size: 1em;
            font-weight: bold;
            font-family: "Proxima Nova", Arial, Helvetica, sans-serif;
            cursor: pointer;
        }
        button.proceed i {
            font-size: 0.8em;
        }

        #login-form {
            padding: 40px;
        }
        #login-form input {
            border: 1px solid #ddd;
            color: #054102;
        }
        #login-form label {
            color: #777777;
        }

        #register-form input {
            border: 1px solid white;
            color: #eeeeee;
        }
        #register-form label {
            color: white;
        }

        label {
            display: block;
            text-align: left;
            margin: 20px 0 6px;
            font-family: "Proxima Nova", sans-serif;
        }
        label:first-child {
            margin-top: 0;
        }
        label .tip {
            float: right;
            font-size: 13px;
            text-decoration: underline;
            cursor: pointer;
            color: #054102;
            font-weight: bold;
        }

        input {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            font-family: "Proxima Nova", Arial, Helvetica, sans-serif;
            font-size: 1em;
            background: transparent;
        }

        #toggle-tabs {
            display: table;
            width: 100%;
        }
        #toggle-tabs .tab {
            font-size: 1em;
            display: table-cell;
            width: 50%;
            padding: 20px;
            cursor: pointer;
            text-align: center;
            font-weight: bold;
        }
        #toggle-tabs .tab#toggle-login {
            color: #0F9A08;
        }
        #toggle-tabs .tab#toggle-register {
            color: white;
            background: #0F9A08;
        }

        #branding-small {
            position: absolute;
            top: 36px;
            right: 36px;
        }
        #branding-small svg {
            fill: white;
        }
    </style>
</head>

<body>

<div id="page-wrapper">
    <div id="modal-wrapper">
        <div id="modal">
            <div id="cards">
                <div class="card" id="login">
                    <div class="box">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="84px" height="70px" viewBox="0 0 600 332" enable-background="new 0 0 600 332" xml:space="preserve">
                          <path id="SVGID_1_" d="M48.207,322.346H2.201l195.546-296.91l29.083,24.881L48.207,322.346L48.207,322.346z M366.916,323.3L184.581,45.545l22.235-34.362l182.337,277.754L366.916,323.3L366.916,323.3z M206.816,322.346c0,0-32.511-50.283-67.621-102.999c-7.233-10.859-14.576-21.821-21.768-32.47c-0.586-0.867,14.985-46.926,21.658-36.678c7.217,11.086,14.388,22.232,21.347,33.138c36.734,57.58,67.509,108.465,67.509,108.465L206.816,322.346L206.816,322.346z M313.043,162.238l-39.053,59.399c-31.744,48.284-57.467,87.41-57.467,87.41l-31.942-22.019c0,0,29.998-44.644,67.215-101.253c5.132-7.806,10.351-15.742,15.577-23.694c4.91-7.47,9.831-14.953,14.699-22.356C321.356,79.969,366.42,11.184,366.42,11.184h45.049C411.469,11.184,353.769,100.292,313.043,162.238L313.043,162.238z M375.986,309.048l-29.083-24.882L526.486,11.184h45.046L375.986,309.048L375.986,309.048z"></path>
                        </svg>
                    </div>
                    <form id="login-form">
                        <label>Email
                            <a href="#" title="Forgot email?" class="tip">Forgot email?</a>
                        </label>
                        <input type="text" id="login-email" class="textbox">
                        <label>Password
                            <a href="#" title="Forgot password?" class="tip">Forgot password?</a>
                        </label>
                        <input type="password" id="login-password" class="textbox">
                    </form>
                    <button type="submit" class="proceed">Log-in to your account <i class="ion-ios-arrow-thin-right"></i></button>
                </div>
                <div class="card" id="register">
                    <div class="box">
                        <div class="box-header">Register</div>
                        <form id="register-form" class="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="first_name">First Name</label>
                                    <input type="text" id="first_name" class="textbox">
                                </div>
                                <div class="col-sm-6">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" id="last_name" class="textbox">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="country">Country</label>
                                    <select class="form-control" name="" id="country">
                                        <option value="1">Maldives</option>
                                        <option value="1">Ausie</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>School</label>
                                    <input type="text" id="register-email" class="textbox">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Email</label>
                                    <input type="text" id="register-email" class="textbox">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Password</label>
                                    <input type="password" id="register-password" class="textbox">
                                </div>
                                <div class="col-sm-6">
                                    <label>Confirm Password</label>
                                    <input type="password" id="register-password-conf" class="textbox">
                                </div>
                            </div>
                        </form>
                    </div>
                    <button type="submit" class="proceed">Create an account <i class="ion-ios-arrow-thin-right"></i></button>
                </div>
            </div>
            <div id="toggle-tabs">
                <div class="tab" id="toggle-login">Sign In</div>
                <div class="tab" id="toggle-register">Register</div>
            </div>
        </div>
    </div>
</div>
<script
        src="https://code.jquery.com/jquery-2.1.3.min.js"
        integrity="sha256-ivk71nXhz9nsyFDoYoGf2sbjrR9ddh+XDkCcfZxjvcM="
        crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    var login = $('#login');
    var register = $('#register');
    var button_login = $('#toggle-login');
    var button_register = $('#toggle-register');

    $(function() {

        register.hide();

        button_register.click(function() {
            login.slideUp(1000);
            register.slideDown(1000);
        });
        button_login.click(function() {
            register.slideUp(1000);
            login.slideDown(1000);
        });
    });
</script>

</body>

</html>