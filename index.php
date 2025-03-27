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
        }
        .container {
            width: 100%;
            height: 70vh;
            background-color: #eee;
            display: flex;
            flex-direction: column;
        }
        .header {
            width: 100%;
            display: flex;
            background: black;
            flex: 1;
            justify-content: space-between;
            align-items: center;
        }
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), 
                url('https://static.vecteezy.com/system/resources/previews/044/425/839/large_2x/feeding-concepts-hand-offered-to-donate-food-from-a-rich-man-share-the-concept-of-social-sharing-poor-people-receiving-food-from-donations-free-photo.jpg') center/cover no-repeat;
            flex: 9;
            background-size: cover;
            background-position: center;
        }
        .logo {
            margin-left: 40px;
            color: #38E379;
        }
        .button {
            margin-right: 40px;
        }
        .button a {
            padding: 10px 20px;
            outline: none;
            background-color: transparent;
            color: white;
            border: 2px solid white;
            cursor: pointer;
            transition: all 0.5s ease-in-out;
            border-radius: 10px;
        }
        .button a:hover {
            border-radius: 50rem;
        }
        .hero {
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            flex-direction: column;
        }
        .hero h2 {
            font-size: 43px;
            padding: 0;
            margin: 0;
        }
        .hero a {
            padding: 10px 20px;
            background-color: #38E379;
            color: white;
            border-radius: 50rem;
            font-weight: bold;
            transition: background 0.15s ease-in;
        }
        .hero a:hover {
            background-color: #20CA60;
        }
        .first {
            width: 100%;
            height: 40vh;
            background-color: #eee;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="header">
            <div class="logo">
                <h1>PlateShare.</h1>
            </div>
            <div class="button">
                <a href="login.php">Log In</a>
            </div>
        </nav>
        <section class="hero">
            <h2>
                Share Your Leftovers, Feed Someone in Need
            </h2>
            <p>
                Too much food? Don’t let it go to waste. Donate surplus food or find a meal nearby. <br/>Together, we can reduce food waste and help those in need.
            </p>
            <a href="register.php">Register</a>
    </section>
    </div>
    <section class="first">

    </section>
</body>
</html>