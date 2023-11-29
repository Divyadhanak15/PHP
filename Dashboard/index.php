<?php 
	$connect=mysqli_connect("localhost","root","","mcaaa1");
	$query="SELECT * FROM `mysqlpersonaldetail`";
	$execute_query=mysqli_query($connect,$query);
    $num=mysqli_num_rows($execute_query);
	for($i=1;$i<=$num;$i++)
	{
		$fetch_my_data=mysqli_fetch_row($execute_query);
	//	print_r($fetch_my_data[1]);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Designed by Dr. Ripal Ranpara for student Activity Project Assignment-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Dashboard</title>
    <!-- Add Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        
        #header {
            background: linear-gradient(135deg, #acf1ff, #c47ac0);
            color: black;
            text-align: left;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        
        #header h1 {
            font-size: 28px;
            margin: 0;
            font-weight: bold;
        }
        
        #sidebar {
            background: #043e71;
            color: #fff;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        
        #sidebar ul {
            list-style: none;
            padding: 0;
        }
        
        #sidebar li {
            margin-bottom: 10px;
        }
        
        #sidebar li a {
            color: white;
            text-decoration: none;
        }
        
        #sidebar .list-group-item {
            background: transparent;
            border: none;
            color: black;
        }
        
        #sidebar .list-group-item:hover {
            background: black;
        }
        
        #main-content {
            padding: 20px;
        }
        
        .section-title {
            background: linear-gradient(135deg, #c47ac0, #debac0);
            color: black;
            text-align: center;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        
        .dashboard-item {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            background: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-family: 'Arial', sans-serif;
        }
        
        #footer {
            background: linear-gradient(135deg, #7c1c5c, black);
            color: #fff;
            text-align: center;
            padding: 15px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        
        * Button 1: Ocean Blue */ .ocean-blue-button {
            background: linear-gradient(135deg, #006a88, #0091ad);
            color: #fff;
        }
        /* Button 2: Sunset Orange */
        
        .sunset-orange-button {
            background: linear-gradient(135deg, #ff8c42, #ffbc3b);
            color: #fff;
        }
        /* Button 3: Spring Green */
        
        .spring-green-button {
            background: linear-gradient(135deg, #72b01d, #97cc11);
            color: #fff;
        }
        /* Button 4: Royal Purple */
        
        .royal-purple-button {
            background: linear-gradient(135deg, #7c53c3, #a44bc5);
            color: #fff;
        }
        /* Button 5: Ruby Red */
        
        .ruby-red-button {
            background: linear-gradient(135deg, #cb1e52, #de6b4b);
            color: #fff;
        }
        /* Button 6: Goldenrod Yellow */
        
        .goldenrod-yellow-button {
            background: linear-gradient(135deg, #ffbf3f, #ffb344);
            color: #fff;
        }
        /* Button 7: Sky Blue */
        
        .sky-blue-button {
            background: linear-gradient(135deg, #31a7ff, #3abeff);
            color: #fff;
        }
        /* Common Button Styles */
        
        .gradient-button {
            border: none;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3">
                <h2>Sidebar</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="#">Home</a></li>
                    <li class="list-group-item"><a href="#">Achivements</a></li>
                    <li class="list-group-item"><a href="#">Project</a></li>
                </ul>
                <h2>My Social Profiles</h2>
                <ul class="list-group">
                    <li class="list-group-item"><a href="https://sites.google.com/view/divyadhanak/home" target="_blank">Google Site</a></li>
                    <li class="list-group-item"><a href="https://www.linkedin.com/in/divya-soni-27bb8b287?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">LinkedIn</a></li>
                    <li class="list-group-item"><a href="https://www.instagram.com/divyaa._.150/" target="_blank">Blog</a></li>
                    <li class="list-group-item"><a href="https://github.com/Divyadhanak15" target="_blank">GitHub</a></li>
                </ul>
            </nav>
            <!-- Main content -->
            <main class="col-md-9">
                <div id="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Divya Dhanak</h1>
                            </div>
                            <div class="col-md-6">
                                <img src="logo.jpg" alt="Logo" width="50" class="float-right">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="dashboard-item">
                        <div id="about-me" class="section-title">
                            <h2>About Me</h2>
                            
                        </div>
                        <p><?php echo $fetch_my_data[1]; ?></p>
						
                       
                    </div>
                    <div class="dashboard-item">
                        <div id="my-skillset" class="section-title">
                            <h2>My Skillset</h2>
                        </div>
                      <h3 align="left">Languages and Tools:</h3>
                        <p align="center">
                            <a href="https://getbootstrap.com" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/bootstrap/bootstrap-plain-wordmark.svg" alt="bootstrap" width="40" height="40" /> </a>
                            <a href="https://www.cprogramming.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/c/c-original.svg" alt="c" width="40" height="40" /> </a>
                            <a href="https://www.w3schools.com/cpp/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/cplusplus/cplusplus-original.svg" alt="cplusplus" width="40" height="40" /> </a>
                            <a href="https://git-scm.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/git-scm/git-scm-icon.svg" alt="git" width="40" height="40" /> </a>
                            <a href="https://www.w3.org/html/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40" /> </a>
                            <a href="https://www.w3schools.com/css/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" width="40" height="40" /> </a>
                            <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40" /> </a>
                            <a href="https://www.python.org" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/python/python-original.svg" alt="python" width="40" height="40" /> </a>
                        </p>
                    </div>
                    <div class="dashboard-item">
                        <div id="assignments" class="section-title">
                            <h2>Assignments</h2>
                        </div>
                        <div class="btn-group">
                            <button class="ocean-blue-button gradient-button"><a href="https://github.com/vishwavyas/web_dev_php_script/tree/main/task1">Task 1</a></button>
                            <button class="sunset-orange-button gradient-button"><a href="https://github.com/vishwavyas/web_dev_php_script/tree/main/task2">Task 2</a></button>
                            <button class="spring-green-button gradient-button"><a href="https://github.com/vishwavyas/web_dev_php_script/tree/main/Task%203">Task 3</a></button>
                            <button class="royal-purple-button gradient-button">Task 4</button>
                            <button class="ruby-red-button gradient-button">Task 5</button>
                            <button class="goldenrod-yellow-button gradient-button">Minor Project Module</button><br>

                            <button class="spring-green-button gradient-button">Database  Module</button>
                        </div>
                    </div>
                    <div class="dashboard-item">
                        <div id="project-details" class="section-title">
                            <h2>My Project Details</h2>
                        </div>
                        <p>1.Hospital Management System, 2.Restaurant Management System,3. Shopping Cart
                        </p>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <div id="footer">
        <h3>Footer Title</h3>
        <img src="footer-logo.png" alt="Footer Logo" width="100">
    </div>

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
