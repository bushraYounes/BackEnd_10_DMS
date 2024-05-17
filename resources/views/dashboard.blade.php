<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <style>
        /* Sidebar styles */
        .sidebar {
            width: 250px;
            background-color: #f2f2f2;
            padding: 20px;
            float: left;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
        }

        .sidebar ul li a:hover {
            color: #000;
        }

        /* Main content styles */
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Folders</a></li>
            <li><a href="#">Documents</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h2>Welcome to the Dashboard</h2>
        <p>content Section</p>
    </div>
</body>

</html>