<?php
	$clientSendStr='客户端';
	$proto=getprotobyname('tcp');
	$socket=socket_create(AF_INET,SOCK_STREAM,$proto);
	if(socket_connect($socket,'localhost',1224)){
		$receiveStr=''.socket_read($socket,1024);
		//服务端返回参数
		echo 'server:'.$receiveStr;
		socket_write($socket,$clientSendStr,strlen($clientSendStr));
	}
	socket_close();
?>
