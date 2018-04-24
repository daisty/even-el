!function(t) {
	function e(t, e, i) {
		if (t.indexOf("?") != -1) {
			var s = new RegExp("(\\?|&" + e + ")=[^&]*");
			t = s.test(t) ? t.replace(s, "$1=" + i) : t + "&" + e + "=" + i
		} else t = t + "?" + e + "=" + i;
		return t
	}
	function i(t, i) {
		for (var s in i) t = e(t, encodeURIComponent(s), encodeURIComponent(i[s]));
		return t
	}
	function s() {
		return r || (r = this.init.apply(this, arguments))
	}
	function n(t, e) {
		if ("number" == typeof window.orientation && "object" == typeof window.onorientationchange && (window.orientation == -90 || 90 == window.orientation)) return !0;
		if (t) {
			if (e.windowHeight < e.windowWidth) return !0
		} else if (window.innerHeight < window.innerWidth) return !0;
		return !1
	}
	function o(t, e, i, s) {
		t = parseInt(t, 10), e = parseInt(e, 10);
		var o = w["default"].width,
			r = w["default"].height;
		if ("inner" == i.opts.curenv ? (0 == t && (o = w["char"].width, r = w["char"].height), 1 != t || 1 != e && 4 != e && 7 != e || (o = w.click.width, r = w.click.height), 1 == t && 8 == e && (o = w.slide.width, r = w.slide.height), 1 == t && 9 == e && (o = w.slidepuzzle.width, r = w.slidepuzzle.height)) : (1 == t && (o = w["char"].width, r = w["char"].height), 2 != t || 1 != e && 4 != e && 7 != e || (o = w.click.width, r = w.click.height), 2 == t && 8 == e && (o = w.slide.width, r = w.slide.height), 2 == t && 9 == e && (o = w.slidepuzzle.width, r = w.slidepuzzle.height)), s) var c = i.windowWidth,
			d = i.windowHeight;
		else {
			var c = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth,
				d = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
			i.windowWidth = c, i.windowHeight = d
		}
		var h = Math.min(c / a),
			u = Math.min(d / a);
		if (n(s, i)) {
			u = .85 * u, u = u > 1.5 ? 1.5 : u, u = u < .85 ? .85 : u;
			var p = parseInt(1e4 * u) / 1e4;
			o = o * p * 16 + 3, r = r * p * 16 + 3
		} else {
			h = h > 1.5 ? 1.5 : h, h = h < .85 ? .85 : h;
			var p = parseInt(1e4 * h) / 1e4;
			o = o * p * 16 + 3, r = r * p * 16 + 3
		}
		i.sizeSC.width = parseInt(o), i.sizeSC.height = parseInt(r), d - r < 0 ? i.posSC.top = "0px" : i.posSC.top = (d - r) / 2 + "px", i.posSC.left = (c - o) / 2 + "px"
	}
	var r, c = {
		securityCode: "securityCode"
	},
		d = function(t, e) {
			return t.currentStyle ? t.currentStyle[e] : document.defaultView.getComputedStyle(t, !1)[e]
		},
		h = function(t) {
			return function(e) {
				return Object.prototype.toString.call(e) == "[object " + t + "]"
			}
		},
		a = 320,
		u = h("Object"),
		p = h("Function"),
		l = function(t, e) {
			if (t && e) {
				if (u(e)) {
					for (var i in e) t.style[i] = e[i];
					return e
				}
				return d(t, e)
			}
		},
		f = function(t, e, i) {
			i = i || !1;
			var s = {};
			for (var n in e) t[n] = e[n];
			if (i) {
				for (var n in t) s[n] = t[n];
				return s
			}
			return t
		},
		w = {
			"char": {
				width: 18.6,
				height: 13.6
			},
			click: {
				width: 18.2,
				height: 19.6
			},
			slide: {
				width: 18.2,
				height: 18.1
			},
			slidepuzzle: {
				width: 18.2,
				height: 16.1
			},
			"default": {
				width: "100%",
				height: "100%"
			}
		},
		m = 0,
		g = 10,
		y = {
			top: "0%",
			left: "0%"
		},
		C = {
			ele: document.body,
			src: "",
			uid: "",
			capcd: "",
			startFn: function() {},
			endFn: function() {}
		},
		S = function(t) {
			var e = window.document.getElementsByTagName("script")[0],
				s = window.document.createElement("script"),
				n = t.callback || "callback",
				o = "_aq_" + Math.floor(1e6 * Math.random()),
				r = window[o] = t.success ||
			function() {}, c = t.url, d = {};
			d[n] = o, t.data && (d = f(d, t.data)), c = i(c, d), s.async = t.async || !0, s.src = c, s.onload = function() {
				s && e.parentNode && e.parentNode.removeChild(s), r = null
			}, e.parentNode.insertBefore(s, e)
		};
	s.prototype = {
		init: function(t) {
			return this.opts = f(C, t || {}), this.initOptions(), this.listenFunc = [], this.msg = new TCapMsg("parent"), this.initListener(), this.windowHeight = 0, this.windowWidth = 0, this.sess = "", this
		},
		initOptions: function() {
			this.ele = this.opts.ele ? this.opts.ele == document ? document.body : this.opts.ele : document.body, this.opts.type && "popup" == this.opts.type && (this.ele = document.body), this.ticket = "", this.randstr = "", null == this.sizeSC && (this.sizeSC = f({}, w["default"])), null == this.posSC && (this.posSC = f({}, y)), this.securityIframe = "", this.startY = 0, this.moveY = 0
		},
		initListener: function() {
			var t = this;
			this.msg.listen(function(e) {
				try {
					e = JSON.parse(e)
				} catch (s) {
					return
				}
				if (e && e.message && e.message.type) {
					e = e.message;
					var n = e.type;
					switch (n) {
					case 3:
						if (e && e.ticket) {
							t.ticket = e.ticket, t.randstr = e.randstr;
							for (var r = 0, c = t.listenFunc.length; r < c; r++) t.closeSecurityCode(function() {
								t.listenFunc[r]({
									ret: 0,
									ticket: e.ticket,
									randstr: e.randstr
								})
							});
							t.listenFunc.length || t.closeSecurityCode()
						}
						return;
					case 4:
						for (var r = 0, c = t.listenFunc.length; r < c; r++) t.closeSecurityCode(function() {
							t.listenFunc[r]({
								ret: 1,
								ticket: "",
								randstr: ""
							})
						});
						return void(t.listenFunc.length || t.closeSecurityCode());
					case 6:
						for (var r = 0, c = t.listenFunc.length; r < c; r++) t.closeSecurityCode(function() {
							t.listenFunc[r]({
								ret: 2,
								ticket: "",
								randstr: ""
							})
						});
						return void(t.listenFunc.length || t.closeSecurityCode());
					case 7:
						l(t.securityIframe, {
							border: "1px solid #e8e8e8",
							background: "#ffffff",
							"border-radius": "3px",
							opacity: "1"
						});
						var d = {
							height: t.sizeSC.height + "px",
							width: t.sizeSC.width + "px",
							top: t.posSC.top,
							left: t.posSC.left
						};
						return void l(t.securityIframe, d);
					case 8:
						t.sess = e.sess;
						var h, a, u = "captcha.php?do=" + t.opts.gettype + t.opts.params + "&cap_cd=" + t.opts.capcd + "&uid=" + t.opts.uid;
						return void S({
							url: u,
							data: {
								sess: t.sess
							},
							success: function(e) {
								t.src = "captcha.php?do=" + e.src_1 + t.opts.params + "&sess=" + e.sess;
								var s = {
									uid: t.opts.uid,
									cap_cd: t.opts.capcd,
									rnd: Math.floor(1e6 * Math.random())
								};
								t.src = i(t.src, s), t.sess = e.sess, h = e.capclass, a = e.subcapclass, t.securityIframe.src = t.src, "popup" == t.opts.type && o(h, a, t, !0)
							}
						})
					}
				}
			})
		},
		initPos: function(t) {
			t && t.top && (this.posSC.top = t.top), t && t.left && (this.posSC.left = t.left)
		},
		create: function() {
			var t = this;
			t.sess = "";
			var e, i, s = "captcha.php?do=" + t.opts.gettype + t.opts.params + "&cap_cd=" + t.opts.capcd + "&uid=" + t.opts.uid;
			S({
				url: s,
				data: {
					sess: t.sess
				},
				success: function(s) {
					if (t.src = "captcha.php?do=" + s.src_1 + t.opts.params + "&sess=" + s.sess, t.sess = s.sess, e = s.capclass, i = s.subcapclass, "popup" == t.opts.type) setTimeout(function() {
						o(s.capclass, s.subcapclass, t, !1), t.createSecurityCode(), m = window.innerWidth, window.onresize = function() {
							setTimeout(function() {
								if (!(Math.abs(window.innerWidth - m) < g)) {
									m = window.innerWidth, o(e, i, t, !1);
									var s = {
										height: t.sizeSC.height + "px",
										width: t.sizeSC.width + "px",
										top: t.posSC.top,
										left: t.posSC.left
									};
									l(t.securityIframe, s), t.send2securityCode(JSON.stringify({
										message: {
											type: 1,
											width: t.sizeSC.width,
											height: t.sizeSC.height
										}
									}))
								}
							}, 200)
						}
					}, 350);
					else {
						setTimeout(function() {
							var e = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight,
								i = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
							t.sizeSC.height = e, t.sizeSC.width = i, t.windowHeight = e, t.windowWidth = i, t.createSecurityCode(), window.onresize = function() {
								setTimeout(function() {
									var e = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight,
										i = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
									if (!(Math.abs(t.windowWidth - i) < 30)) {
										t.sizeSC.height = e, t.sizeSC.width = i, t.windowHeight = e, t.windowWidth = i;
										var s = {
											height: t.sizeSC.height + "px",
											width: t.sizeSC.width + "px"
										};
										l(t.securityIframe, s), t.send2securityCode(JSON.stringify({
											message: {
												type: 1,
												width: t.sizeSC.width,
												height: t.sizeSC.height
											}
										}))
									}
								}, 200)
							}
						}, 350)
					}
				}
			})
		},
		createSecurityCode: function() {
			this.opts.startFn();
			var t = {
				uid: this.opts.uid,
				cap_cd: this.opts.capcd,
				rnd: Math.floor(1e6 * Math.random())
			};
			if (this.hasSecurityCode()) {
				var e = {
					height: this.sizeSC.height + "px",
					width: this.sizeSC.width + "px",
					top: this.posSC.top,
					left: this.posSC.left
				};
				return l(this.securityIframe, e), void(this.securityIframe.src = i(this.src, t))
			}
			var s = document.createElement("iframe");
			s.setAttribute("frameborder", "0", 0), s.setAttribute("border", "0"), s.marginheight = 0, s.marginwidth = 0, s.setAttribute("marginheight", "0", 0), s.setAttribute("marginwidth", "0", 0);
			var n = "absolute";
			"popup" == this.opts.type ? (n = "absolute", s.setAttribute("scrolling", "no"), l(s, {
				opacity: "0"
			})) : l(s, {
				border: "0px"
			});
			var e = {
				height: this.sizeSC.height + "px",
				width: this.sizeSC.width + "px",
				top: this.posSC.top,
				left: this.posSC.left,
				position: n,
				margin: "auto",
				"z-index": 999
			};
			l(s, e), this.securityIframe = s, this.ele.appendChild(s), this.src = i(this.src, t), s.src = this.src, this.initSecurityCodeTarget()
		},
		hasSecurityCode: function() {
			var t = !! this.securityIframe && this.securityIframe;
			return t
		},
		initSecurityCodeTarget: function() {
			this.msg.addTarget(this.securityIframe.contentWindow, c.securityCode)
		},
		destroy: function() {
			r && (this.closeSecurityCode(), this.listenFunc = [], this.msg.clear(), this.ele = "", r = "")
		},
		refresh: function(t) {
			r && (this.closeSecurityCode(), this.initOptions(), u(t) && (t.uin && (this.opts.uid = t.uin), t.uid && (this.opts.uid = t.uid), t.capcd && (this.opts.capcd = t.capcd)), this.create())
		},
		listen: function(t) {
			this.listenFunc = [], this.listenFunc.push(t)
		},
		send2securityCode: function(t) {
			var e = c.securityCode;
			this.msg.targets[e].send(t)
		},
		closeSecurityCode: function(t) {
			this.opts.endFn(), this.securityIframe && (this.securityIframe.parentNode && this.securityIframe.parentNode.removeChild(this.securityIframe), this.securityIframe = ""), p(t) && t(), window.CollectGarbage && window.CollectGarbage()
		},
		clear: function() {
			this.listenFunc.length = 0
		},
		getTicket: function() {
			return {
				ticket: this.ticket,
				randstr: this.randstr
			}
		},
		start: function(t) {
			this.opts.startFn = t
		},
		end: function(t) {
			this.opts.endFn = t
		}
	}, t.AqSCode = s
}(window);