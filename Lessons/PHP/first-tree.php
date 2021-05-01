<!DOCTYPE html>
<html>
<head>
	<title>First PHP</title>
	<style type="text/css">
		#mybox{
			margin: 0 20vw;
			background-color: lightgreen;

			display: flex;
			justify-content: center;
			} 
	</style>
</head>
<body>




<div id="mybox">
	<?php

		$rowcount = 20;
		$space = " ";


		echo "<pre>";
		for($i=1; $i<=$rowcount; $i++){

			//add my space code
			//input: x-space, x-star
			//output: "   *"

			drawleft($rowcount, $i);

			for($j=1; $j<=$i; $j++){
				echo  "*";
			}
		echo "<br>";

		
		}

		function drawleft($rowcount, $linenr){
			$answer = "";
			
			$spacen = $rowcount - $linenr;

			for($x=1; $x<=$spacen ; $x++){
			$answer .= " ";
			}

			// $spacen + $stars = $rowcount - 1;
			
			$all = $rowcount - 1;

			$startsn= $all - $spacen;
			for($x=1; $x<=$startsn ; $x++){
			$answer .= "*";
			}


			echo $answer;
		}





	/* input: rowcount x
	 proces: echo "**";
	 output: $answer
	 vevrever


		// echo "* <br> ** <br> *** <br> **** ";

	 */

	?>
</pre>
</div>


</body>
</html>