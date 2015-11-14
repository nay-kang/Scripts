<?php
define('SESSION_DIR','/data/laravel_sessions');
define('REDIS_HOST','127.0.0.1');
define('REDIS_PORT','6379');
define('REDIS_AUTH',false);
define('REDIS_DB',0);
define('PREFIX','laravel:');
define('TTL',60*60*24*30);

$d = dir(SESSION_DIR);
$redis = new Redis();
$redis->connect(REDIS_HOST,REDIS_PORT);
if(REDIS_AUTH){
	$redis->auth(REDIS_AUTH);
}

$redis->select(REDIS_DB);
$count = 0;
while(false !== ($entry = $d->read())){
	$file = SESSION_DIR.'/'.$entry;
	if(is_file($file)){
		echo $file."\n";
		$content = file_get_contents($file);
		$content = serialize(trim($content));
		$redis->setex(PREFIX.$entry,TTL,$content);
		$count++;
	}
}
echo 'total session:'.$count."\n";
$redis->close();

?>
