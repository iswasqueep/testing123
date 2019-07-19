<html>
<head><title>fib</title></head>
<body>

<h4>I am here</h4>



<?php

	function fib($num){
		if($num == 0){
			return 0;
		}
			else if ($num == 1){
				return 1;
			
			else
				return (fib($num-1)+ fib($num-2));
	}
		$fibb = 100;
	for($count=0; $count<$fibb; $count++){
		echo fib($count), ' ';
	}
	
?>
</body>
</html>