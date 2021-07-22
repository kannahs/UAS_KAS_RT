<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
</head>
<body>
    <div id="container">
    <header>
        <h1>RT 001 / 03</h1>
    </header>
    <nav>
        <a href="<?= base_url('/warga');?>" class="active">Home</a>
        <a href="<?= base_url('/iuran');?>">Iuran</a>
        <a href="<?= base_url('/contact');?>">Kontak</a>
        <a href="<?= base_url('/admin/warga');?>">Admin</a>
    </nav>
    <section id="wrapper">
        <section id="main">
   