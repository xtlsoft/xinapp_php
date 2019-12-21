include '../../system/db.class.php';
include '../../system/user.php';
include 'deapk/examples/autoload.php';
error_reporting(0);
$GLOBALS['userlogined'] or exit('-1');
$id = intval($_GET['id']);
$time = $_GET['time'];
$xml_size = intval($_GET['size']);
$tmp = '../../../data/tmp/' . $time . '/AgentWebX5/sample/build/outputs/apk/release/sample-release.apk';
$explode = explode('-', $time);
$icontime = md5($explode[0] . '-' . $explode[1] . '-' . rand(2, pow(2, 24))) . '.png';
$apptime = md5($explode[1] . '-' . $explode[0] . '-' . rand(2, pow(2, 24))) . '.apk';
is_file('../../../data/attachment/' . $apptime) and exit('-2');
IN_VERIFY > 0 and $GLOBALS['erduo_in_verify'] <> 1 and exit('-3');
$xml_size + $GLOBALS['erduo_in_spaceuse'] > $GLOBALS['erduo_in_spacetotal'] and exit('-4');
$apk = new \ApkParser\Parser($tmp);
$xml_mnvs = SafeSql($apk->getManifest()->getMinSdkLevel());
$xml_bid = SafeSql($apk->getManifest()->getPackageName());
$xml_bsvs = SafeSql($apk->getManifest()->getVersionName());
$xml_bvs = SafeSql($apk->getManifest()->getVersionCode());
$labelResourceId = $apk->getManifest()->getApplication()->getLabel();
$appLabel = $apk->getResources($labelResourceId);
$xml_name = SafeSql(detect_encoding($appLabel[0]));
$resourceId = $apk->getManifest()->getApplication()->getIcon();
$resources = $apk->getResources($resourceId);
if ($id) {
getfield('app', 'in_uid', 'in_id', $id) == $GLOBALS['erduo_in_userid'] or exit('-5');
getfield('app', 'in_bid', 'in_id', $id) == $xml_bid and getfield('app', 'in_name', 'in_id', $id) == $xml_name or exit('-6');
} else {
$id = $GLOBALS['db']->getone("select in_id from " . tname('app') . " where in_bid='$xml_bid' and in_name='$xml_name' and in_form='Android' and in_uid=" . $GLOBALS['erduo_in_userid']);
}
IN_REMOTE > 0 and fwrite(fopen('../../../data/tmp/' . $time . '.log', 'wb+'), $icontime);
foreach ($resources as $resource) {
fwrite(fopen('../../../data/attachment/' . $icontime, 'w'), stream_get_contents($apk->getStream($resource)));
}
$function = PHP_OS == 'Linux' ? 'rename' : 'copy';
copy($tmp, '../../../data/attachment/' . $apptime);
if ($id) {
$old = $GLOBALS['db']->getrow("select * from " . tname('app') . " where in_id=" . $id);
@unlink('../../../data/attachment/' . $old['in_icon']);
@unlink('../../../data/attachment/' . $old['in_app']);
$GLOBALS['db']->query("update " . tname('user') . " set in_spaceuse=in_spaceuse+$xml_size-" . $old['in_size'] . " where in_userid=" . $GLOBALS['erduo_in_userid']);
$GLOBALS['db']->query("update " . tname('app') . " set in_name='$xml_name',in_type=0,in_size=$xml_size,in_form='Android',in_mnvs='$xml_mnvs',in_bid='$xml_bid',in_bsvs='$xml_bsvs',in_bvs='$xml_bvs',in_nick='*',in_team='*',in_icon='$icontime',in_app='$apptime',in_addtime='" . date('Y-m-d H:i:s') . "' where in_id=" . $id);
} else {
$GLOBALS['db']->query("update " . tname('user') . " set in_spaceuse=in_spaceuse+$xml_size where in_userid=" . $GLOBALS['erduo_in_userid']);
$GLOBALS['db']->query("Insert " . tname('app') . " (in_name,in_uid,in_uname,in_type,in_size,in_form,in_mnvs,in_bid,in_bsvs,in_bvs,in_nick,in_team,in_icon,in_app,in_hits,in_kid,in_sign,in_resign,in_removead,in_highspeed,in_addtime) values ('$xml_name'," . $GLOBALS['erduo_in_userid'] . ",'" . $GLOBALS['erduo_in_username'] . "',0,$xml_size,'Android','$xml_mnvs','$xml_bid','$xml_bsvs','$xml_bvs','*','*','$icontime','$apptime',0,0,0,0,0,0,'" . date('Y-m-d H:i:s') . "')");
}
echo '1';

