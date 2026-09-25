<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple POS System - Home</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <nav class="navbar"><h2>Simple POS System</h2><div>
        <a href="<?= site_url('/') ?>">Home</a>
        <a href="<?= site_url('about') ?>">About</a>
        <a href="<?= site_url('customers') ?>">Customers</a>
        <a href="<?= site_url('users') ?>">Users</a>
    </div></nav>
    <main class="container"><section class="hero">
        <h1>Welcome to the Point-of-Sale System</h1>
        <p>A basic CodeIgniter 4 POS website with customer and staff accounts.</p>
        <a class="button" href="<?= site_url('customers') ?>">View Customers</a>
        <a class="button" href="<?= site_url('users') ?>">View Users</a>
    </section></main>
</body>
</html>
