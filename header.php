<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/eb7e40ca41.js" crossorigin="anonymous"></script>

      <style>
        .navbar{
          overflow: hidden;
          position: fixed;
          top: 0;
          margin-bottom: 30px;
          width: 100%;
        }

        .sidebar{
          margin:0;
          margin-top: 3.5rem;
          padding: 0;
          width: 200px;
          background-color: #D7E9F7;
          position: fixed;
          height: 100%;
          overflow: auto;
        }
  
        /* Sidebar links */
        .sidebar a {
          display: block;
          color: black;
          padding: 20px;
          text-decoration: none;
        }

        /* Links on mouse-over */
        .sidebar a:hover:not(.active) {
          background-color: #555;
          color: white;
        }
  
        /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
        div.content {
          margin-left: 200px;
          padding: 60px 10px;
          height: 800px;
        }

        /* On screens that are less than 700px wide, make the sidebar into a topbar */
        @media screen and (max-width: 700px) {
        .sidebar {
          width: 100%;
          height: auto;
          position: relative;
        }
        .sidebar a {float: left;}
        div.content {margin-left: 0;}
      }
  
        /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
        @media screen and (max-width: 400px) {
        .sidebar a {
          text-align: center;
          float: none;
        }
        }
    </style>

    <title>Dashboard</title>
</head>
<body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </nav>
    </div>
    <div class="sidebar">
        <a  href="index.php">Jobs</a>
        <a  href="applied.php">Candidates Applied</a>
    </div>
