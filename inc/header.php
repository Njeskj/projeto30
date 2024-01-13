<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reino Textual</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      margin-bottom: 60px; /* Ajuste para evitar sobreposição do rodapé */
    }
    #sidebar {
        margin-top: 60px;
    }
    #sidebar h2 {
        border-bottom: 1px solid #ddd;
        text-transform: uppercase;
    }
    #principal {
        padding-top: 60px;
        border-left: 1px solid #ddd;
        padding-bottom: 60px;
    }
    section {
      margin-top: 30px;
    }
    .fixed-sidebar {
      transition: margin .5s;
    }
    .fixed-top {
      position: fixed;
      top: 0;
      width: 100%;
    }
    .solid-divider {
      border-right: 1px solid #ddd;
      height: 100vh;
      position: fixed;
      margin-left: -15px; /* Ajuste para coincidir com a margem do sidebar */
    }
  </style>
</head>
<body>