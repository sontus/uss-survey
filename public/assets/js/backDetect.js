!function (e) {
    var a = e, r = "undefined" != typeof window && window, f = {
        frameLoaded: 0,
        frameTry: 0,
        frameTime: 0,
        frameDetect: null,
        frameSrc: null,
        frameCallBack: null,
        frameThis: null,
        frameNavigator: window.navigator.userAgent,
        frameDelay: 0,
        frameDataSrc: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
    };
    a.fn.backDetect = function (e, r) {
        f.frameThis = this, f.frameCallBack = e, null !== r && (f.frameDelay = r), f.frameNavigator.indexOf("MSIE ") > -1 || f.frameNavigator.indexOf("Trident") > -1 ? setTimeout(function () {
            a('<iframe src="' + f.frameDataSrc + '?loading" style="display:none;" id="backDetectFrame" onload="jQuery.fn.frameInit();""></iframe>').appendTo(f.frameThis)
        }, f.frameDelay) : setTimeout(function () {
            a("<iframe src='about:blank?loading' style='display:none;' id='backDetectFrame' onload='jQuery.fn.frameInit();'></iframe>").appendTo(f.frameThis)
        }, f.frameDelay)
    }, a.fn.frameInit = function () {
        f.frameDetect = document.getElementById("backDetectFrame"), f.frameLoaded > 1 && 2 === f.frameLoaded && (f.frameCallBack.call(this), r.history.go(-1)), f.frameLoaded += 1, 1 === f.frameLoaded && (f.frameTime = setTimeout(function () {
            e.fn.setupFrames()
        }, 500))
    }, a.fn.setupFrames = function () {
        clearTimeout(f.frameTime), f.frameSrc = f.frameDetect.src, 1 === f.frameLoaded && -1 === f.frameSrc.indexOf("historyLoaded") && (f.frameNavigator.indexOf("MSIE ") > -1 || f.frameNavigator.indexOf("Trident") > -1 ? f.frameDetect.src = f.frameDataSrc + "?historyLoaded" : f.frameDetect.src = "about:blank?historyLoaded")
    }
}(jQuery);
