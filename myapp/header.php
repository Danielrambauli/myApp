<?php
$page_title = isset($page_title) ? $page_title : "VUT Connect";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="/css/styles.css">
    <style>
        /* Dynamic banner based on page */
        .banner {
            background: linear-gradient(rgba(0,51,102,0.8), rgba(0,51,102,0.8)), 
                        url('/assets/banner-bg.jpg') center/cover;
        }
    </style>
</head>
<body>
    <header>
        <img src="/assets/logo.png" alt="VUT Connect Logo" class="logo">
        <h1>VUT Connect</h1>
        <p><?php echo $page_subtitle ?? "Connecting Students Across Campus"; ?></p>
    </header>