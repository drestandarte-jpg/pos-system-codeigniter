<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
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
        <h1><?= esc($title) ?></h1>
        <table><thead><tr><th>#</th><th>Username</th><th>Full Name</th><th>Role</th></tr></thead>
        <tbody><?php foreach ($users as $number => $user): ?>
            <tr>
                <td><?= $number + 1 ?></td>
                <td><?= esc($user['username']) ?></td>
                <td><?= esc($user['full_name']) ?></td>
                <td><?= esc($user['role']) ?></td>
            </tr>
        <?php endforeach; ?></tbody></table>
    </section></main>
</body>
</html>
