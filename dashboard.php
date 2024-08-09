<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="\stage\js\script.js"></script>
    <link rel="stylesheet" type="text/css" href="\stage\css\dashboard.css?version=10">
</head>
<?php include "security.php"; ?>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li class="active"><a href="#home">
                <i class="fas fa-home"></i>
                <span class="link-name">Home</span>
            </a></li>
            <li><a href="#settings">
                <i class="fas fa-cog"></i>
                <span class="link-name">Settings</span>
            </a></li>
            <li><a href="#profile">
                <i class="fas fa-user"></i>
                <span class="link-name">Profile</span>
            </a></li>
            <li><a href="#help">
                <i class="fa-solid fa-question"></i>
                <span class="link-name">Help</span>
            </a></li>
            <li><a href="logout.php">
                <i class="fas fa-sign-out-alt"></i>
                <span class="link-name">Logout</span>
            </a></li>
        </ul>
    </div>
    <section class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                    <i class="fa-solid fa-bell" alt=""></i>
                    <div class="img-case">
                        <img src="\stage\imges\user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="home-content">
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="card-details">
                            <h3>Charts</h3>
                            <p>Yesterday</p>
                        </div>
                        <i class="fas fa-chart-line card-icon"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-details">
                            <h3>Team</h3>
                            <p>10 members</p>
                        </div>
                        <i class="fas fa-user-friends card-icon"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-details">
                            <h3>System</h3>
                            <p>optimized</p>
                        </div>
                        <i class="fas fa-cogs card-icon"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-details">
                            <h3>Profit</h3>
                            <p>month of august</p>
                        </div>
                        <i class="fas fa-dollar-sign card-icon"></i>
                    </div>
            </div>
        </div>
            <div class="main-content">
                <div class="table-content">
                    <div class="report-header">
                        <div class="title">
                            <h2>Users </h2>
                            <button class="btn">View All</button>
                        </div>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>email</th>
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
                        <li>
                            <img src="\stage\imges\update.png" alt="Notification 1">
                            <div class="notification-text">
                                <p>system update</p>
                                <span>2 hours ago</span>
                            </div>
                        </li>
                        <li>
                            <img src="\stage\imges\user1.png" alt="Notification 2">
                            <div class="notification-text">
                                <p>transaction validation</p>
                                <span>1 day ago</span>
                            </div>
                        </li>
                        <li>
                            <img src="\stage\imges\user2.png" alt="Notification 3">
                            <div class="notification-text">
                                <p>access problem</p>
                                <span>3 days ago</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>
</html>