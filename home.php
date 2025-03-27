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
            align-items: center;
            justify-content: center;
            position: fixed;
        }
        .logo {
            margin-left: 40px;
            color: #38E379;

            flex: 1;
        }

        .first {
            width: 70%;
            flex: 9;
            display: flex;
            align-self: center;
            padding: 20px;
            flex-direction: row;
            padding-top: 80px;
        }
        .search {
            flex: 8;
            display: flex;
            margin-left: 40px;
            justify-content: flex-start;
        }
        .search input[type=search] {
            padding: 15px 15px;
            background-color: #eee;
            outline: none;
            border: 0;
            border-radius: 5px;
            width:50%;
        }
        .links {
            flex: 1.2;
            justify-content: center;
            align-items: center;
            margin-right: 20px;
            display: flex;
            gap: 15px;
        }

        .links button {
            padding: 10px 20px;
            font-weight: bold;
            color: white;
            border-radius: 50rem;
            background-color: #38E379;
        }

        .links button:hover {
            background-color: #20CA60;
        }

        .links .fa-bell {
            color: #333;
            cursor: pointer;
    
        }

        .feed {
            background-color: white;
            padding: 10px 20px;
            border-radius: 5px;
            width: 50%;
            margin-bottom: 20px;
        }

        .circle {
            width: 50px;
            height: 50px;
            background: url('https://www.w3schools.com/howto/img_avatar.png');
            background-position: center;
            background-size: cover;
            border-radius: 50rem;
        }

        .user-metadata{
            display: flex;
            align-items: center;
        }

        .name-time {
            display: flex;
            flex-direction: column;
            margin-left: 10px;
        }

        .name-time .name {
            font-weight: bold;
        }

        .name-time .time {
            color: #777;
            font-size: 14px;
        }

        .food-img {
            width: 100%;
            height: 450px;
            background-color: #eee;
            margin-top: 10px;
            border-radius: 5px;
            background: url('https://ministryofcurry.com/wp-content/uploads/2024/06/chicken-biryani-5.jpg');
            background-position: center;
            background-size: cover;
        }

        .feed .content ul {
            padding-left: 0;
            list-style-type: none;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .feeds {
    
            display: flex;
            flex-direction: column;
            flex: 7;
        }

       .filter {
    position: fixed;
    right: 15%;
    top: 80px; /* Adjust according to header height */
    height: calc(100vh - 80px); /* Adjust height considering header */
    width: 20%; /* Adjust width as needed */
}


    </style>
</head>
<body>

<div class="flexbox">
        <nav class="header">
            <div class="logo">
                <h1><a href="home.php">PlateShare.</a></h1>
            </div>
            <div class="search">
                <input type="search" placeholder="Search for food" />
            </div>
            <div class="links">
                <i class="fa-solid fa-bell"></i>
                <button>Donate <i class="fa-solid fa-carrot"></i></button>
            </div>
        </nav>
    <section class="first">

        <div class="feeds">
        <h2 class="top-picks">Top Picks</h2>

        <div class="feed">
            <div class="user-metadata">
                <div class="circle"></div>
                <div class="name-time">
                    <span class="name">Name</span>
                    <span class="time">Time</span>
                </div>
            </div>
            <div class="content">
                <div class="food-img">

                </div>
                <h3>Chicken Biriyani</h3>
                <ul>
                    <li>Amount Available: <b>50 servings</b></li>
                    <li>Contact Number: <b>+91938594859</b></li>
                    <li>Address: <b>Thalassery, Kerala</b></li>
                </ul>
            </div>
        </div>

        <div class="feed">
            <div class="user-metadata">
                <div class="circle"></div>
                <div class="name-time">
                    <span class="name">Name</span>
                    <span class="time">Time</span>
                </div>
            </div>
            <div class="content">
                <div class="food-img">

                </div>
                <h3>Chicken Biriyani</h3>
                <ul>
                    <li>Amount Available: <b>50 servings</b></li>
                    <li>Contact Number: <b>+91938594859</b></li>
                    <li>Address: <b>Thalassery, Kerala</b></li>
                </ul>
            </div>
        </div>

        <div class="feed">
            <div class="user-metadata">
                <div class="circle"></div>
                <div class="name-time">
                    <span class="name">Name</span>
                    <span class="time">Time</span>
                </div>
            </div>
            <div class="content">
                <div class="food-img">

                </div>
                <h3>Chicken Biriyani</h3>
                <ul>
                    <li>Amount Available: <b>50 servings</b></li>
                    <li>Contact Number: <b>+91938594859</b></li>
                    <li>Address: <b>Thalassery, Kerala</b></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="filter">
        <h2 class="filter-title">Filter <i class="fa-solid fa-sliders"></i></h2>
        <p>Please select your food preference:</p>
  <input type="radio" id="veg" name="food_pref" value="veg">
  <label for="veg">Veg</label><br>
  <input type="radio" id="non-veg" name="food_pref" value="non-veg">
  <label for="non-veg">Non veg</label><br>
    </div>
    </section>
    </div>
</body>
</html>