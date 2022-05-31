<?php
include 'mysql.php';
$menu = '';
    $mobilemenu = '';
    if(isset($_SESSION['logged_user']))
    {
        $menu = '<ul class="navigation__items">
        <li class="navigation__items__item"><a href="index.php">home</a></li>
        <li class="navigation__items__item"><a href="category.php">category</a></li>
        <li class="navigation__items__item"><a href="about.php">about</a></li>
        <li class="navigation__items__item"><a href="profile.php?page=0">my account</a></li>
        <li class="navigation__items__item"><a href="logout.php">logout</a></li>
    </ul>';
        $mobilemenu = '<ul class="navigation__items__mobile">
        <li class="navigation__items__item"><a href="index.php">home</a></li>
        <li class="navigation__items__item"><a href="category.php">category</a></li>
        <li class="navigation__items__item"><a href="about.php">about</a></li>
        <li class="navigation__items__item"><a href="profile.php?page=0">my account</a></li>
        <li class="navigation__items__item"><a href="logout.php">logout</a></li>
    </ul>';
    }
    else{
        $menu = '<ul class="navigation__items">
        <li class="navigation__items__item"><a href="index.php">home</a></li>
        <li class="navigation__items__item"><a href="category.php">category</a></li>
        <li class="navigation__items__item"><a href="about.php">about</a></li>
        <li class="navigation__items__item"><a href="login.php">login</a></li>
        <li class="navigation__items__item"><a href="registration.php">register</a></li>
    </ul>';
        $mobilemenu = '<ul class="navigation__items__mobile">
        <li class="navigation__items__item"><a href="index.php">home</a></li>
        <li class="navigation__items__item"><a href="category.php">category</a></li>
        <li class="navigation__items__item"><a href="about.php">about</a></li>
        <li class="navigation__items__item"><a href="login.php">login</a></li>
        <li class="navigation__items__item"><a href="registration.php">register</a></li>
    </ul>';
    }
