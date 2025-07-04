<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title }}</title>

  <!-- Icons & Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Flickity (if needed later) -->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

  <!-- Favicon -->
  <link rel="icon" href="/assets/abgblora/logo/racenewlogo.png" type="image/x-icon">

  <!-- Style -->
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
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: var(--light-gray);
      overflow-x: hidden;
    }

    /* SIDEBAR */
    .sidebar {
      width: 250px;
      background-color: var(--maroon-red);
      color: var(--white);
      position: fixed;
      height: 100vh;
      z-index: 1000;
      box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
      transform: translateX(-100%);
      transition: var(--transition);
    }

    .sidebar.active {
      transform: translateX(0);
    }

    .sidebar-header {
      padding: 20px;
      background-color: var(--dark-maroon);
      display: flex;
      justify-content: center;
      align-items: center;
      border-bottom: 1px solid rgba(255,255,255,0.1);
    }

    .sidebar-menu {
      padding: 20px 0;
    }

    .menu-item {
      padding: 12px 20px;
      display: flex;
      align-items: center;
      cursor: pointer;
      border-left: 4px solid transparent;
      transition: var(--transition);
    }

    .menu-item:hover,
    .menu-item.active {
      background-color: var(--dark-maroon);
      border-left: 4px solid var(--accent-blue);
    }

    .menu-item i {
      margin-right: 10px;
    }

    .main-content {
      flex: 1;
      transition: var(--transition);
      width: 100%;
    }

    .container {
      display: flex;
      min-height: 100vh;
      position: relative;
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

    .toggle-sidebar {
      font-size: 1.5rem;
      cursor: pointer;
      color: var(--dark-gray);
      margin-right: 20px;
      display: block;
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

    .content {
      padding: 25px;
    }

    .cards,
    .quick-count {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 20px;
      margin-bottom: 30px;
    }

    .card, .count-card {
      background-color: var(--white);
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.05);
      transition: var(--transition);
    }

    .card:hover, .count-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .card-header, .count-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
    }

    .card-body h2, .count-value {
      font-size: 2rem;
      color: var(--maroon-red);
    }

    .card-footer, .count-change {
      font-size: 0.9rem;
      color: #777;
      display: flex;
      align-items: center;
    }

    .table-section {
      background: var(--white);
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.05);
      overflow-x: auto;
    }

    table {
      width: 100%;
      min-width: 600px;
      border-collapse: collapse;
    }

    table th {
      background: var(--light-blue);
      padding: 12px 15px;
      text-align: left;
    }

    table td {
      padding: 12px 15px;
      border-bottom: 1px solid #eee;
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

    .overlay {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-color: rgba(0,0,0,0.5);
      z-index: 999;
      display: none;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .overlay.active {
      display: block;
      opacity: 1;
    }

    @media (min-width: 769px) {
      .sidebar { transform: translateX(0); }
      .main-content { margin-left: 250px; width: calc(100% - 250px); }
      .toggle-sidebar { display: none; }
    }

    @media (max-width: 768px) {
      .content { padding: 15px; }
      .card, .count-card { padding: 15px; }
      .card-body h2, .count-value { font-size: 1.5rem; }
    }

    @media (max-width: 576px) {
      .cards, .quick-count { grid-template-columns: 1fr; }
      .user-profile span { display: none; }
    }
  </style>
</head>
