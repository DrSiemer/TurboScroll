<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Turboscroll demo</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="keywords" content='turboscroll, scrolling, faster' />
    <meta name="description" content='A simple trick to scroll through content faster' />
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <div id="main">
      <div id="content_wrapper">
        <h2>Content</h2>
        <p>&nbsp;Normal scroll zone</p>
        <br/>
        <div id="content" class="scrollblock">
<?php
  
  for ($i=0; $i<=150; $i+=1) {
    $rnd = '';
    for ($j=0; $j<=mt_rand(1, 40); $j+=1) {
      $rnd .= chr(97 + mt_rand(0, 25));
    }
    $output .= '         <p>Line '.$i.': '.$rnd.'</p>'."\n";
  }
  echo $output.'<br/>';
  
?>
        </div>
      </div>
      
      <div id="turboscroll_wrapper">
        <h2>TurboScroll</h2>
        <p>&nbsp;Turbo scroll zone</p>
        <br/>
        <div id="turboscroll" class="scrollblock">
<?php
  
  echo $output.'<br/>';
  
?>
        </div>
      </div>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js"><\/script>')</script>
    <script src="js/main.js" type="text/javascript"></script>

  </body>
</html>