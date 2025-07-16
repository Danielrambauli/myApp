<?php
// features.php
$page_title = "VUT Connect - Features";
include 'includes/header.php';
include 'includes/nav.php';
?>

<style>
    /* Custom Styles for Features Page */
    .animated-banner {
        background: #003366;
        padding: 20px 0;
        overflow: hidden;
        position: relative;
        margin-bottom: 40px;
    }

    .scrolling-logos {
        display: flex;
        animation: scroll 20s linear infinite;
    }

    .scrolling-logos img {
        height: 60px;
        margin: 0 30px;
        filter: brightness(0) invert(1);
    }

    @keyframes scroll {
        0% { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
    }

    .feature-table {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        overflow: hidden;
    }

    .feature-table table {
        width: 100%;
        border-collapse: collapse;
    }

    .feature-table th {
        background: #002244;
        color: white;
        padding: 15px;
        text-align: left;
    }

    .feature-table td {
        padding: 15px;
        border-bottom: 1px solid #eee;
    }

    .feature-table tr:hover {
        background-color: #f8f9fa;
    }
</style>

<main>
    <!-- Animated Banner -->
    <div class="animated-banner">
        <div class="scrolling-logos">
            <img src="vut-logo.png" alt="VUT Logo">
            <img src="vut-logo.png" alt="VUT Logo">
            <img src="vut-logo.png" alt="VUT Logo">
            <img src="vut-logo.png" alt="VUT Logo">
        </div>
    </div>

    <!-- Features Table -->
    <section class="feature-table">
        <table>
            <tr>
                <th>Feature</th>
                <th>Description</th>
                <th>Availability</th>
            </tr>
            <tr>
                <td>📱 Real-Time Chat</td>
                <td>Instant messaging with classmates</td>
                <td>Available Now</td>
            </tr>
            <tr>
                <td>📍 Campus Network</td>
                <td>Find students in your area</td>
                <td>Available Now</td>
            </tr>
            <tr>
                <td>📅 Event Calendar</td>
                <td>Never miss campus activities</td>
                <td>Coming Soon</td>
            </tr>
            <tr>
                <td>📚 Study Groups</td>
                <td>Collaborative learning spaces</td>
                <td>In Development</td>
            </tr>
        </table>
    </section>

    <!-- Screenshots Section -->
    <div class="screenshots">
        <h2 style="margin: 40px 0 20px; color: #003366;">App Preview</h2>
        <div style="display: grid; gap: 20px; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
            <img src="mockup1.jpg" alt="Chat Interface" style="width:100%; border-radius:10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <img src="mockup2.jpg" alt="Map View" style="width:100%; border-radius:10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <img src="mockup3.jpg" alt="Events" style="width:100%; border-radius:10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>