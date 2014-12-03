<?
$styles = array('arta', 'ascetic', 'dark', 'default', 'far', 'github', 'googlecode', 'idea', 'ir_black', 'magula', 'monokai', 'rainbow', 'solarized_dark', 'solarized_light', 'sunburst', 'tomorrow', 'tomorrow-night-blue', 'tomorrow-night-bright', 'tomorrow-night', 'tomorrow-night-eighties', 'vs', 'zenburn');

$style = $styles[$_GET['style']];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>André Restivo : <?=$_GET['p']?></title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <style type="text/css">
      @import url(http://fonts.googleapis.com/css?family=Droid+Serif);
      @import url(http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz);
      @import url(http://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700,400italic);

      body {
        font-family: 'Droid Serif';
      }
      h1, h2, h3 {
        font-family: 'Yanone Kaffeesatz';
        font-weight: 400;
        margin-bottom: 0;
      }

      .remark-slide-content h1 { font-size: 3em; }
      .remark-slide-content h2 { font-size: 2em; }
      .remark-slide-content h3 { font-size: 1.6em; }
      .footnote {
        position: absolute;
        bottom: 3em;
        font-size: 50%;
      }
      li p { line-height: 1.25em; }
      .red { color: #fa0000; }
      .large { font-size: 2em; }
      li {
        text-align: left;
        margin:0 10px 10px 0;
      }
      a, a > code {
        color: rgb(249, 38, 114);
        text-decoration: none;
      }
      code {
        -moz-border-radius: 5px;
        -web-border-radius: 5px;
        background: #e7e8e2;
        border-radius: 5px;
      }
      .remark-code, .remark-inline-code { font-family: 'Ubuntu Mono'; }
      .remark-code-line-highlighted     { background-color: #373832; }
      .pull-left {
        float: left;
        width: 47%;
      }
      .pull-right {
        float: right;
        width: 47%;
      }
      .pull-right ~ p {
        clear: both;
      }
      #slideshow .slide .content code {
        font-size: 0.8em;
      }
      #slideshow .slide .content pre code {
        font-size: 0.9em;
        padding: 15px;
      }
      .inverse {
        background: #272822;
        color: #CCCCCC;
        text-shadow: 0 0 20px #333;
      }
      .inverse h1, .inverse h2 {
        color: #f3f3f3;
        line-height: 0.8em;
      }

      /* Two-column layout */
      .left-column {
        color: #777;
        width: 20%;
        height: 92%;
        float: left;
      }
        
      .left-column h2:last-of-type, .left-column h3:last-child {
          color: #000;
      }
      
      .right-column {
        width: 75%;
        float: right;
        padding-top: 1em;
      }
      
      img {
        display: block;
        margin: 5px auto;
        border: 1px solid #272822;
        padding: 10px;
        max-width: 90%;
      }
      
      .indexlink {
        bottom: 12px;
        position: absolute;
        left: 20px;
        opacity: .5;
      }
      
      .indexlist li { 
        display: block; 
        float: left; 
        background-color: #333; 
        padding: 1em;
        border-radius: .5em;
      }
      
      table td{
        padding: 0.5em;
        background-color: #373832;
        color: white;
        border-radius: 0.5em;
        font-size: 0.8em;
      }
      
      table td:first-child {
        color: black;
        white-space: nowrap;
        background-color: inherit;
      }
                  
      blockquote {
        font-size: 0.7em;
        background: #f9f9f9;
        border-left: 10px solid #aaa;
        margin: 1.5em 10px;
        padding: 0.5em 10px;
        quotes: "\201C""\201D""\2018""\2019";
        font-style: italic;
        border-radius: .5em;
      }
      blockquote:before {
        color: #aaa;
        content: open-quote;
        font-size: 4em;
        line-height: 0.1em;
        margin-right: 0.25em;
        vertical-align: -0.4em;
      }
      blockquote p {
        display: inline;
      }
      
      .relation table {border-collapse: collapse; font-size: 1em;}
      .relation table td { background-color: white; color: black; border: 1px solid black; padding: 10px 5px; }
      .relation.selected table td { color: red; }
      .relation table td:first-child { border: none; }
      .relation table td .pk { border-right: 1px solid black; padding: 10px 5px;}
           
      .sqltable table    { font-family: monospace; }
      .sqltable table td { background-color: white; color: black; border: 1px solid black; border-radius: 0;}
      .sqltable table th { background-color: white; color: black; border: 1px solid black; border-radius: 0; text-align: center;}
                     
      .selected { color: red }   
      .key {text-decoration: underline}
      .small {font-size: .8em}      
      .smaller {font-size: .5em}
       
      del {
        color: red;
      }
       
      .box_info, .box_success, .box_warning, .box_error, .box_example, .box_regexp {
        display: block;
        margin: 10px 0px;
        padding:12px;
        border-radius:.5em;
      }
      .box_info:before {
          content: "\f05a";
          padding-right: 1em;
          font-family: FontAwesome;
      }
      .box_info {
          color: #00529B;
          background-color: #BDE5F8;
      }
      .box_regexp:before {
          content: "\f002";
          padding-right: 1em;
          font-family: FontAwesome;
      }
      .box_regexp {
          color: #00529B;
          background-color: #BDE5F8;
      }
      .box_regexp strong {
          color: red;
          background-color: #DFF2BF;
      }
      .box_success:before {
          content: "\f05d";
          padding-right: 1em;
          font-family: FontAwesome;
      }
      .box_success {
          color: #4F8A10;
          background-color: #DFF2BF;
      }
      .box_example:before {
          content: "\f044";
          padding-right: 1em;
          font-family: FontAwesome;
      }
      .box_example {
          color: #4F8A10;
          background-color: #DFF2BF;
      }
      .box_warning:before {
          content: "\f06a";
          padding-right: 1em;
          font-family: FontAwesome;
      }
      .box_warning {
          color: #9F6000;
          background-color: #FEEFB3;
      }
      .box_error:before {
          content: "\f057";
          padding-right: 1em;
          font-family: FontAwesome;
      }           
      .box_error {
          color: #D8000C;
          background-color: #FFBABA;
      }
    </style>
  </head>
  <body>
    <script src="http://gnab.github.com/remark/downloads/remark-0.6.5.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      var hljs = remark.highlighter.engine;
    </script>
    <script src="remark.language.js" type="text/javascript"></script>
    <script type="text/javascript">
      var slideshow = remark.create({
          highlightStyle: '<?=$style?$style:"monokai"?>',
          sourceUrl: '../markdown/<?=$_GET['p']?>.md'
        }) ;
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-108721-9', 'auto');
      ga('send', 'pageview');

    </script>
  </body>
</html>

