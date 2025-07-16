<?php
$page_title = "VUT Connect - Home";
$page_subtitle = "Your Campus Connection Platform";
include 'includes/header.php';
include 'includes/nav.php';
?>

<main>
    <div class="banner">
        <div class="banner-text">
            <h2>Welcome to VUT Connect</h2>
            <p>Find study partners, join events, and get campus updates</p>
        </div>
    </div>

    <section class="intro">
        <?php
        // Dynamic content could be pulled from database
        $features = [
            "Real-time campus connections",
            "Location-based study groups",
            "Academic resource sharing",
            "Event coordination system"
        ];
        ?>
        
        <h2>Why VUT Connect?</h2>
        <ul>
            <?php foreach($features as $feature): ?>
                <li><?php echo htmlspecialchars($feature); ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>

<?php include 'includes/footer.php'; ?>