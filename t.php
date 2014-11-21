<?php


require_once 'lib/Dropbox/autoload.php';

use \Dropbox as dbx;


$token=trim(file_get_contents('shan.token'));
$dbxClient = new dbx\Client($token, "dbbs app");
$accountInfo = $dbxClient->getAccountInfo();

print_r($accountInfo);


$dbxClient->createFolder('/tmp');

$file= "/var/opt/gitlab/backups/1416475060_gitlab_backup.tar";
$filename= preg_replace('/.*?([^\\/]+)$/','$1',$file);

echo $filename,"\n";
$f = fopen("/var/opt/gitlab/backups/1416475060_gitlab_backup.tar", "rb");
$result = $dbxClient->uploadFile('/'.$filename, dbx\WriteMode::add(), $f);
fclose($f);
print_r($result);

$folderMetadata = $dbxClient->getMetadataWithChildren("/");
print_r($folderMetadata);
return;


//Download

$f = fopen("working-draft.txt", "w+b");
$fileMetadata = $dbxClient->getFile("/working-draft.txt", $f);
fclose($f);
print_r($fileMetadata);


