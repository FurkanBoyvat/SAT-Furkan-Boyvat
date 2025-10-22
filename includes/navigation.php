<?php
?>
<nav class="navbar">
    <div class="nav-container">
        <div class="nav-logo">
            <a href="index.php">
                <i class="fas fa-graduation-cap"></i>
                <span><?php echo SITE_NAME; ?></span>
            </a>
        </div>
        
        <div class="nav-menu" id="nav-menu">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="index.php" class="nav-link active">Ana Sayfa</a>
                </li>
                <li class="nav-item">
                    <a href="kurslar.php" class="nav-link">Kurslar</a>
                </li>
                <li class="nav-item">
                    <a href="hakkinda.php" class="nav-link">Hakkımızda</a>
                </li>
                <li class="nav-item">
                    <a href="iletisim.php" class="nav-link">İletişim</a>
                </li>
                <li class="nav-item">
                    <a href="giris.php" class="nav-link btn-login">Giriş Yap</a>
                </li>
            </ul>
        </div>
        
        <div class="nav-toggle" id="nav-toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
</nav>
