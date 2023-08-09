<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DashBoard</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>


  <!-- font  -->
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

  <!-- material icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
</head>

<body>
  <div class="grid-container">
    <!-- header 
        -->
    <header class="header">
      <div class="menu-icon" onclick="openSidebar()">
        <span class="material-icons-outlined"> menu </span>
      </div>
      <div class="header-left">
        <span class="material-icons-outlined"> search </span>
      </div>
      <div class="header-right">
        <span class="material-icons-outlined">notifications</span>
        <span class="material-icons-outlined"> mail </span>
        <span class="material-icons-outlined"> account_circle </span>
      </div>
    </header>
    <!-- sidebar -->
    <aside id="sidebar">
      <div class="sidebar-title">
        <div class="sidebar-brand">
          <span class="material-icons-outlined"> inventory </span>REHUB ADMIN
        </div>
        <span class="material-icons-outlined close-pointer " onclick="closeSidebar()">
          close
        </span>
      </div>

      <ul class="sidebar-list">
        <li class="sidebar-list-item"></li>
        <li class="sidebar-list-item">
          <span class="material-icons-outlined">
            dashboard </span>DashBoard
        </li>
        <li class="sidebar-list-item">
          <span class="material-icons-outlined">
            inventory_2 </span>
            <a href="add_product.php">Courses</a>
        </li>
        <!-- <li class="sidebar-list-item">
          <span class="material-icons-outlined">
            fact_check </span>Inventory
        </li> -->
        <li class="sidebar-list-item">
          <span class="material-icons-outlined">
           work </span>JOBS
        </li>
        <!-- <li class="sidebar-list-item">
          <span class="material-icons-outlined">
            shopping_cart </span>Sales Orders
        </li> -->
        <li class="sidebar-list-item">
          <span class="material-icons-outlined">
            poll </span>Reports
        </li>
        <li class="sidebar-list-item">
          <span class="material-icons-outlined">
            settings </span>Settings
        </li>
      </ul>
    </aside>
    <!-- main part -->
    <main class="main-container">
      <div class="main-title">
        <p class="font-weight-bold">DASHBOARD</p>
      </div>
      <div class="main-cards">
        <!-- first card -->
        <div class="card">
          <div class="card-inner">
            <p class="text-primary">USERS</p>

            <span class="material-icons-outlined text-blue">inventory_2</span>
          </div>
          <span class="text-primary font-weight-bold">249</span>
        </div>

        <!-- second card -->
        <div class="card">
          <div class="card-inner">
            <p class="text-primary">COURSES</p>

            <span class="material-icons-outlined text-orange">add_shopping_cart</span>
          </div>
          <span class="text-primary font-weight-bold">83</span>
        </div>
        <!-- third cardd -->
        <div class="card">
          <div class="card-inner">
            <p class="text-primary">SALES ORDERS</p>

            <span class="material-icons-outlined text-green">shopping_cart</span>
          </div>
          <span class="text-primary font-weight-bold">79</span>
        </div>
        <!-- fourth card -->
        <div class="card">
          <div class="card-inner">
            <p class="text-primary">INVENTORY ALERTS</p>

            <span class="material-icons-outlined text-blue">notifications</span>
          </div>
          <span class="text-primary font-weight-bold">56</span>
        </div>

      </div>

      <div class="charts">
        <div class="charts-card">
          <p class="chart-title">Top 5 Products</p>
          <div id="bar-chart"></div>
        </div>

        <div class="charts-card">
          <p class="chart-title">Purchase and Sales Orders</p>
          <div id="area-chart"></div>
        </div>
      </div>
    </main>
  </div>
  <!-- scripts -->
  <!-- apexCharts library-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.41.1/apexcharts.min.js"></script>
  <!-- js script -->
  <script src="./script.js"></script>
</body>

</html>