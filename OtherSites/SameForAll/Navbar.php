</head>
<body>

<nav class="navbar navbar-expand-lg">
  <a class="btn btn-secondary" href="/">Witcherinie</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">Vyber</span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="btn btn-secondary" href="/ONas">O Nás</a>

      <?php
        $dropdownBrneni = [
          ["name" => "Helma", "link" => "/Helma"],
          ["name" => "Torzo", "link" => "#another-action"],
          ["name" => "Boty", "link" => "#something-else"]
        ];
        echo "<li class='nav-item dropdown'>";
        echo "<a class='nav-link dropdown-toggle' href='' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Brnění</a>";
        echo "<div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>";
        foreach ($dropdownBrneni as $polozka) {
            echo "<b class='dropdown-item' href='{$polozka['link']}'>{$polozka['name']}</b>";
        }
        echo "</div>";
        echo "</li>";


        if (isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] === true) {
            echo "<a class='btn btn-secondary nav-link active' aria-current='page' href='/database/logout'>Log out</a>";
        } else {
            echo "<a class='btn btn-secondary' href='/Login'>Login</a>";
            echo "<a class='btn btn-secondary' href='/Register'>Register</a>";
        }

        
      ?>
    </div>
  </div>
</nav>