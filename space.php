<html>
    <head>
        <?php include 'header.html';?>
		<script type="text/javascript" src="content/js/gl-matrix-min.js"></script>        
		<script type="text/javascript" src="content/js/webgl-demo.js"></script>
		<script type="text/javascript" src="content/js/sylvester.js"></script>                
		<script type="text/javascript" src="content/js/glUtils.js"></script>   		
        <script id="shader-fs" type="x-shader/x-fragment">
		    //this determines the color of this particular shader element
	    	varying lowp vec4 vColor;
	    	
			void main(void) {
	        	gl_FragColor = vColor;
	    	}
		</script>
		<script id="shader-vs" type="x-shader/x-vertex">
		      attribute vec3 aVertexPosition;
		      attribute vec4 aVertexColor;
		    
		      uniform mat4 uMVMatrix;
		      uniform mat4 uPMatrix;
		      
		      varying lowp vec4 vColor;
		    
		      void main(void) {
		        gl_Position = uPMatrix * uMVMatrix * vec4(aVertexPosition, 1.0);
		        vColor = aVertexColor;
		      }
		</script>
	    <script type="text/javascript">
	    </script>
    </head>
    <body onload="start();">
		<div class="body-content">
		    <div class="container-fluid">
		        <div class="panel panel-default">
		            <div class="panel-heading background-gradient">
		                NASA API
		            </div>
		            <div class="panel-body">
		                <div>
							
		                </div>
		            </div>
		        </div>
		        <div class="panel panel-default">
		            <div class="panel-heading background-gradient">
		            </div>
		            <div class="panel-body">
		                <canvas id="glcanvas" width="640" height="480">
		                	
		                </canvas>
		            </div>
		        </div>            
		    </div>
		</div>
    </body>

</html>   