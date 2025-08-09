<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --maroon-red: #800020;
            --dark-maroon: #5a0018;
            --light-maroon: #a30029;
            --accent-blue: #3498db;
            --light-blue: #e6f2ff;
            --white: #ffffff;
            --light-gray: #f5f5f5;
            --dark-gray: #333333;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--light-gray);
            overflow-x: hidden;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background-color: var(--maroon-red);
            color: var(--white);
            transition: var(--transition);
            position: fixed;
            height: 100vh;
            z-index: 100;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar-header {
            padding: 20px;
            background-color: var(--dark-maroon);
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-header h3 {
            font-size: 1.3rem;
            animation: fadeIn 1s ease-in-out;
        }

        .sidebar-menu {
            padding: 20px 0;
        }

        .menu-item {
            padding: 12px 20px;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: var(--transition);
            border-left: 4px solid transparent;
        }

        .menu-item:hover {
            background-color: var(--dark-maroon);
            border-left: 4px solid var(--accent-blue);
        }

        .menu-item.active {
            background-color: var(--dark-maroon);
            border-left: 4px solid var(--accent-blue);
        }

        .menu-item i {
            margin-right: 10px;
            font-size: 1.1rem;
        }

        .menu-item span {
            font-size: 0.95rem;
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            margin-left: 250px;
            transition: var(--transition);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 25px;
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .header-left h2 {
            color: var(--dark-gray);
            font-size: 1.5rem;
            animation: slideInDown 0.5s ease-in-out;
        }

        .header-right {
            display: flex;
            align-items: center;
        }

        .user-profile {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .user-profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            object-fit: cover;
        }

        .user-profile span {
            font-weight: 500;
        }

        .toggle-sidebar {
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark-gray);
            margin-right: 20px;
            display: none;
        }

        .content {
            padding: 25px;
        }

        /* Cards Section */
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background-color: var(--white);
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            animation: fadeInUp 0.5s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .card-header h3 {
            font-size: 1rem;
            color: var(--dark-gray);
        }

        .card-header i {
            font-size: 1.5rem;
            color: var(--accent-blue);
        }

        .card-body h2 {
            font-size: 1.8rem;
            color: var(--maroon-red);
            margin-bottom: 5px;
        }

        .card-body p {
            font-size: 0.85rem;
            color: #777;
        }

        .card-footer {
            margin-top: 15px;
            font-size: 0.8rem;
            color: #777;
            display: flex;
            align-items: center;
        }

        .card-footer i {
            margin-right: 5px;
            color: #4CAF50;
        }

        /* Tables Section */
        .table-section {
            background-color: var(--white);
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            animation: fadeIn 0.8s ease-in-out;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .section-header h3 {
            font-size: 1.2rem;
            color: var(--dark-gray);
        }

        .section-header button {
            background-color: var(--accent-blue);
            color: var(--white);
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            transition: var(--transition);
        }

        .section-header button:hover {
            background-color: #2980b9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th {
            background-color: var(--light-blue);
            color: var(--dark-gray);
            padding: 12px 15px;
            text-align: left;
            font-weight: 600;
        }

        table td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
            color: #555;
        }

        table tr:last-child td {
            border-bottom: none;
        }

        table tr:hover td {
            background-color: #f9f9f9;
        }

        .status {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .status.active {
            background-color: #e6f7ee;
            color: #4CAF50;
        }

        .status.pending {
            background-color: #fff8e1;
            color: #FFC107;
        }

        .status.inactive {
            background-color: #ffebee;
            color: #F44336;
        }

        /* Quick Count Section */
        .quick-count {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .count-card {
            background-color: var(--white);
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            animation: fadeInUp 0.7s ease-in-out;
        }

        .count-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .count-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .count-header h4 {
            font-size: 1rem;
            color: var(--dark-gray);
        }

        .count-header i {
            font-size: 1.5rem;
            color: var(--maroon-red);
        }

        .count-body {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .count-value {
            font-size: 2rem;
            font-weight: 700;
            color: var(--maroon-red);
        }

        .count-change {
            display: flex;
            align-items: center;
            font-size: 0.9rem;
        }

        .count-change.positive {
            color: #4CAF50;
        }

        .count-change.negative {
            color: #F44336;
        }

        .count-change i {
            margin-right: 5px;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .sidebar {
                width: 70px;
                overflow: hidden;
            }

            .sidebar-header h3, .menu-item span {
                display: none;
            }

            .menu-item {
                justify-content: center;
                padding: 15px 0;
            }

            .menu-item i {
                margin-right: 0;
                font-size: 1.3rem;
            }

            .main-content {
                margin-left: 70px;
            }
        }

        @media (max-width: 768px) {
            .toggle-sidebar {
                display: block;
            }

            .sidebar {
                left: -250px;
            }

            .sidebar.active {
                left: 0;
            }

            .main-content {
                margin-left: 0;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .quick-count {
                grid-template-columns: 1fr;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Toggle Animation */
        .sidebar.active {
            left: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h3>Admin Dashboard</h3>
            </div>
            <div class="sidebar-menu">
                <div class="menu-item active">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </div>
                <div class="menu-item">
                    <i class="fas fa-users"></i>
                    <span>Users</span>
                </div>
                <div class="menu-item">
                    <i class="fas fa-chart-bar"></i>
                    <span>Statistics</span>
                </div>
                <div class="menu-item">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </div>
                <div class="menu-item">
                    <i class="fas fa-file-alt"></i>
                    <span>Reports</span>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            <div class="header">
                <div class="header-left">
                    <h2>Dashboard SNOC X</h2>
                </div>
                <div class="header-right">
                    <div class="toggle-sidebar" id="toggleSidebar">
                        <i class="fas fa-bars"></i>
                    </div>
                    <div class="user-profile">
<img id="mountain-img" src="https://source.unsplash.com/800x500/?mountain" alt="Pegunungan" style="width: 100%; border-radius: 8px;">

<script>
    const imgElement = document.getElementById('mountain-img');

    function changeMountainImage() {
        // Ganti gambar setiap 5 detik, gambar random dari Unsplash
        imgElement.src = `https://source.unsplash.com/800x500/?mountain&sig=${Math.random()}`;
    }

    setInterval(changeMountainImage, 5000);
</script>
                        <span>Admin User</span>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="content">
                <!-- Cards -->
                <div class="cards">
                    <div class="card">
                        <div class="card-header">
                            <h3>Total Users</h3>
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="card-body">
                            <h2>2,453</h2>
                            <p>+12.5% from last month</p>
                        </div>
                        <div class="card-footer">
                            <i class="fas fa-arrow-up"></i>
                            <span>5.4% increase</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3>Total Revenue</h3>
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="card-body">
                            <h2>$34,210</h2>
                            <p>+8.2% from last month</p>
                        </div>
                        <div class="card-footer">
                            <i class="fas fa-arrow-up"></i>
                            <span>3.1% increase</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3>Active Projects</h3>
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <div class="card-body">
                            <h2>47</h2>
                            <p>+3 new this week</p>
                        </div>
                        <div class="card-footer">
                            <i class="fas fa-arrow-up"></i>
                            <span>1.2% increase</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3>Pending Tasks</h3>
                            <i class="fas fa-tasks"></i>
                        </div>
                        <div class="card-body">
                            <h2>24</h2>
                            <p>-5 from last week</p>
                        </div>
                        <div class="card-footer">
                            <i class="fas fa-arrow-down"></i>
                            <span>2.3% decrease</span>
                        </div>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="table-section">
                    <div class="section-header">
                        <h3>Recent Statistics</h3>
                        <button>View All</button>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Value</th>
                                <th>Change</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#12345</td>
                                <td>User Growth</td>
                                <td>1,234</td>
                                <td>+12.5%</td>
                                <td><span class="status active">Active</span></td>
                                <td><i class="fas fa-ellipsis-h"></i></td>
                            </tr>
                            <tr>
                                <td>#12346</td>
                                <td>Revenue</td>
                                <td>$8,750</td>
                                <td>+8.2%</td>
                                <td><span class="status active">Active</span></td>
                                <td><i class="fas fa-ellipsis-h"></i></td>
                            </tr>
                            <tr>
                                <td>#12347</td>
                                <td>Engagement</td>
                                <td>56.8%</td>
                                <td>-2.3%</td>
                                <td><span class="status pending">Pending</span></td>
                                <td><i class="fas fa-ellipsis-h"></i></td>
                            </tr>
                            <tr>
                                <td>#12348</td>
                                <td>Conversion</td>
                                <td>3.2%</td>
                                <td>+0.5%</td>
                                <td><span class="status active">Active</span></td>
                                <td><i class="fas fa-ellipsis-h"></i></td>
                            </tr>
                            <tr>
                                <td>#12349</td>
                                <td>Retention</td>
                                <td>78.5%</td>
                                <td>-5.1%</td>
                                <td><span class="status inactive">Inactive</span></td>
                                <td><i class="fas fa-ellipsis-h"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Quick Count Section -->
                <div class="quick-count">
                    <div class="count-card">
                        <div class="count-header">
                            <h4>Today's Visits</h4>
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="count-body">
                            <div class="count-value">1,245</div>
                            <div class="count-change positive">
                                <i class="fas fa-arrow-up"></i>
                                <span>12.5%</span>
                            </div>
                        </div>
                    </div>
                    <div class="count-card">
                        <div class="count-header">
                            <h4>New Signups</h4>
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="count-body">
                            <div class="count-value">87</div>
                            <div class="count-change positive">
                                <i class="fas fa-arrow-up"></i>
                                <span>5.4%</span>
                            </div>
                        </div>
                    </div>
                    <div class="count-card">
                        <div class="count-header">
                            <h4>Bounce Rate</h4>
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="count-body">
                            <div class="count-value">32.1%</div>
                            <div class="count-change negative">
                                <i class="fas fa-arrow-down"></i>
                                <span>2.3%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle Sidebar
        document.getElementById('toggleSidebar').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('active');
        });

        // Menu Item Active State
        const menuItems = document.querySelectorAll('.menu-item');
        menuItems.forEach(item => {
            item.addEventListener('click', function() {
                menuItems.forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card, .count-card');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });

            cards.forEach(card => {
                card.style.opacity = 0;
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'all 0.5s ease';
                observer.observe(card);
            });
        });
    </script>
</body>
</html>
