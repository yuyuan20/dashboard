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
       .filter form {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.filter form input, .filter form select {
    padding: 10px 15px;
    margin-bottom: 5px;
    outline: none;
    border: 0;
    border-radius: 10px;
}

.filter button {
    padding: 10px 15px;
    background-color: black;
    border-radius: 10px;
    color: white;
}

.filter button:hover {
    background-color: #333;
}

.feed .button {
    margin-bottom: 10px;
}

.feed .button a {
    padding: 10px 15px;
    background-color: black;
    border-radius: 10px;
    color: white;
    font-size: 14px;
}

.feed .button a:hover {
    background-color: #333;
}

.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.5);
    justify-content: center;
    align-items: center;
}

.modal-content {
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    width: 500px;
    max-width: 90%;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    position: relative;
}

.modal-close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    cursor: pointer;
    color: #333;
}

.modal-content form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.modal-content input,
.modal-content select {
    padding: 10px 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    outline: none;
}

.modal-content .submit-btn {
    background-color: #38E379;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 50rem;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.modal-content .submit-btn:hover {
    background-color: #20CA60;
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
                <a href="notifications.php"><i class="fa-solid fa-bell"></i></a>
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
                    <span class="time">Date</span>
                </div>
            </div>
            <div class="content">
                <div class="food-img" style="background: url('https://ministryofcurry.com/wp-content/uploads/2024/06/chicken-biryani-5.jpg');background-size: cover;background-position: center;">

                </div>
                <h3>Chicken Biriyani</h3>
                <ul>
                    <li>Amount Available: <b>50 servings</b></li>
                    <li>Contact Number: <b>+91938594859</b></li>
                    <li>Address: <b>Thalassery, Kerala</b></li>
                </ul>
            </div>
            <div class="button">
                <a href="#">Request</a>
            </div>
        </div>

        <div class="feed">
            <div class="user-metadata">
                <div class="circle"></div>
                <div class="name-time">
                    <span class="name">Name</span>
                    <span class="time">Date</span>
                </div>
            </div>
            <div class="content">
                <div class="food-img" style="background: url('https://pbs.twimg.com/media/FyF4eKsaIAAXubw.jpg');background-size: cover;background-position: center;">

                </div>
                <h3>Porotta beef</h3>
                <ul>
                    <li>Amount Available: <b>50 servings</b></li>
                    <li>Contact Number: <b>+91938594859</b></li>
                    <li>Address: <b>Thalassery, Kerala</b></li>
                </ul>
            </div>
            <div class="button">
                <a href="#">Request</a>
            </div>
        </div>

        <div class="feed">
            <div class="user-metadata">
                <div class="circle"></div>
                <div class="name-time">
                    <span class="name">Name</span>
                    <span class="time">Date</span>
                </div>
            </div>
            <div class="content">
                <div class="food-img" style="background: url('https://www.munatycooking.com/wp-content/uploads/2022/09/Chicken-Mandi-1200-x1200-2022-500x375.jpg');background-size: cover;background-position: center;">

                </div>
                <h3>Chicken Mandi</h3>
                <ul>
                    <li>Amount Available: <b>50 servings</b></li>
                    <li>Contact Number: <b>+91938594859</b></li>
                    <li>Address: <b>Thalassery, Kerala</b></li>
                </ul>
            </div>
            <div class="button">
                <a href="#">Request</a>
            </div>
        </div>

 
    </div>

    <div class="filter">
        <h2 class="filter-title">Filter <i class="fa-solid fa-sliders"></i></h2>
        <form class="food-filters">
    <!-- Location Filter -->
    <label for="location">Location:</label>
    <input type="text" id="location" placeholder="Enter city or area">

    <label for="distance">Distance:</label>
    <select id="distance">
        <option value="5">Within 5km</option>
        <option value="10">Within 10km</option>
        <option value="20">Within 20km</option>
    </select>

    <!-- Food Type & Category -->
    <label for="meal-type">Meal Type:</label>
    <select id="meal-type">
        <option value="all">All</option>
        <option value="breakfast">Breakfast</option>
        <option value="lunch">Lunch</option>
        <option value="dinner">Dinner</option>
        <option value="snacks">Snacks</option>
    </select>

    <label for="diet">Dietary Preference:</label>
    <select id="diet">
        <option value="all">All</option>
        <option value="vegetarian">Vegetarian</option>
        <option value="vegan">Vegan</option>
        <option value="non-vegetarian">Non-Vegetarian</option>
        <option value="halal">Halal</option>
    </select>

    <!-- Availability & Urgency -->
    <label for="expiry">Best Before:</label>
    <input type="date" id="expiry">

    <!-- Sorting Options -->
    <label for="sort">Sort By:</label>
    <select id="sort">
        <option value="newest">Newest First</option>
        <option value="nearest">Nearest First</option>
        <option value="expiring-soon">Expiring Soon</option>
        <option value="popular">Most Popular</option>
    </select>

    <!-- Apply Filter Button -->
    <button type="submit">Apply Filters</button>
</form>
    </div>
    </section>
    </div>

    <div id="donateModal" class="modal">
    <div class="modal-content">
        <span class="modal-close" onclick="closeDonateModal()">&times;</span>
        <h2>Donate Food</h2>
        <form onsubmit="submitDonation(event)">
            <input type="text" placeholder="Food Title" required>
            <input type="number" placeholder="Quantity Available" min="1" required>
            <label>Best Before Date</label>
            <input type="date" required>
            
            <select required>
                <option value="">Select Food Category</option>
                <option value="vegetarian">Vegetarian</option>
                <option value="non-vegetarian">Non-Vegetarian</option>
                <option value="vegan">Vegan</option>
                <option value="halal">Halal</option>
            </select>
            
            <label>Available Until</label>
            <input type="datetime-local" required>
            
            <input type="tel" placeholder="Contact Phone Number" required>
            <input type="text" placeholder="Pickup Address" required>
            
            <button type="submit" class="submit-btn">Submit Donation</button>
        </form>
    </div>
</div>

<script>
    function openDonateModal() {
    document.getElementById('donateModal').style.display = 'flex';
}

// Function to close the donate modal
function closeDonateModal() {
    document.getElementById('donateModal').style.display = 'none';
}

// Function to handle form submission
function submitDonation(event) {
    event.preventDefault();
    // Here you would typically add logic to process the donation
    alert('Donation submitted successfully!');
    closeDonateModal();
}
document.querySelector('.links button').setAttribute('onclick', 'openDonateModal()');
</script>
</body>
</html>