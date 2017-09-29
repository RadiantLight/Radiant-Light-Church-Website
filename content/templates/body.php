<body class="home">
  <!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
      <div class="navbar-header">
        <!-- Button for smallest screens -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><img src="/assets/images/logo.png" alt="Radiant Light Logo"></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav pull-right">
          <li class="active"><a href="<?= $routes->generate('home') ?>">HOME</a></li>
          <li class="active"><a href="<?= $routes->generate('about') ?>">ABOUT</a></li>
          <li class="active"><a href="<?= $routes->generate('ministries') ?>">MINISTRIES</a></li>
          <li class="active"><a href="<?= $routes->generate('calendar') ?>">CALENDAR</a></li>
          <li class="active"><a href="<?= $routes->generate('connect') ?>">CONNECT</a></li>
          <li class="active"><a href="https://radiantlightchurch.breezechms.com/give/online" target="new">GIVE</a></li>
        </ul>
      </div>
    </div>
  </div>

  <header id="head">
    <div class="container">
      <div class="row">
        <h1 class="lead">WELCOME TO RADIANT LIGHT CHURCH!</h1>
        <p class="tagline">Thank you for taking the time to visit our website. We exist to: ignite passion, love deeply, and bring transformation.</p>
      </div>
    </div>
  </header>
