<!DOCTYPE html>

<html>
  <head>
    <title>IdeaOverflow Idea List</title>
    
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />

    <link href="style.css" rel="stylesheet">
    <script type="text/javascript" src="client.js"></script>
    
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css" />
    <style>
    .ui-progressbar .ui-progressbar-value { background-image: url(http://jqueryui.com/resources/demos/progressbar/images/pbar-ani.gif); }
    </style>
    <script>
    $(function() {
       /* $( ".progressbar" ).progressbar({
            value: 59
        });*/
    });
    </script>
  </head>
  
  <body>
    
    <div class="container">
    <div class="well">
    <h1><a border="0" href="#"><img src="http://instadefine.com/IdeaOverflow/ATTHackathon/git/IdeaOverflow/ideagraphpaintico.jpg" height="50px" width="50px" /></a> IdeaOverflow Idea List
	  <!--<a id='logout' class='pull-right' href='#'><button class='btn btn-primary'>Log Out</button></a> <br>
<a href="http://instadefine.com/IdeaOverflow/ATTHackathon/git/IdeaOverflow/index_copygraph.php" style="font-size:16px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Projects_</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://hackathonprojects.tk" style="font-size:16px" target="_blank">HackathonProjects.tk</a>--></h1>
	</div>
      
      <form id="postform">
        <div class="input-append">
          <textarea class="span11" placeholder="Enter your own dreams here!" id="newpost"></textarea>
          <input class="btn" type="submit"></input>
        </div>
      </form>
      
      <div id="currentposts"></div>
    </div>
  </body>
</html>