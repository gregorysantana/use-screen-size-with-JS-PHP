<?php
class DetectMonitor { 
	public static function Height(){
		return '<script>document.write(screen.height)</script>';	
	}
	
	public static function Width(){
		return '<script>document.write(screen.width)</script>';
	}
} 
