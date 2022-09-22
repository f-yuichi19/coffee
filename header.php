<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>COFFEE</title>
    <meta name="description" content="テキストテキストテキストテキストテキストテキストテキストテキス">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" 
    href="<?php echo get_template_directory_uri(); ?>\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&family=Merriweather&family=Noto+Sans+JP&family=Zen+Maru+Gothic:wght@500&display=swap" rel="stylesheet">
    <script src="main.js"></script>
    <?php wp_head(); ?>
  </head>

  <body>
    <header>
      <section id="header">
        <div class="container">
          <div class="row">
            <nav>
              <ul>
                <li><a href="<?php echo home_url(); ?>">HOME</a></li>
                <li><a href="<?php echo home_url(); ?>\menu\">MENU</a></li>
                <li><a href="<?php echo home_url(); ?>\about\">ABOUT</a></li>
              </ul>
            </nav>
            <a href="<?php echo home_url(); ?>"><h1 class="site-title">COFFEE SHOP</h1></a>
          </div>
        </div>
      </section>
    </header>