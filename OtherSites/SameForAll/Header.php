<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=MedievalSharp' rel='stylesheet'>
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
          font-family: 'MedievalSharp';font-size: 2%;
          background-image: url(/othersites/pictures/reka.jpg);
          background-repeat: no-repeat;
          background-position: center;
          background-attachment: fixed;
          background-size: cover;
          margin: auto;
          padding: 0;
          padding-bottom: 5rem;
          padding-top: 15px;
          box-sizing: inherit;
        }
        .transparent{
          margin: 15px auto;
          margin-bottom: 50px;
          font-family: 'MedievalSharp';font-size: 22px;
          background-color: #8B4513;
          background-image: url(/othersites/pictures/pergamen.jpg);
          background-repeat: no-repeat;
          background-position: center;
          background-attachment: fixed;
          background-size: cover;
          border: 2px solid black;
          opacity: 0.90;
          z-index: -1;
          font-size: 21px;
          padding: 20px;
          border-radius: 20px;
          width: 90%;
        }
        .transparent p{
          font-family: 'MedievalSharp';font-size: 22px;
        }
        .navbar{
          background-image: url(/othersites/pictures/drevo.jpg);
          background-repeat: no-repeat;
          background-position: center;
          background-attachment: fixed;
          background-size: cover;
          padding: 5px;
          margin-left: 3px;
          border-radius: 8px;
          border: 3px solid black;
        }
        .navbar button{
            background-color: #666;
          color:#fff;
          font-size: 15px;
          padding: 8px 8px;
          border-radius: 30px;
          justify-content:center;
          text-align:start;
          width: 60px;
        }

        .navbar-brand{
          background-color:aquamarine;
          color:#fff;
          font-size: 15px;
          border-radius: 30px;
          margin: auto;
          margin-top:3px;
          min-width: 100px;
          max-width: 100px;
          text-align: center;
        }
        .nav-link{
          background-color: #666;
          color:#fff;
          font-size: 15px;
          border-radius: 30px;
          margin: auto;
          margin-top:3px;
          min-width: 100px;
          max-width: 100px;
          text-align: center;
        }
        .dropdown-menu{
          padding:0;
          background-color: transparent;
          border: 0;
          text-align: center;
          margin: auto;
        }

        .li div{
          margin: AUTO;
          justify-content: center;
          opacity: 0;
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
          text-align: center;
          background-image: url(/othersites/pictures/drevo.jpg);
          background-repeat: no-repeat;
          background-position: center;
          background-attachment: fixed;
          background-size: cover;
          border: 2px solid black;
          z-index: -1;
          font-size: 21px;
          padding: 20px;
          position:absolute;
          margin-top: 10px;
          right: 0;
          left: 0;
          bottom: 0;
          border-top-right-radius: 23px;
          border-top-left-radius: 23px;
        }
    </style>
</head>
<body>


      <?php
        echo "<nav class='navbar navbar-expand-lg'>";
        echo "<a class='navbar-brand' href='/'>Witcherinie</a>";
        echo "<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup' aria-expanded='false' aria-label='Toggle navigation'>";
        echo "<span class='navbar-toggler-icon'>Vyber</span>";
        echo "</button>";
        echo "<div class='collapse navbar-collapse' id='navbarNavAltMarkup'>";
        echo "<div class='navbar-nav'>";
        echo "<a class='nav-item nav-link' href='/othersites/onas'>O Nás</a>";
        echo "<li class='nav-item dropdown'>";
        echo "<a class='nav-link btn-secondary' href='' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Brnění</a>";
        echo "<div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>";
        echo "<a class='nav-item nav-link' href='/othersites/helma'>Helma</a>";
        echo "<a class='nav-item nav-link' href='/othersites/torzo'>Torzo</a>";
        echo "<a class='nav-item nav-link' href='/othersites/boty'>Boty</a>";
        echo "</div>";
        echo "</li>";
        echo "<li class='nav-item dropdown'>";
        echo "<a class='nav-link btn-secondary' href='' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Zbraně</a>";
        echo "<div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>";
        echo "<a class='nav-item nav-link' href='/othersites/luk'>Luk</a>";
        echo "<a class='nav-item nav-link' href='/othersites/mec'>Meč</a>";
        echo "<a class='nav-item nav-link' href='/othersites/staff'>Staff</a>";
        echo "</div>";
        echo "</li>";
        echo "<a class='nav-item nav-link' href='/othersites/rasy'>Rasy</a>";

        if (isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] === true) 
        {
            echo "<a class='nav-item nav-link active' aria-current='page' href='/database/logout'>Log out</a>";
        } else 
        {
            echo "<a class='nav-item nav-link' href='/othersites/loginf'>Login</a>";
            echo "<a class='nav-item nav-link' href='/othersites/registerf'>Register</a>";
        }
      ?>
    </div>
  </div>
</nav>