<?php
$c_name = $this->request->getParam('controller');
$a_name = $this->request->getParam('action');

// echo $a_name;
// exit;
?>

<!-- <nav class="navbar navbar-expand-lg navbar-light "> -->
<nav class="top-nav">
    <!-- Title -->
    <div class="top-nav-title">
        <a href="<?= $this->Url->build('/') ?>"><span>Cake</span>PHP</a>
    </div>

    <!-- Links -->
    <ul class="top-nav-links">

        <?php foreach ($menus as $key => $menu) : ?>

            <?php if (empty($menu->submenus)) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?= $menu->name; ?></a>
                </li>
            <?php else : ?>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <?= $menu->name; ?>
                    </a>
                    <div class="dropdown-menu">
                        <?php foreach ($menu->submenus as $key => $submenu) : ?>
                            <a class="dropdown-item" href="#"><?= $submenu->name ?></a>
                        <?php endforeach; ?>
                    </div>
                </li>

            <?php endif; ?>

        <?php endforeach; ?>

    </ul>
</nav>