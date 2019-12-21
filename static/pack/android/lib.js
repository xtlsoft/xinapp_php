function upload_apk_a_icon() {
    var upfile = $("#upload_apk_a_icon")[0].files[0];
    if (in_login < 1) {
        $("#tips_apk_a_icon").text("请先登录");
        return false;
    }
    if (upfile.size > 1048576) {
        $("#tips_apk_a_icon").text("图标不能大于1M");
        return false;
    }
    var fd = new FormData();
    fd.append("android", upfile);
    var a_icon_xhr = new XMLHttpRequest();
    a_icon_xhr.open("post", in_path + "source/pack/android/ajax.php");
    a_icon_xhr.onload = complete_apk_a_icon;
    a_icon_xhr.onerror = failed_apk_a_icon;
    a_icon_xhr.upload.onprogress = progress_apk_a_icon;
    a_icon_xhr.send(fd);
}

function progress_apk_a_icon(evt) {
    var per = Math.round(evt.loaded / evt.total * 100);
    $("#tips_apk_a_icon").text(per + "%");
    if (per > 99) {
        $("#tips_apk_a_icon").text("请稍等...");
    }
}

function complete_apk_a_icon(evt) {
    var response = evt.target.responseText;
    if (response == "return_0") {
        $("#tips_apk_a_icon").text("文件不规范");
    } else {
        $("#preview_apk_a_icon").html('<img width="100" height="100" src="' + in_path + "data/tmp/" + response + '">');
    }
}

function failed_apk_a_icon() {
    $("#tips_apk_a_icon").text("上传异常");
}


function android_config() {
    var xhr = new XMLHttpRequest();
    if (in_login < 1) {
        layer.msg("请先登录后再操作！");
        return;
    }
    if ($("#apk_title").val() == "") {
        $("#apk_title").focus();
        return;
    }
    if ($("#apk_url").val() == "") {
        $("#apk_url").focus();
        return;
    }
    if ($("#preview_apk_a_icon img").length < 1) {
        layer.msg("请上传应用图标！");
        return;
    }
    if($("#preview_l_image1 img").length<1){
        layer.msg("请上传启动图片！");
        return;
    }

    if(allin){
        $("#mc_title").val($("#apk_title").val());
        $("#mc_url").val($("#apk_url").val());
        $("#preview_mc_a_icon").html($("#preview_apk_a_icon").html());
        // mobile_config();
        // return;
    }

    $(".mc-btn").attr("disabled", "disabled").text("生成安卓中...");
    xhr.open("GET", in_path + "source/pack/android/ajax_native.php?ac=android&title=" + escape($("#apk_title").val()) + "&url=" + $("#apk_url").val() + "&aicon=" + $("#preview_apk_a_icon img")[0].src + "&limage="+$("#preview_l_image1 img")[0].src, true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                if (xhr.responseText == "return_0") {
                    $(".mc-btn").text("请先登录");
                } else if (xhr.responseText == "return_1") {
                    $(".mc-btn").text("点数不足");
                } else {
                    $(".mc-btn").text("安卓上传中...");
                    ReturnAndroidValueNative(eval("(" + xhr.responseText + ")"));
                }
            } else {
                $(".mc-btn").text("通讯异常");
            }
        }
    };
    xhr.send(null);
}


function ReturnAndroidValue(response) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        processAJAX();
    };
    xhr.open("GET", in_path + "source/pack/upload/index-" + response.extension + ".php?time=" + response.time + "&size=" + response.size + "&id=0", true);
    xhr.send(null);

    function processAJAX() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                if (xhr.responseText == -1) {
                    $(".mc-btn").text("请先登录后再操作！");
                } else if (xhr.responseText == -2 || xhr.responseText == -5) {
                    $(".mc-btn").text("Access denied");
                } else if (xhr.responseText == -3) {
                    $(".mc-btn").text("未进行实名认证或认证审核中！");
                } else if (xhr.responseText == -4) {
                    $(".mc-btn").text("应用容量不足！");
                } else if (xhr.responseText == -6) {
                    $(".mc-btn").text("安装包不一致，无法覆盖！");
                } else if (xhr.responseText >= 1) {
                    if(allin){
                        $("#mc_title").val($("#apk_title").val());
                        $("#mc_url").val($("#apk_url").val());
                        $("#preview_mc_a_icon").html($("#preview_apk_a_icon").html());
                        mobile_config(xhr.responseText);
                    }else{
                        location.href = in_path + "index.php/home";
                    }
                } else {
                    $(".mc-btn").text("内部出现错误，请稍后再试！");
                }
            }
        }
    }
}


function ReturnAndroidValueNative(response) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        processAJAX();
    };
    xhr.open("GET", in_path + "source/pack/upload/index-native-" + response.extension + ".php?time=" + response.time + "&size=" + response.size + "&id=0", true);
    xhr.send(null);

    function processAJAX() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                if (xhr.responseText == -1) {
                    $(".mc-btn").text("请先登录后再操作！");
                } else if (xhr.responseText == -2 || xhr.responseText == -5) {
                    $(".mc-btn").text("Access denied");
                } else if (xhr.responseText == -3) {
                    $(".mc-btn").text("未进行实名认证或认证审核中！");
                } else if (xhr.responseText == -4) {
                    $(".mc-btn").text("应用容量不足！");
                } else if (xhr.responseText == -6) {
                    $(".mc-btn").text("安装包不一致，无法覆盖！");
                } else if (xhr.responseText >= 1) {
                    if(allin){
                        $("#mc_title").val($("#apk_title").val());
                        $("#mc_url").val($("#apk_url").val());
                        $("#preview_mc_a_icon").html($("#preview_apk_a_icon").html());
                        mobile_config(xhr.responseText);
                    }else{
                        location.href = in_path + "index.php/home";
                    }
                } else {
                    $(".mc-btn").text("内部出现错误，请稍后再试！");
                }
            }
        }
    }
}
