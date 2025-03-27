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
            line-height: 1.6;
            color: #333;
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
            text-align: center;
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
        .section {
            width: 100%;
            padding: 50px 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .content-wrapper {
            width: 80%;
            max-width: 1200px;
        }
        .how-it-works {
            display: flex;
            justify-content: space-around;
            margin-bottom: 30px;
            gap: 10px;
        }
        .step {
            text-align: center;
            width: 30%;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .step:hover {
            transform: translateY(-10px);
        }
        .step i {
            font-size: 32px;
        }
        .step h3 {
            color: #38E379;
            margin-bottom: 10px;
        }
        .mission-section {
            background-color: #f4f4f4;
        }
        .mission-content {
            display: flex;
            align-items: center;
            gap: 30px;
        }
        .mission-text {
            flex: 2;
        }
        .mission-image {
            flex: 1;
        }
        .mission-image img {
            max-width: 100%;
            border-radius: 10px;
        }
        .impact-section {
            background-color: white;
        }
        .impact-stats {
            display: flex;
            justify-content: space-between;
        }
        .stat {
            text-align: center;
            width: 30%;
        }
        .stat-number {
            font-size: 48px;
            color: #38E379;
            font-weight: bold;
        }
        .call-to-action {
            background-color: #38E379;
            color: white;
            text-align: center;
            padding: 50px 0;
        }
        .call-to-action h2 {
            margin-bottom: 20px;
        }
        .call-to-action a {
            background-color: white;
            color: #38E379;
            padding: 12px 24px;
            border-radius: 50rem;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .call-to-action a:hover {
            background-color: #f0f0f0;
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
                Too much food? Don't let it go to waste. Donate surplus food or find a meal nearby. <br/>Together, we can reduce food waste and help those in need.
            </p>
            <a href="register.php">Register</a>
        </section>
    </div>

    <section class="section">
        <div class="content-wrapper how-it-works">
            <div class="step">
                <i class="fa-solid fa-user-plus"></i>
                <h3>Create an Account</h3>
                <p>Sign up as a donor or recipient. It's quick, easy, and free to join our community.</p>
            </div>
            <div class="step">
                <i class="fa-solid fa-utensils"></i>
                <h3>Share or Find Food</h3>
                <p>Donors can list surplus food, while recipients can browse and request available meals.</p>
            </div>
            <div class="step">
                <i class="fa-solid fa-recycle"></i>
                <h3>Connect & Reduce Waste</h3>
                <p>Our platform helps connect food donors with those in need, making food sharing simple.</p>
            </div>
        </div>
    </section>

    <section class="section mission-section">
        <div class="content-wrapper mission-content">
            <div class="mission-text">
                <h2>Our Mission: Fighting Hunger, Reducing Waste</h2>
                <p>PlateShare was born from a simple yet powerful idea: why should perfectly good food go to waste when so many people are struggling with hunger? Every day, tons of food are discarded while millions of people lack access to nutritious meals.</p>
                <p>Our platform bridges this gap by creating a community-driven solution. We believe that by connecting those with surplus food to those in need, we can create a more sustainable and compassionate society.</p>
                <p>From restaurants and catering services to individual households, anyone can become a part of our mission to reduce food waste and support local communities.</p>
            </div>
            <div class="mission-image">
                <img src="https://www.financialexpress.com/wp-content/uploads/2019/10/hunger-survey-india.jpg?w=440" alt="Mission Image">
            </div>
        </div>
    </section>

    <section class="section impact-section">
        <div class="content-wrapper">
            <h2 style="text-align: center; margin-bottom: 30px;">Our Impact</h2>
            <div class="impact-stats">
                <div class="stat">
                    <div class="stat-number">50K+</div>
                    <p>Meals Shared</p>
                </div>
                <div class="stat">
                    <div class="stat-number">500+</div>
                    <p>Community Partners</p>
                </div>
                <div class="stat">
                    <div class="stat-number">10T</div>
                    <p>Pounds of Food Saved</p>
                </div>
            </div>
        </div>
    </section>

    <section class="call-to-action">
        <h2>Join the PlateShare Movement Today</h2>
        <p>Together, we can make a difference. One plate at a time.</p>
        <a href="register.php">Get Started Now</a>
    </section>
</body>
</html>