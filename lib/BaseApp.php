<?php
	class BaseApp{
		public function OK(){
			echo "OK";
		}
	}
	$base = new BaseApp();
	echo $base->OK();