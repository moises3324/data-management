<?php
$menu = basename($_SERVER['PHP_SELF'], ".php");
?>
<div class="w3-sidebar w3-bar-block w3-collapse w3-border-right" id="mySidebar">
    <div class="w3-padding-small">
        <button class="w3-bar-item w3-button w3-large w3-hide-large" id="btnCloseMenu">Close &times;</button>
        <a href="../views/dashboard.php" class="w3-bar-item w3-button
            <?php echo ($menu == 'dashboard') ? 'w3-leftbar w3-border-blue w3-pale-blue' : ''; ?>">
            <div class="menuItem">
                <div class="menuIcon">
                    <i class="mdi mdi-chart-pie"></i>
                </div>
                <div class="menuName">
                    Dashboard
                </div>
            </div>
        </a>
        <a href="../views/formularios.php" class="w3-bar-item w3-button
            <?php echo ($menu == 'formularios' or $menu == 'nuevo-formulario') ? 'w3-leftbar w3-border-blue w3-pale-blue' : ''; ?>">
            <div class="menuItem">
                <div class="menuIcon">
                    <i class="mdi mdi-form-select"></i>
                </div>
                <div class="menuName">
                    Formularios
                </div>
            </div>
        </a>
        <a href="../views/mantenedores.php" class="w3-bar-item w3-button
            <?php echo ($menu == 'mantenedores') ? 'w3-leftbar w3-border-blue w3-pale-blue' : ''; ?>">
            <div class="menuItem">
                <div class="menuIcon">
                    <i class="mdi mdi-clipboard-edit"></i>
                </div>
                <div class="menuName">
                    Mantenedores
                </div>
            </div>
        </a>

    </div>
</div>