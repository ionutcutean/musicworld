<?php 
include 'main.php';
$header = '<div class="top">
<div class="navigation">
    <a href="index.php">Music World</a>
    <form class="navigation__form" action="search.php" method="get">
        <div class="navigation__searchbar__group">
            <input name="searchString" class="navigation__searchbar" type="text" placeholder="cautare...">
            <button type="submit">&#x1F50E;</button>
        </div>
    </form>
    '.$menu.' 
    <img id="open-mobile-menu" class="mobile-icon" src="./assets/icons/menu.png" alt="open-menu"/>
    <div id="mobile-menu" class="mobile-menu">'.$mobilemenu.'
    </div>
</div>
</div>';