
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title> - jsFiddle demo</title>
  
  <script type='text/javascript' src='/js/lib/dummy.js'></script>
  
  <link rel="stylesheet" type="text/css" href="/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="/css/result-light.css">
  
    
      <link rel="stylesheet" type="text/css" href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css">
    
    
  
  <style type='text/css'>
    body {
    padding-bottom: 40px;
    padding-top: 60px;
}

.sidebar-nav-fixed {
    padding: 9px 0;
    position:fixed;
    right:20px;
    top:60px;
    width:250px;
}

.row-fluid > .span-fixed-sidebar {
    margin-right: 290px;
}





  </style>
  

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />

    <script type="text/javascript" src="client.js"></script>
<script type='text/javascript'>//<![CDATA[ 
window.onload=function(){
    localStorage.setItem("ideaNames",'[\
    {\
        "name": "CuriosityThread",\
        "description": "asdfasdf"\
    },\
    {\
        "name": "PRIVMSG",\
        "description": "randomURI"\
    }\
]');

 displayIdeaNames();
}//]]>  



</script>


</head>
<body>
  <div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-fluid">

      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      
      <a class="brand" href="#"><img src="http://instadefine.com/IdeaOverflow/ATTHackathon/git/IdeaOverflow/ideagraphpaintico.jpg" height="15" width="15"> IdeaOverflow</a>
      <div class="nav-collapse">
        <ul class="nav">

          <li class="active"><a href="#">IdeaMap</a></li>
          <li><a href="#about">InProgress</a></li>
          <li><a href="#contact">Admire</a></li>
        </ul>
        <p class="navbar-text pull-right">Logged in as <a href="#">username</a></p>
      </div><!--/.nav-collapse -->

    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row-fluid row">
    <div class="span3">
      <div class="well sidebar-nav-fixed">
        <ul class="nav nav-list">

          <li class="nav-header">Ideas</li>
          <ul id="ideanames">
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
          </ul>
          <li class="nav-header">Tags</li>

          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>

          <li class="nav-header">Sidebar</li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
        </ul>
      </div><!--/.well -->
    </div><!--/span-->

    <div class="span9 span-fixed-sidebar">
      <div class="hero-unit">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>
      <div class="row-fluid">

        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!--/span-->
        <div class="span4">
          <h2>Heading</h2>

          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!--/span-->
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>

        </div><!--/span-->
      </div><!--/row-->
      <div class="row-fluid">
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>

        </div><!--/span-->
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!--/span-->
        <div class="span4">

          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!--/span-->
      </div><!--/row-->
    </div><!--/span-->
  </div><!--/row-->

  <hr>

  <footer>
    <p>&copy; Company 2012</p>
  </footer>

</div><!--/.fluid-container-->
  
</body>


</html>

