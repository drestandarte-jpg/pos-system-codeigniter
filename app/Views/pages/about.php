<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple POS System - About</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <nav class="navbar"><h2>Simple POS System</h2><div>
        <a href="<?= site_url('/') ?>">Home</a>
        <a href="<?= site_url('about') ?>">About</a>
        <a href="<?= site_url('customers') ?>">Customers</a>
        <a href="<?= site_url('users') ?>">Users</a>
    </div></nav>
    <main class="container"><section class="card">
        <h1>About This System</h1>
        <p>This project is a basic Point-of-Sale system created using CodeIgniter 4 and PHP.</p>
        <p>Customer and staff records are temporarily stored in static PHP arrays.</p>
    </section></main>
</body>
</html>
