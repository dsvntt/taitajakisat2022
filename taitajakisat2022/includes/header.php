<header>
    <img src="img/logo/Logo dark.svg" alt="Ruosteinen Rauta Oy Logo">

    <?php if(!isset($_COOKIE['user'])): ?>

    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
        <li><a href="index.php">Etusivu</a></li>
        <li><a href="template.php">Esimerkkisivu</a></li>
        <li><button id="topbar-button"><a href="login.php">Kirjaudu</a></button></li>
    </ul>

    <?php else: ?>

    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
        <li><a href="index.php">Etusivu</a></li>
        <li><a href="template.php">Esimerkkisivu</a></li>
        <li><button id="topbar-button"><a href="functions/logout.php">Kirjaudu ulos</a></button></li>
    </ul>

    <?php endif; ?>

</header>