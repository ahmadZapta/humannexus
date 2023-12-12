<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="A web3-platform, backed by cryptocurrency, that rewards researchers, removes publication barriers, and streamlines operational costs.">

    <!---------------------- Bootstrap Cdn---------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="shortcut icon" href="{{asset('frontend-assets/images/icons/favicon.svg')}}" type="image/x-icon" >

    <!----------------------- CSS ------------------------------->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <title>Login</title>

    <style>

        .input-field {
            position: relative;
        }

        .field-icon {
            float: right;
            margin-right: 10px;
            margin-top: -32px;
            position: relative;
            z-index: 2;
            color: #989898;
        }

        .input {
            width: 100%;
            border-radius: 6px;
            border: 1px solid #BABABA;
            padding: 13.5px 16px;
            outline: none;
            font-size: 14px;
            font-weight: 400;
            line-height: normal;
            color: #202020;
        }

        .label {
            color: #202020;
            width: 100%;
            font-size: 14px;
            font-weight: 400;
            line-height: normal;
            padding-bottom: 6px;
            word-break: break-all;
        }

        .login-bg-section {
            width: 100%;
            padding: 32px 0;
        }

        .login-bg-section .container {
            min-height: calc(100vh - 66px);
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* padding-top: 20px; */
            gap: 20px;
        }

        .login-container {
            width: 100%;
            max-width: 506px;
            border-radius: 8px;
            background: #FFF;
            box-shadow: 0px 0px 10px 0px rgba(52, 84, 207, 0.07);
            padding: 32px 55px 62px;
            text-align: center;
            margin: auto;
        }

        .btndanger{
            padding-left: 30px;
            padding-right: 30px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f4623a;
            border-radius: 6px;
            border: 1px solid #f4623a;
            font-size: 18px;
            line-height: 28px;
            font-weight: 400;
            color: #FFFFFF;
            }

            .btndanger:hover,
            .btndanger:active,
            .btndanger:focus{
                color: #f4623a;
                border: 1px solid #f4623a;
            }
        
    </style>
</head>

<body style="background-color: #F4FBFE;">
    <section class="login-bg-section">
        <div class="container">
            <img src="{{asset('frontend-assets/images/icon/logo.svg')}}" alt="logo-img" width="250" height="50">
            <div class="login-container">
               
                <form id="validatePassword" class="modal-body">
                    
                    <h2 class="model-title">Login</h2>
                    <p class="model-text">Enter your email and password</p>
                    <label for="email" class="label mt-24 d-block" style="text-align: left">Email</label>
                    <div class="position-relative">
                        <input class="input" type="email" name="email" id="email" placeholder="Enter email" required>
                    </div>
                    <div class="input-field" style="margin-top: 16px">
                        <label for="conformPassword" class="label" style="text-align: left">Password</label>
                        <input id="password" placeholder="Enter password" type="password" class="input" name="password" style="padding-right:40pxx;">
                        <span class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    
                    <a href="{{route('forgetPassword')}}" class="label w-100 d-block mt-2" style="text-align:right">Forgot password?</a>
                    <button type="submit" class="btn btndanger mx-auto mt-4">Login</button>

                </form>
            </div>
        </div>
        
    </section>
   

    <!-- certijob-section -->

    <!-------------------------- ********** Section 1 ********** ------------------------->


    <!-- ************************Scripts Start Here*********************************-->

    <!--------------------------------- Jquery --------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-------------------------------- Jquery Ends------------------------------->

    <!--------------------------------- Popper Js ------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <!--------------------------------- Popper Js Ends----------------------------->

    <!--------------------------------- Bootstrap 5 cdn ---------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!------------------------------------ Bootstrap 5 cdn Ends--------------------->

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    
    <!------------------------------- Custom Js ---------------------------------->
    <script src="assets/js/script.js"></script>
    <!------------------------------ Custom Js Ends --------------------->

    <script>

    // Add a custom validation method for password
    $(".toggle-password").click(function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $(this).closest(".input-field").find("input");

        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
        });
    </script>

</body>

</html>