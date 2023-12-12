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
    <title>Forget password</title>

    <style>

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
                    
                    <h2 class="model-title">Forgot Password</h2>
                    <p class="model-text">Enter your email and we’ll send you a reset link</p>
                    <label for="email" class="label mt-24 d-block" style="text-align: left">Email</label>
                    <div class="position-relative">
                        <input class="input" type="email" name="email" id="email" placeholder="Enter email" required>
                    </div>
                    <button type="submit" class="btn btndanger mx-auto mt-4">Send reset link</button>

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
$.validator.addMethod("customPasswordValidation", function(value, element) {
    // Track which conditions are met
    let conditionsMet = {
        numeric: /[0-9]/.test(value),
        specialChar: /[!@#$%^&*]/.test(value),
        fieldLength: value.length >= 7
    };

    
    // Update the list items based on the conditionsMet object
    $(".requirement-list li").each(function(index) {
        // console.log(value.length);
        const condition = $(this).text().toLowerCase();
        
        if (conditionsMet.numeric) {
            // $(this).addClass("fulfilled");
            $(".requirement-list li:contains('numeric character')").addClass("fulfilled");
            // console.log(condition);
        } else {
            $(this).removeClass("fulfilled");
        }
        
        if (conditionsMet.specialChar){
            $(".requirement-list li:contains('special character')").addClass("fulfilled");
        } else {
            $(this).removeClass("fulfilled");
        }

        if (value.length > 6){
            $(".requirement-list li:contains('7 digits')").addClass("fulfilled");
        } else {
            $(this).removeClass("fulfilled");
        }
    });

    // Password must contain at least one numeric character and one special character
    return conditionsMet.numeric && conditionsMet.specialChar;
}, "Password doesn't meet requirements.");

        $("#validatePassword").validate({
            rules: {
                password: {
                    required: true,
                    minlength: 7, // Must be 7 characters or more
                    maxlength: 32,
                    customPasswordValidation: true
                },
                conform_password: {
                    required: true,
                    minlength: 7,
                    maxlength: 32,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true // This ensures the "email" field contains a valid email address.
                }
                
            },
            messages: {
                password: {
                    required: "Password is required.",
                    customPasswordValidation: "Password doesn't meet requirements."
                },
                conform_password: {
                    required: "Conform password is required.",
                    equalTo: "Passwords do not match." 
                },
                email: {
                    required: "Email is required.",
                    email: "Please enter a valid email address."
                }
            },
            submitHandler: function (form) {
                $("#AgentloginForm").attr('data-check-validate', 'true');
            },
            invalidHandler: function (form, validator) {
                $("#AgentloginForm").attr('data-check-validate', 'false');
            }
        });
    </script>

</body>

</html>