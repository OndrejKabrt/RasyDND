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
          ["name" => "Helma", "link" => "/helma"],
          ["name" => "Torzo", "link" => "/torzo'"],
          ["name" => "Boty", "link" => "/boty"]
        ];
        echo "<li class='nav-item dropdown'>";
        echo "<a class='nav-link btn-secondary' href='' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Brnění</a>";
        echo "<div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>";
        /*
        echo "<a class='btn btn-secondary' href='/helma'>Helma</a>";
        echo "<a class='btn btn-secondary' href='/torzo'>Torzo</a>";
        echo "<a class='btn btn-secondary' href='/boty'>Boty</a>";
        */
        
        foreach ($dropdownBrneni as $polozka) {
            echo "<a class='btn btn-secondary' href='{$polozka['link']}'>{$polozka['name']}</a>";
          }
        echo "</div>";
        echo "</li>";
        if (isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] === true) {
            echo "<a class='btn btn-secondary nav-link active' aria-current='page' href='/database/logout'>Log out</a>";
        } else {
            echo "<a class='btn btn-secondary' href='/login'>Login</a>";
            echo "<a class='btn btn-secondary' href='/register'>Register</a>";
        }
      ?>
    </div>
  </div>
</nav>