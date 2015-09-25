<?php
function strdotconcat(){
	for($i=0;$i<10000000;$i++){
		if($i%2==0){
			$str = 'now run at:'.$i;
		}else{
			$str = 'now run at:'.$i;
		}
	}
}

function strsprintfconcat(){
	for($i=0;$i<10000000;$i++){
		if($i%2==0){
			$str = sprintf('now run at:%s',$i);
		}else{
			$str = sprintf('now run at:%s',$i);
		}
	}
}

function strSingleQuote(){
	for($i=0;$i<10000000;$i++){
		$str = 'now run at:'.$i;
	}
}

function strDoubleQuote(){
	for($i=0;$i<10000000;$i++){
		$str = "now run at:".$i;
	}
}

class Func{
	public function run(){
		//do nothing
	}

	public static function runStatic(){
		//do nothing
	}
}

function callMethod(){
	$func = new Func();
	for($i=0;$i<10000000;$i++){
		$func->run();	
	}
}
function callStaticMethod(){
	for($i=0;$i<10000000;$i++){
		Func::runStatic();	
	}

}
$beginTime = microtime(true);
callStaticMethod();
$endTime = microtime(true);
echo 'prev request time used:'.(round(floatval($endTime-$beginTime),3)*1000)."ms\n";
?>
