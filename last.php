<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="\stage\css\style.css?version=10">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f5f5f5;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            height: 100vh;
            width: 100%;
        }
        .sidebar {
            background-color: #095256;
            color: white;
            height: 100vh;
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
        }
        .sidebar h2 {
            text-align: center;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin: 30px 0;
        }
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            display: flex;
            align-items: center;
        }
        .sidebar ul li a:hover {
            text-decoration: underline;
        }
        .sidebar i {
            margin-right: 10px; 
        }
        .sidebar .link-name {
            font-size: 16px; 
        }
        .content {
            margin-left: 230px; 
            padding: 20px;
        }
        header {
            background-color: #095256;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            position: relative;
            margin-bottom: 20px;
        }
        .search-container {
            position: relative;
            width: 50%;
            margin: 0 auto;
        }
        .search-bar {
            width: 100%;
            padding: 10px 10px 10px 35px;
            border: 1px solid #ccc;
            border-radius: 20px;
        }
        .search-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }
        .main {
            display: flex;
            flex-direction: column;
        }
        .cards {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }
        .card {
            background-color: white;
            padding: 20px;
            flex: 1 1 calc(25% - 40px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            box-sizing: border-box;
        }
        .title {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .title h3 {
            margin: 0;
        }
        .title button {
            padding: 10px 20px;
            background-color: #095256;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .title button:hover {
            background-color: #073e40;
        }
        .main-content {
            display: flex;
            gap: 10px;
        }
        .table-content {
            flex-grow: 1.5;
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table-content h3 {
            margin: 0 0 20px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .table-content h3 button {
            padding: 10px 20px;
            background-color: #095256;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .table-content h3 button:hover {
            background-color: #073e40;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .side-list {
            flex-grow: 0;
            background: #fff;
            padding: 20px 30px;
            margin: 20px; 
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .side-list h3 {
            margin: 0 0 10px 0;
        }
        .side-list ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .side-list ul li {
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            align-items: center;
        }
        .side-list ul li img {
            margin-right: 10px;
        }
        .alert {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        .alert-success {
            background-color: #d4edda;
            color: #367845;
            border-color: #c3e6cb;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border-color: #f5c6cb;
        }
    </style>
</head>
<?php include "security.php" ; ?>
<body> 
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul> 
            <li><a href="#home">
                <i class="fas fa-home"></i>
                <span class="link-name">Home</span>
            </a></li>
            <li><a href="#settings">
                <i class="fas fa-cog"></i>
                <span class="link-name">Settings</span>
            </a></li>
            <li><a href="#profile">
                <i class="fas fa-user"></i>
                <span class="link-name">Profil</span>
            </a></li>
            <li><a href="logout.php">
                <i class="fas fa-sign-out-alt"></i>
                <span class="link-name">Logout</span>
            </a></li>
        </ul>
    </div>
    <div class ="content">
        <header> 
            <div class="search-container">
                <i class="fa-solid fa-bars search-icon"></i>
                <input type="text" class="search-bar" placeholder="Search...">
            </div>
        </header>
        <div class="main">
            <div class="cards">
                <div class="card">
                    <h3>Card 1</h3>
                    <p>................</p>
                </div>
                <div class="card">
                    <h3>Card 2</h3>
                    <p>.................</p>
                </div>
                <div class="card">
                    <h3>Card 3</h3>
                    <p>..............</p>
                </div>
                <div class="card">
                    <h3>Card 4</h3>
                    <p>..............</p>
                </div>
            </div>
            <div class="main-content">
                <div class="table-content">
                    <div class="report-header">
                        <div class="title">
                            <h2>Title</h2>
                            <button>View All</button>
                        </div>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Role</th>
                        </tr>

                        <?php 
                            $tableData = [
                                ['name' => 'syrine', 'title' => 'aaaaaaa', 'status' => 'aaaa', 'role' => 'bbbbb'],
                                ['name' => 'syrine', 'title' => 'aaaaaaaa', 'status' => 'aaaa', 'role' => 'bbbbb'],
                                ['name' => 'syrine', 'title' => 'aaaaaaaa', 'status' => 'aaaa', 'role' => 'bbbbb'],
                                ['name' => 'syrine', 'title' => 'aaaaaaaa', 'status' => 'aaaa', 'role' => 'bbbbb'],
                                ['name' => 'syrine', 'title' => 'aaaaaaaa', 'status' => 'aaaa', 'role' => 'bbbbb'],
                                ['name' => 'syrine', 'title' => 'aaaaaaaa', 'status' => 'aaaa', 'role' => 'bbbbb'],
                                ['name' => 'syrine', 'title' => 'aaaaaaaa', 'status' => 'aaaa', 'role' => 'bbbbb'],
                                ['name' => 'syrine', 'title' => 'aaaaaaaa', 'status' => 'aaaa', 'role' => 'bbbbb'],
                                ['name' => 'syrine', 'title' => 'aaaaaaaa', 'status' => 'aaaa', 'role' => 'bbbbb'],
                            ];
                        
                            foreach ($tableData as $row) : ?>
                                <tr>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['title']; ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                    <td><?php echo $row['role']; ?></td>
                                </tr>
                        <?php endforeach; ?> 
                    </table>
                </div>
                <div class="side-list">
                    <h3>Notifications</h3>
                    <ul>
                        <li><img src="https://via.placeholder.com/20" alt="notification-icon"> Notification 1</li>
                        <li><img src="https://via.placeholder.com/20" alt="notification-icon"> Notification 2</li>
                        <li><img src="https://via.placeholder.com/20" alt="notification-icon"> Notification 3</li>
                    </ul>
                </div> 
            </div>
        </div>
    </div>
</body>
</html>