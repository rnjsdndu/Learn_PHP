<?php
// PHP $_SERVER 에 보물이 가득합니다.

// $_SERVER는 SuperGlobal

print_r($_SERVER);
// Array
// (
//     [MIBDIRS] => C:/xampp/php/extras/mibs
//     [MYSQL_HOME] => \xampp\mysql\bin
//     [OPENSSL_CONF] => C:/xampp/apache/bin/openssl.cnf
//     [PHP_PEAR_SYSCONF_DIR] => \xampp\php
//     [PHPRC] => \xampp\php
//     [TMP] => \xampp\tmp
//     [HTTP_HOST] => localhost
//     [HTTP_CONNECTION] => keep-alive
//     [HTTP_PRAGMA] => no-cache
//     [HTTP_CACHE_CONTROL] => no-cache
//     [HTTP_SEC_CH_UA] => "Not:A-Brand";v="8", "Chromium";v="156", "Google Chrome";v="156"
//     [HTTP_SEC_CH_UA_MOBILE] => ?0
//     [HTTP_SEC_CH_UA_PLATFORM] => "Windows"
//     [HTTP_UPGRADE_INSECURE_REQUESTS] => 1
//     [HTTP_USER_AGENT] => Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36
//     [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/jxl,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7
//     [HTTP_SEC_FETCH_SITE] => none
//     [HTTP_SEC_FETCH_MODE] => navigate
//     [HTTP_SEC_FETCH_USER] => ?1
//     [HTTP_SEC_FETCH_DEST] => document
//     [HTTP_ACCEPT_ENCODING] => gzip, deflate, br, zstd
//     [HTTP_ACCEPT_LANGUAGE] => ko-KR,ko;q=0.9,en-US;q=0.8,en;q=0.7
//     [PATH] => C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;C:\Windows\System32\OpenSSH\;C:\Program Files\nodejs\;C:\Program Files\dotnet\;C:\Program Files\Git\cmd;C:\Users\GwonwooYeo(여권우)\AppData\Local\Microsoft\WindowsApps;C:\Users\GwonwooYeo(여권우)\AppData\Roaming\npm;C:\Users\GwonwooYeo(여권우)\AppData\Local\Programs\Microsoft VS Code\bin;C:\Users\GwonwooYeo(여권우)\AppData\Local\Programs\Microsoft VS Code\bin\copilot-shim
//     [SystemRoot] => C:\Windows
//     [COMSPEC] => C:\Windows\system32\cmd.exe
//     [PATHEXT] => .COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC
//     [WINDIR] => C:\Windows
//     [SERVER_SIGNATURE] => <address>Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/7.4.33 Server at localhost Port 80</address>

//     [SERVER_SOFTWARE] => Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/7.4.33
//     [SERVER_NAME] => localhost
//     [SERVER_ADDR] => ::1
//     [SERVER_PORT] => 80
//     [REMOTE_ADDR] => ::1
//     [DOCUMENT_ROOT] => C:/xampp/htdocs/Learn_PHP
//     [REQUEST_SCHEME] => http
//     [CONTEXT_PREFIX] => 
//     [CONTEXT_DOCUMENT_ROOT] => C:/xampp/htdocs/Learn_PHP
//     [SERVER_ADMIN] => postmaster@localhost
//     [SCRIPT_FILENAME] => C:/xampp/htdocs/Learn_PHP/index.php
//     [REMOTE_PORT] => 65211
//     [GATEWAY_INTERFACE] => CGI/1.1
//     [SERVER_PROTOCOL] => HTTP/1.1
//     [REQUEST_METHOD] => GET
//     [QUERY_STRING] => 
//     [REQUEST_URI] => /
//     [SCRIPT_NAME] => /index.php
//     [PHP_SELF] => /index.php
//     [REQUEST_TIME_FLOAT] => 1793605403.554
//     [REQUEST_TIME] => 1793605403
// )

// $_SERVER['PHP_SELF']: 현재 실행되고 있는 파일명과 경로
echo $_SERVER['PHP_SELF']; // /index.php


// $_SERVER['HTTP_USER_AGENT']: 사용자의 브라우저 정보
echo $_SERVER['HTTP_USER_AGENT']; // Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36

$AgInfo = $_SERVER['HTTP_USER_AGENT'];

if(strpos($AgInfo, 'Chrome')) {
  echo '크롬 유저시군요';
} else{
  echo '크롬 유저가 아니시군요';
}

// $_SERVER['REMOTE_ADDR']: 사용자의 IP 주소를 알 수 있다.
echo "당신의 IP는".$_SERVER['REMOTE_ADDR'] ."입니다";
// 사용 예: 유저 순 방문수, xx번째 방문을 환영합니다., 구독 서비
