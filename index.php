<html>
	<head>
		<?php include 'header.html';?>
		<script type="text/javascript" src="content/slides/jquery.slides.min.js"></script>
		
  <script>
    $(function(){
      $("#_about-slider").slidesjs({
        width: 800,
        height: 600,
        navigation: {
        	active: true,
        	effect: "fade"
        },
        pagination: {
        	active: false
        },
        play: {
          active: true,
          auto: true,
          interval: 6000,
          swap: true
        }
      });
    });
  </script>
		<style type="text/css">
			#_about-slider {
				display:none;
			}
			a.slidesjs-next {
			  background: url(glyphicon-circle-arrow-left);
		      margin-right:10px;
		      background-position: -12px 0;
		    }
		</style>
	</head>
	<body>
		<div class="body-content">
			<div class="container-fluid">
				<div class="panel panel-default">
					<div class="panel-heading background-gradient">
						Welcome!
					</div>
					<div class="panel-body">
						<div>
							This is my work-in-progress development site where I plan on posting interesting finds within the web development world along with any cool and interesting projects that I have worked on or ideas that I have.
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading background-gradient">
						About
					</div>
					<div class="panel-body">
						I'm a Michigan native and have started my professional career in New York City and currently live in Brooklyn. I like to fill my personal life with all sorts of activities which include travel, running, playing and watching sports (go Red Wings/Tigers/Lions/Pistons!).
					</div>
					<div class="panel-body">
						<div id="_about-slider">
							<img src="content/images/about/brothersHockey.jpg">
							<img src="content/images/about/mtWashingtonSmall.png">
							<img src="content/images/about/trio.jpg">
							<img src="content/images/about/collegeLacrosse.jpg">
							<img src="content/images/about/romesmall.jpg">
							<img src="content/images/about/rangersRedwings.jpg">
							<img src="content/images/about/belmont.jpg">
							<img src="content/images/about/baldmtnsmall.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
