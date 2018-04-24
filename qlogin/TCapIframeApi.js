!function(e, t) {
	var n = t(e);
	"undefined" != typeof define && (define.cmd || define.amd) && define(function() {
		return n
	})
}(window, function(e) {
	function t(e) {
		for (var t = [2052, 1033, 1028], n = t.length; n--;) if (t[n] === parseInt(e)) return !0;
		return !1
	}
	function n(t) {
		var n = 0;
		s = !1;
		for (var o = 0; o < t.length; o++) {
			var a = e.document.createElement("script");
			a.type = "text/javascript", a.async = !0, a.src = t[o], a.onload = function() {
				s = ++n >= t.length, s && v()
			}, e.document.getElementsByTagName("head").item(0).appendChild(a)
		}
	}
	function o() {
		if ("undefined" != typeof TCapMsg && "undefined" != typeof AqSCode) {
			var e = function() {},
				n = function() {},
				o = "",
				a = "",
				c = 1,
				r = "inner",
				p = "",
				i = "",
				u = "",
				l = "";
			"open" != r && "" != a || (a = "");
			var f = "2052";
			0 == t(f) && (f = "2052"), g && g.start && "[object Function]" == Object.prototype.toString.call(g.start) && (e = function() {
				g.start && g.start()
			}), g && g.end && "[object Function]" == Object.prototype.toString.call(g.end) && (n = function() {
				g.end && g.end()
			}), g && g.lang && t(g.lang) && (f = g.lang), g && g.uin && (a = g.uin), "open" == r && g && g.uid && (a = g.uid), g && g.capcd && (p = g.capcd), g && "undefined" != typeof g.showHeader && (o = g.showHeader ? "0" : "1"), g && g.themeColor && (i = g.themeColor), g && g.type && (l = g.type), g && "boolean" == typeof g.needFeedBack && (c = g.needFeedBack ? 1 : 0), g && g.theme && (u = g.theme);
			var s = "&aid=549000929&captype=&protocol=http&clientype=1&disturblevel=&apptype=2&noheader=" + o + "&color=" + i + "&showtype=" + l + "&fb=" + c + "&theme=" + u;
			"open" == r && (s = "&asig=&aid=549000929&captype=&protocol=http&clientype=1&disturblevel=&apptype=2&noheader=" + o + "&color=" + i + "&showtype=" + l + "&fb=" + c + "&theme=" + u), s = s + "&lang=" + f;
			var h = $({
				ele: m,
				params: s,
				uid: a,
				curenv: "inner",
				capcd: p,
				domain: d,
				gettype: "cap_union_prehandle"
			}, g || {});
			y = new AqSCode(h), y.listen(b), y.start(e), y.end(n), g && g.top && y.initPos({
				top: g.top
			}), g && g.left && y.initPos({
				left: g.left
			}), y.create()
		}
	}
	function a() {
		return y.getTicket()
	}
	function c(e, t, n) {
		m = e, "function" == typeof t ? b = t : (g = t, b = g.callback && "function" == typeof g.callback ? g.callback : n), s ? o() : v = o
	}
	function r(e) {
		y && y.refresh && y.refresh(e)
	}
	function p() {
		y && y.destroy && y.destroy()
	}
	var i = "http",
		d = "https" == i ? "https://ssl.captcha.qq.com" : "http://captcha.qq.com",
		u = "inner";
	"open" == u && (d = "https" == i ? "https://captcha.guard.qcloud.com" : "http://captcha.guard.qcloud.com");
	var l = "http://captcha.gtimg.com/2",
		f = "" != l ? l : d,
		s = !1,
		h = "2052";
	0 == t(h) && (h = "2052");
	var y, v = function() {},
		$ = function(e, t, n) {
			n = n || !1;
			var o = {};
			for (var a in t) e[a] = t[a];
			if (n) {
				for (var a in e) o[a] = e[a];
				return o
			}
			return e
		};
	n(["TCapMsg.js", "TCapIframe_m.js?v=1.0"]);
	var m, g, b = function() {};
	return e.capInit = c, e.capGetTicket = a, e.capRefresh = r, e.capDestroy = p, {
		capInit: c,
		capGetTicket: a,
		capRefresh: r,
		capDestroy: p
	}
});