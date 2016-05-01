<?php 
header('Content-Type: image/gif');
echo "\x47\x49\x46\x38\x37\x61\x1\x0\x1\x0\x80\x0\x0\xfc\x6a\x6c\x0\x0\x0\x2c\x0\x0\x0\x0\x1\x0\x1\x0\x0\x2\x2\x44\x1\x0\x3b";
if(isset($_GET['tid'])) { $tid = $_GET['tid']; } else { $tid = 'UA-XXXXXX-X';}
function generateUUID() {
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
        mt_rand( 0, 0xffff ),
        mt_rand( 0, 0x0fff ) | 0x4000,
        mt_rand( 0, 0x3fff ) | 0x8000,
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
}
$data = array(
    'v'   => '1',
    't'   => 'event',
    'tid' => $tid,
    'cid' => generateUUID(),
    'ds'  => 'web',
    'ni'  => '0',
    'ec'  => 'Measurement Protocol',
    'ea'  => 'Hit',
    'el'  => 'UnblockGA'
);
$content    = http_build_query($data);
$content    = utf8_encode($content);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://www.google-analytics.com/collect');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/x-www-form-urlencoded'));
curl_setopt($ch, CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_1_1);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
curl_exec($ch);
curl_close($ch);