<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlateShare | Welcome</title>
    <?php include 'header.html';?>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #eee;
        }
        .flexbox {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .header {
            width: 100%;
            flex: 1;
            display: flex;
            background: white;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            margin-left: 40px;
            color: #38E379;
        }

        .first {
    
            width: 90%;
            flex: 9;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            width: 650px;
            height: auto;
            background-color: white;
            border-radius: 2rem;
            margin: 0 auto;
            padding: 45px 20px;
        }

        .container h2 {
            text-align: center;
            margin: 0;
            padding: 0;
            font-size: 32px;
        }

        .container form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 90%;
            margin: 0 auto;
        }
        
        input[type=name],input[type=email],input[type=password] {
            padding: 15px 15px;
            background-color: #eee;
            outline: none;
            border: 0;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        label {
            margin-bottom: 5px;
        }

        button {
            padding: 15px;
            font-weight: bold;
            color: white;
            border-radius: 5px;
            background-color: #38E379;
        }
        button:hover {
            padding: 15px;
            font-weight: bold;
            color: white;
            border-radius: 5px;
            background-color: #20CA60;
        }

        p {
            text-align: center;
        }
    
    </style>
</head>
<body>

<div class="flexbox">
        <nav class="header">
            <div class="logo">
                <h1><a href="index.php">PlateShare.</a></h1>
            </div>
        </nav>
    <section class="first">

        <div class="container">
            <h2>Register Now.</h2>
            <form method="post">
                <label for="name">Enter Name</label>
                <input type="name" placeholder="Name" name="name" />
                <label for="email">Enter email</label>
                <input type="email" placeholder="Email Address" name="email" />

                <label for="password">Enter password </label>
                <input type="password" placeholder="Password" name="password" />

                <p>Already have an account? Click <a href="login.php">here</a> to login.</p>

                <button type="submit">Register</button>
            </form>
        </div>
    </section>
    </div>
</body>
</html>