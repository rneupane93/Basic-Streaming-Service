<?php
		
		clearstatcache();
			if(file_exists("attacked.txt")){
				echo 1;
			} else{
				echo 0;
			}
?>