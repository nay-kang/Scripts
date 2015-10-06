<?php
//对比直接字符串拼接和sprintf，直接字符串拼接大幅度领先
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

//对比双引号和单引号的性能区别，结果无区别
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

//对比静态方法和普通方法的性能区别，静态方法小幅度领先
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

//对比序列化速度 json_encode比serialize开
function array_str($type=1){
    $data = [
        'float' => 3.5,
        'str'   => 'this is a long string',
        'array' => [
            'float' => 89234.23,
            'str'   => 'this is a sub string'
        ]
    ];
    for($i=0;$i<10000000;$i++){
        if($type==1){
            json_encode($data);
        }else{
            serialize($data);
        }
    }
}

//散列算法，快到慢crc32>sha1>md5
function hash_func($type='md5'){
    $str = 'abcdluoaseuroajl3jr4jalfuzsor';

    for($i=0;$i<10000000;$i++){
        switch($type){
            case 'md5':
                md5($str);
                break;
            case 'sha1':
                sha1($str);
                break;
            case 'crc32':
                crc32($str);
                break;
        }
    }
}

$beginTime = microtime(true);
hash_func('crc32');
$endTime = microtime(true);
echo 'prev request time used:'.(round(floatval($endTime-$beginTime),3)*1000)."ms\n";
?>
