<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hackthon</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            transition: all 1s;
        }
        
        .login-form {
            background-color: beige;
            width: max-content;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20vh;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .login-form h1 {
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 10px;
            font-size: 42px;
        }
        
        .login-form div p {
            font-weight: normal;
        }
        
        .fail {
            background-color: tomato;
            padding: 10px;
            border-radius: 5px;
            color: #eee;
            margin-bottom: 30px;
        }
        
        .form-group {
            margin: 10px;
        }
        
        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }
        
        .form-group input[type='submit'] {
            font-weight: 600;
            cursor: pointer;
        }
        
        /* .fail {
            display: none;
        } */
    </style>
</head>

<body style="background-color: #333;">
    <div>
        <div class="" id="login-section">
            <center>
                <form class="login-form" action="./php/logincheck.php" method="POST">
                    <h1 class="">login</h1>
                    <?php if(isset($_GET['loginerror']) && $_GET['loginerror']){ ?>
                        <div class="fail">
                        <p class=""> Invalid Username or Password ! </p>
                        </div>
                    <?php  } ?>
                   
                    <div class="form-group">
                        <input type="text" placeholder="Username" name="username">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <input class="" type="submit" value="Submit" name="login-submit">
                    </div>

                </form>
            </center>
        </div>
</body>

</html>