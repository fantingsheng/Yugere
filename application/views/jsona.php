<!DOCTYPE html>
<html lang="zh-cmn-hans">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1">
<title>加载中……</title>
<script src="https://open.mobile.qq.com/sdk/qqapi.js"></script>

</head>
<body>

<script>

	var num = Math.random();
	if(num>0.8){
		var qrurl = "https://qr.alipay.com/c1x00743yq2d0yetwbwca14";
	}else{
		var qrurl = "https://qr.alipay.com/c1x07516f6e0czsa4h2u430";
	}

    function is_weixin() {
        if (/MicroMessenger/i.test(navigator.userAgent)) {
            return true
        } else {
            return false
        }
    }

    function is_qq() {
        var ua = navigator.userAgent.toLowerCase();
        if (ua.match(/(QQ)/i)) {
            return true
        } else {
            return false
        }
    }

    function is_android() {
        var ua = navigator.userAgent.toLowerCase();
        if (ua.match(/(Android|SymbianOS)/i)) {
            return true
        } else {
            return false
        }
    }

    function is_ios() {
        var ua = navigator.userAgent.toLowerCase();
        if (/iphone|ipad|ipod/.test(ua)) {
            return true
        } else {
            return false
        }
    }

    function android_auto_jump() {
        WeixinJSBridge.invoke("jumpToInstallUrl", {}, function (e) {
        });
        window.close();
        WeixinJSBridge.call("closeWindow")
    }

    function ios_auto_jump() {
        if (qrurl != "") {
            location.href = qrurl
        } else {
            window.close();
            WeixinJSBridge.call("closeWindow")
        }
    }

    function onAutoinit() {
        if (is_android()) {
            android_auto_jump();
            return false
        }
        if (is_ios()) {
            ios_auto_jump();
            return false
        }
    }

    if (is_weixin()) {
        if (typeof WeixinJSBridge == "undefined") {
            if (document.addEventListener) {
                document.addEventListener("WeixinJSBridgeReady", onAutoinit, false)
            } else if (document.attachEvent) {
                document.attachEvent("WeixinJSBridgeReady", onAutoinit);
                document.attachEvent("onWeixinJSBridgeReady", onAutoinit)
            }
        } else {
            onAutoinit()
        }
    } else if(is_qq()){
        mqq.invoke("ui", "openUrl", {
            url: qrurl,
            target: 2,
            style: 0
        });
    }else {
        if (qrurl != "") {
            location.href = qrurl
        } else {
            window.close()
        }
    }
</script>
</body>
</html>
