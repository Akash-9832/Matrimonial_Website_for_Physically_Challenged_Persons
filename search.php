<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "matrimonial_db";
$con = new mysqli($servername, $username, $password, $database);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$result = null;

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["category"]) && isset($_GET["subcategory"])) {
    $category = $_GET['category'];
    $subcategory = $_GET['subcategory'];

    $sql = "SELECT * FROM user_info WHERE ";

    if (!empty($category) && !empty($subcategory)) {
        if (
            $category === "Gender" || $category === "State" || $category === "City" ||
            $category === "Disability_type" || $category === "Disability_percent" || $category === "Blood_group" || $category === "Profession" ||
            $category === "Religion" || $category === "Caste"
        ) {
            $sql .= "$category = '$subcategory'";
        }
    }

    $result = $con->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrimonial Search Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f6ff;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        form {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        select {
            width: 200px;
            border-radius: 5px;
        }

        select,
        button {
            margin: 15px;
            padding: 10px;
        }

        .search-container {
            border-radius: 7px;
            background-color: transparent;
            padding: 40px;
            margin: 40px auto;
            text-align: center;
            width: 800px;
            box-shadow: 0 4px 5px rgba(0, 0, 0, 0.311);
        }

        h1 {
            text-align: center;
            color: rgb(170, 3, 73);
        }

        button {
            background-color: #003cff;
            color: #fff;
            border: none;
            border-radius: 20px;
            padding: 11px 35px;
            cursor: pointer;
        }


        .first {
            background: linear-gradient(rgba(58, 48, 48, 0.3), rgba(66, 82, 90, 0.625)), url("image2.jpg");
            background-size: cover;
            margin-bottom: 10px;
            box-shadow: 0 0 15px #faffdd;
            height: 110px;

        }

        nav {
            width: 100%;
            height: 90px;
            padding: 0 20px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            justify-items: center;
        }

        nav p a {
            width: 50px;
            color: #fae7f7;
        }

        nav span.logo {
            color: rgb(249, 68, 228);
        }

        nav a {
            cursor: pointer;
            text-decoration: none;
        }

        .menu a {
            text-decoration: none;
            color: aliceblue;
            padding: 18px 10px;
            font-size: 20px;
            align-items: center;
            cursor: pointer;
        }

        .menu a:hover {
            color: rgb(4, 1, 55);
            border-radius: 8px;
            background-color: #e84393;
            box-shadow: 0 0 10px #3300ff;
        }
    </style>
</head>

<body>
    <div class="first">
        <nav>
            <p>
                <a href="index.php">
                    <big></big><big><span class="logo">
                            <big><big><big><big><b><i>A</i></b></big></big></big></big></span><big>lliance</big><br>
                        <span class="logo">
                            <big><big><big><b><i>W</i></b></big></big></big></span><big>eds.com</big></big></big>
                </a>
            </p>
            <div class="menu">
                <a href="index.php">Home</a>
                <a href="index.php">About Us</a>
                <a href="login.php">Login</a>
                <a href="search.php">Search</a>
                <!-- <a href="#">Membership</a> -->
                <a href="index.php">Terms & Condition</a>
            </div>
        </nav>
    </div>



    <div class="search-container">
        <h1>Search your perfect Match</h1>
        <form method="GET">
            <label for="category">Select Category:</label>
            <select id="category" name="category">
                <option value="" disabled selected>Select an option</option>
                <option value="Gender">Gender</option>
                <option value="State">State</option>
                <option value="City">City</option>
                <option value="Disability_type">Disability Type</option>
                <option value="Disability_percent">Disability percent</option>
                <option value="Blood_group">Blood Group</option>
                <option value="Profession">Profession</option>
                <option value="Religion">Religion</option>
                <option value="Caste">Caste</option>
            </select>

            <!-- Add subcategory dropdown based on the selected category -->
            <select id="subcategory" name="subcategory">
                <option value="" disabled selected>Select an option</option>
            </select>

            <button type="submit">Search</button>
        </form>
    </div>

    <script>
        // Show/hide subcategory options based on the selected category
        const categorySelect = document.getElementById("category");
        const subcategorySelect = document.getElementById("subcategory");

        categorySelect.addEventListener("change", function() {
            subcategorySelect.innerHTML = ""; // Clear existing options

            const selectedCategory = categorySelect.value;

            const subcategories = {
                Gender: ["Male", "Female", "Other"],
                State: ["Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chhattisgarh", "Daman & Diu", "Delhi", "Goa", "Gujrat", "Haryana", "Himachal Pradesh", "Jammu & Kashmir", "Jharkhand", "Karnataka", "Kerla", "Madhya Pradesh", "Maharashtra", "Maine", "Manipur", "Meghalya", "Mijoram", "Nagaland", "Odisha", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Telangana", "Tripura", "Uttar Pradesh", "Uttarakhand", "West Bengal"],
                City: ["Abohar", "Ada", "Adilabad", "Agartala", "Agra", "Ahemedabad", "Ahemednagar", "Darjeeling", "Delhi", "Durgapur", "Faizabad", "Faridabad", "Gaya", "Ghaziabad", "Ghazipur", "Hooghly", "Howrah", "Hyderabad", "Imphal", "Indore", "Jabalpur", "Jaipur", "Jamshedpur", "Jharkhand", "Jodhpur", "Kanpur", "Kolhapur", "Kolkata", "Kurukshetra", "Lucknow", "Maldah", "Mangalore", "Mohali", "Mumbai", "Murshidabad", "Mussoorie", "Mysore", "Nadia", "Nagpur", "New Delhi", "Noida", "North 24 parganas", "Panducherry", "Patna", "Poonch", "Pune", "Puri", "Purulia", "Raipur", "Rajkot", "Ranchi", "Rourkela", "Sahebganj", "Sambalpur", "Shilong", "Shimla", "South 24 Paraganas", "Sultanpur", "Surat", "Tamilnadu", "Vadodra", "Varanasi", "Vellore", "Warangal", "West midnapore", "Yadgir", "Zirakpur"],
                Disability_type: ["Visually Handicapped", "Locomotor Disability", "Deaf & Dumb", "Mental Illness", "Dwarfism", "Others"],
                Disability_percent: ["Less Than 10%", "Less Than 20%", "Less Than 30%", "Less Than 40%", "Less Than 50%", "Less Than 60%", "More Than 60%", "100%"],
                Blood_group: ["A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-", "Don't Know"],
                Profession: ["Businessman", "Civil Servant", "Designer", "Doctor", "Engineer", "Farmer", "Govt. Employee", "Teacher", "Lawyer", "Sportsman", "Student", "Politician", "Any private sector", "Others"],
                Religion: ["Hindu", "Muslim", "Christian", "Sikh", "Jain", "Parsi", "Buddhist", "Jewish", "Inter-Religion", "No religious belief"],
                Caste: ["General", "OBC", "SC", "ST", "Others", "Don't wish to specify"]
            };

            if (subcategories[selectedCategory]) {
                subcategories[selectedCategory].forEach(function(subcategory) {
                    const option = document.createElement("option");
                    option.value = subcategory;
                    option.textContent = subcategory;
                    subcategorySelect.appendChild(option);
                });
            }
        });
    </script>

    <?php
    if ($result !== null) {
        echo '<table>';
        echo '<tr>';
        echo '<th width="8%">Photo</th>';
        echo '<th>Name</th>';
        echo '<th>Gender</th>';
        echo '<th width="6%">Blood Group</th>';
        echo '<th>DOB</th>';
        echo '<th>State</th>';
        echo '<th>City</th>';
        echo '<th width="8%">Marital Status</th>';
        echo '<th width="10%">Disability Type</th>';
        echo '<th width="8%">Disability Percent</th>';
        echo '<th>Profession</th>';
        echo '<th>Religion</th>';
        echo '<th>Caste</th>';
        echo '</tr>';

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td><img src="' . $row["folder"] . '" alt="Profile Photo" class="profile-photo" height="120px" width="120px"></td>';
                echo '<td>' . $row["Name"] . '</td>';
                echo '<td>' . $row["Gender"] . '</td>';
                echo '<td>' . $row["Blood_group"] . '</td>';
                echo '<td>' . $row["DOB"] . '</td>';
                echo '<td>' . $row["State"] . '</td>';
                echo '<td>' . $row["City"] . '</td>';
                echo '<td>' . $row["Marital_status"] . '</td>';
                echo '<td>' . $row["Disability_type"] . '</td>';
                echo '<td>' . $row["Disability_percent"] . '</td>';
                echo '<td>' . $row["Profession"] . '</td>';
                echo '<td>' . $row["Religion"] . '</td>';
                echo '<td>' . $row["Caste"] . '</td>';
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="8">No results found.</td></tr>';
        }

        echo '</table>';
    }
    ?>

    <?php
    $con->close();
    ?>
</body>

</html>