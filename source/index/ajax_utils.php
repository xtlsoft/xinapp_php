<?php
// +----------------------------------------------------------------------
// | Bees [ WE ONLY DO WHAT IS NECESSARY ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018 https://www.021163.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 秋风渐冷 < 786431217@qq.com >
// +----------------------------------------------------------------------
$app = $_POST['app'];
$bundle = $_POST['bundle'];
$downloadLink = $_POST['downloadLink'];
$link = $_POST['link'];
header('Content-type: text/xml; charset=UTF-8'); 
header('Content-Disposition:attachement;filename=' . $app . '.plist');
echo '<?xml version="1.0" encoding="UTF-8"?>
<plist version="1.0">
  <dict>
      <key>items</key>
      <array>
        <dict>
           <key>assets</key>
           <array>
             <dict>
               <key>kind</key>
               <string>software-package</string>
               <key>url</key>
               <string><![CDATA[' . $downloadLink . ']]></string>
             </dict>
             <dict>
               <key>kind</key>
               <string>display-image</string>
               <key>needs-shine</key>
               <integer>0</integer>
               <key>url</key>
               <string><![CDATA[' . $link . ']]></string>
             </dict>
             <dict>
               <key>kind</key>
               <string>full-size-image</string>
               <key>needs-shine</key>
               <true/>
               <key>url</key>
               <string><![CDATA[' . $link . ']]></string>
             </dict>
           </array>
           <key>metadata</key>
           <dict>
             <key>bundle-identifier</key>
             <string>' . $bundle . '</string>
             <key>bundle-version</key>
             <string><![CDATA[1.0.0]]></string>
             <key>kind</key>
             <string>software</string>
             <key>title</key>
             <string><![CDATA[' . $app . ']]></string>			 
           </dict>
        </dict>
      </array>
  </dict>
</plist>';