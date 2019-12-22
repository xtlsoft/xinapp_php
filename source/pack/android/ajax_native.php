<?php
error_reporting(0);
include '../../system/db.class.php';
$ac = isset($_GET['ac']) ? $_GET['ac'] : NULL;
if ($ac == 'android') {
    include '../../system/user.php';
    include_once '../zip/zip.php';
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Cache-Control: no-cache, must-revalidate");
    header("Pragma: no-cache");
    header("Content-type: text/html;charset=" . IN_CHARSET);
    $GLOBALS['userlogined'] or exit('return_0');
    $GLOBALS['erduo_in_points'] < IN_WEBVIEWPOINTS and exit('return_1');
    $GLOBALS['db']->query("update " . tname('user') . " set in_points=in_points-" . IN_WEBVIEWPOINTS . " where in_userid=" . $GLOBALS['erduo_in_userid']);
    $ssl = is_ssl() ? 'https://' : 'http://';
    $title = unescape(SafeRequest("title", "get"));
    //echo $title;
    $url = SafeRequest("url", "get");
    //echo $url;
    $aicon = str_replace($ssl . $_SERVER['HTTP_HOST'] . IN_PATH . 'data', '../../../data', SafeRequest("aicon", "get"));
    //echo $aicon;
    $limage = str_replace($ssl . $_SERVER['HTTP_HOST'] . IN_PATH . 'data', '../../../data', SafeRequest("limage", "get"));
    //echo $limage;
    $dir = '../../../data/tmp';
    $time = $GLOBALS['erduo_in_userid'] . '-' . time();
    //echo $time;
    creatdir($dir . '/' . $time);
    dir_copy('../../../static/pack/AgentWebX5', $dir . '/' . $time . '/' . 'AgentWebX5');
    //return;
    $ax = array('72', '96', '144', '192');
    $ay = array('mipmap-hdpi', 'mipmap-xhdpi', 'mipmap-xxhdpi', 'mipmap-xxxhdpi');
    for ($i = 0; $i < 4; $i++) {
        image_crop($ax[$i], $ax[$i], $aicon, $dir . '/' . $time . '/' . 'AgentWebX5' . '/sample/src/main/' . 'res/' . $ay[$i] . '/app_logo.png');
    }

    //$bid = 'a' . substr(md5($time), 8, 16);

    $str = file_get_contents($dir . '/' . $time . '/' . 'AgentWebX5' . '/sample/src/main' . '/res/values/strings.xml');
    $str = str_replace(array('[title]'), array(convert_charset($title)), $str);
    fwrite(fopen($dir . '/' . $time . '/' . 'AgentWebX5' . '/sample/src/main/' . 'res/values/strings.xml', 'w'), $str);

    $str3 = file_get_contents($dir . '/' . $time . '/' . 'AgentWebX5' . '/sample/src/main' . '/java/com/just/agentwebx5_sample/BaseWebActivity.java');
    $str3 = str_replace(array('[url]'), array($url), $str3);
    fwrite(fopen($dir . '/' . $time . '/' . 'AgentWebX5/' . 'sample/src/main/' . 'java/com/just/agentwebx5_sample/BaseWebActivity.java', 'w'), $str3);

    $appDir = $dir . '/' . $time . '/' . 'AgentWebX5';
   // echo "\nAppdir\n".$appDir."\n";
    $appDir = $_SERVER['DOCUMENT_ROOT'].'/data/tmp/'.'/' . $time . '/' . 'AgentWebX5';
    //echo "\nAppdir\n".$appDir."\n";
    $apkFilePath = $appDir."/sample/build/outputs/apk/release/sample-release.apk";
    //echo "\nApkFilePath\n".$apkFilePath."\n";
    $apkfile = $_SERVER['DOCUMENT_ROOT'] . '/data/tmp/' . $time;
    //echo "\napkfile\n".$apkfile."\n";
    //$return = exec("ls");
    //echo "\nls\n".$return."\n";
    $pathEnv = "sudo export JAVA_HOME=/usr/java/jdk1.8.0_231;sudo export PATH=$PATH:$JAVA_HOME/bin;sudo export PATH=$PATH:/opt/gradle/gradle-6.0.1/bin";
    $pathEnv = "sudo export JAVA_HOME=/usr/java/jdk1.8.0_231";
    $cmdPack = $pathEnv.";"."sudo /opt/gradle/gradle-6.0.1/bin/gradle  -p ".$appDir." assembleRelease";
    #$cmdPack = "sudo gradle";
   // echo "\ncmdPack\n".$cmdPack."\n";
    $return = shell_exec($cmdPack);
    //echo "\nreturn\n".$return."\n";
    //echo "\nout\n".$out."\n";
    //echo "\nstatus\n".$status."\n";
    echo "{'extension':'apk','time':'$time','size':'" . filesize($apkFilePath) . "'}";
}

function tree($directory, $bid)
{
    $current_dir = dir($directory);
    while ($file = $current_dir->read()) {
        if ((is_dir("$directory/$file")) AND ($file != ".") AND ($file != "..")) {
            tree("$directory/$file", $bid);
        } else {
            $content = file_get_contents($directory . '/' . $file);
            if ($content == false) {
                //echo "<li><a href='$directory/'><font color=\"#c0c0c0\">$file---Warning: No Content !</font></a></li>\n";
            } else {
                $content = str_replace("[bid]", $bid, $content);
                if (file_put_contents($directory . '/' . $file, $content) == false) {
                    //echo "<li><a href='$directory/'><font color=\"#ff0000\">$file---Error: Failed to write !</font></a></li>\n";
                }
            }
        }
    }
    $current_dir->close();
}


/**
 * 文件夹文件拷贝
 *
 * @param string $src 来源文件夹
 * @param string $dst 目的地文件夹
 * @return bool
 */
function dir_copy($src = '', $dst = '')
{
    if (empty($src) || empty($dst)) {
        return false;
    }

    $dir = opendir($src);
    creatdir($dst);
    while (false !== ($file = readdir($dir))) {
        if (($file != '.') && ($file != '..')) {
            if (is_dir($src . '/' . $file)) {
                dir_copy($src . '/' . $file, $dst . '/' . $file);
            } else {
                copy($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }
    closedir($dir);

    return true;
}
