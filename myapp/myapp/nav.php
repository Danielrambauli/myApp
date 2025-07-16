<nav>
    <ul>
        <li><a href="/index.php" <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'class="active"' : ''; ?>>Home</a></li>
        <li><a href="/features.php" <?php echo basename($_SERVER['PHP_SELF']) == 'features.php' ? 'class="active"' : ''; ?>>Features</a></li>
        <li><a href="/contact.php" <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'class="active"' : ''; ?>>Contact</a></li>
    </ul>
</nav>