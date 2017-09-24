<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Task</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>styles/style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.0/knockout-min.js"></script>
    <script>
    <?php echo "var BASEURL = \"" . base_url() . "\";"; ?>
    </script>
</head>
<body>

<div class="container" id="taskwrapper">
    <div class="header clearfix">
      <h3 class="text-muted">PHP & MYSLQ TASK</h3>
    </div>
    <div class="jumbotron">
      <h1 class="display-3">/ GET</h1>
      <h4 style="font-weight:200"><span data-bind="text : title_bar"></span></h4>
      <div style="border: 2px solid rgba(179, 179, 253, 0.22); border-radius: 20px; padding: 40px; box-shadow: 0 0 10px blue;">
          <p class="lead text-left" style="word-break: break-all "><span data-bind="text: json_string"></span></p>
      </div>
    </div>
</div> <!-- /container -->
    
<script type="text/javascript" src="<?php echo base_url();?>main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>