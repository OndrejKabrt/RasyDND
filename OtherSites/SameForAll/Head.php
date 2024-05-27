<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Witcherinie</title>
    <style>
        html{
          height: 100%;
          box-sizing: border-box;
        }
        body {
          width: 80%;
          position: relative;
          min-height: 100%;
          font-family: Arial, sans-serif;
          background-image: url(DarkForestWithMoon.jpg);
          background-repeat: no-repeat;
          background-position: center;
          background-attachment: fixed;
          background-size: cover;
          margin: 0 auto;
          padding: 0;
          padding-bottom: 5rem;
          padding-top: 32px;
          box-sizing: inherit;
        }
        .transparent{
          margin: 30px;
          background:transparent;
          border: 1px solid black;
          opacity: 0.6;
        }
        .transparent p {
          margin: 5%;
          front-weight: bold;
          color:#333;
        }
        .navbar {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            margin: 10px;
        }
        .container {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
        }
        h2 {
            margin-top: 0;
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        textarea {
          width: 100%;
          height: 200px; /* Adjust height as needed */
          padding: 10px;
          box-sizing: border-box;
          border: 1px solid #ccc;
          border-radius: 5px;
          font-family: Arial, sans-serif;
          font-size: 14px;
          line-height: 1.5;
        }

        textarea:focus {
          outline: none;
          border-color: #007bff; /* Change border color when focused */
          box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Add a subtle shadow when focused */
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        footer{
          background: grey;
          font-size: 18px;
          padding: 35px;
          text-align: center;
          position: absolute;
          right: 0;
          left: 0;
          bottom: 0;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Witcherinie</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="/ONas">O Nás</a>

      <?php
        $dropdownBrneni = [
          ["name" => "Helma", "link" => "/Helma"],
          ["name" => "Torzo", "link" => "#another-action"],
          ["name" => "Boty", "link" => "#something-else"]
        ];

        echo "<div class='dropdown'>";
        echo "<button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Brnění</button>";
        echo "<div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>";
        foreach ($dropdownBrneni as $polozka) {
            echo "<a class='dropdown-item' href='{$polozka['link']}'>{$polozka['name']}</a>";
        }
        echo "</div>";
        echo "</div>";



        if (isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] === true) {
            echo "<a class='nav-item nav-link active' aria-current='page' href='/database/logout'>Log out</a>";
        } else {
            echo "<a class='nav-item nav-link' href='/Login'>Login</a>";
            echo "<a class='nav-item nav-link' href='/Register'>Register</a>";
        }

        
      ?>
    </div>
  </div>
</nav>









