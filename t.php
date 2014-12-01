<?php

require_once 'lib/Dropbox/autoload.php';

use \Dropbox as dbx;
$token=trim(file_get_contents('shan.token'));
$dbxClient = new dbx\Client($token, "dbbs app");
$accountInfo = $dbxClient->getAccountInfo();
echo "account info=".json_encode($accountInfo)."\n";
$project_name='gitlab-backup';
$date=date('Ymd');
$dir='/var/opt/gitlab/backups';
exec("ls -r $dir | tail -n 1",$return);
$lastfile=$return[0];
echo "lastfile=$lastfile\n";
$file=$dir.'/'.$lastfile;
$file= "/var/opt/gitlab/backups/1416475060_gitlab_backup.tar";
$filename= preg_replace('/.*?([^\\/]+)$/','$1',$file);
$today_dir='/'.$project_name.'/'.$date;
$remote_file=$today_dir.'/'.timesymbol().'/'.$filename;
$dbxClient->createFolder($today_dir);
echo "$file => $remote_file\n";
$f = fopen($file, "rb");
$result = $dbxClient->uploadFile($remote_file, dbx\WriteMode::add(), $f);
fclose($f);
print_r($result);
exit(0);



$folderMetadata = $dbxClient->getMetadataWithChildren("/");
print_r($folderMetadata);
return;


//Download

$f = fopen("working-draft.txt", "w+b");
$fileMetadata = $dbxClient->getFile("/working-draft.txt", $f);
fclose($f);
print_r($fileMetadata);



function timesymbol(){
	list($msec,$sec)=explode(' ',microtime());
	return date('His').substr($msec*1000,0,3);
}



