<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="/public/css/bootstrap.min.css" rel="stylesheet" >
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

  <link rel="shortcut icon" href="data:image/png;base64,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" />
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
  <title><?php echo SITENAME; ?></title>
</head>
<body>
  <?php require APPROOT . '/views/inc/navbar.php'; ?>

  
