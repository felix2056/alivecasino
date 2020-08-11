<!DOCTYPE html>
<html ng-app="aff" lang="en" class="k-webkit k-webkit84 ng-scope" dir="ltr">
    <head>
        <style type="text/css">
            @charset "UTF-8";

            [ng\:cloak],
            [ng-cloak],
            [data-ng-cloak],
            [x-ng-cloak],
            .ng-cloak,
            .x-ng-cloak,
            .ng-hide:not(.ng-hide-animate) {
                display: none !important;
            }

            ng\:form {
                display: block;
            }

            .ng-animate-shim {
                visibility: hidden;
            }

            .ng-animate-anchor {
                position: absolute;
            }
        </style>

        <title>Alivecasino Affiliates</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script type="text/javascript" src="https://bam.nr-data.net/1/3ab580a886?a=44094259&amp;v=1173.01dd3ba&amp;to=NFcAbBFSXRAHUEZbWw0dN0oKHBwKCFdXShoTWhI%3D&amp;rst=8923&amp;ck=1&amp;ref=https://vbetaffiliates-admin.com/&amp;ap=68&amp;be=969&amp;fe=7470&amp;dc=2988&amp;perf=%7B%22timing%22:%7B%22of%22:1597103851927,%22n%22:0,%22f%22:10,%22dn%22:17,%22dne%22:17,%22c%22:17,%22s%22:192,%22ce%22:386,%22rq%22:386,%22rp%22:702,%22rpe%22:747,%22dl%22:752,%22di%22:2987,%22ds%22:2987,%22de%22:3416,%22dc%22:7468,%22l%22:7468,%22le%22:7482%7D,%22navigation%22:%7B%7D%7D&amp;fp=1882&amp;fcp=1882&amp;at=GBADGllITh4%3D&amp;jsonp=NREUM.setToken"></script>
        <script src="https://js-agent.newrelic.com/nr-1173.min.js"></script>
        <script async="" src="https://www.google-analytics.com/analytics.js"></script>
        <script type="text/javascript">
            (window.NREUM || (NREUM = {})).loader_config = {
                licenseKey: "3ab580a886",
                applicationID: "44094259"
            };
            window.NREUM || (NREUM = {}), __nr_require = function(e, n, t) {
                function r(t) {
                    if (!n[t]) {
                        var i = n[t] = {
                            exports: {}
                        };
                        e[t][0].call(i.exports, function(n) {
                            var i = e[t][1][n];
                            return r(i || n)
                        }, i, i.exports)
                    }
                    return n[t].exports
                }
                if ("function" == typeof __nr_require) return __nr_require;
                for (var i = 0; i < t.length; i++) r(t[i]);
                return r
            }({
                1: [function(e, n, t) {
                    function r() {}

                    function i(e, n, t) {
                        return function() {
                            return o(e, [u.now()].concat(f(arguments)), n ? null : this, t), n ? void 0 : this
                        }
                    }
                    var o = e("handle"),
                        a = e(4),
                        f = e(5),
                        c = e("ee").get("tracer"),
                        u = e("loader"),
                        s = NREUM;
                    "undefined" == typeof window.newrelic && (newrelic = s);
                    var p = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
                        l = "api-",
                        d = l + "ixn-";
                    a(p, function(e, n) {
                        s[n] = i(l + n, !0, "api")
                    }), s.addPageAction = i(l + "addPageAction", !0), s.setCurrentRouteName = i(l + "routeName", !0), n.exports = newrelic, s.interaction = function() {
                        return (new r).get()
                    };
                    var m = r.prototype = {
                        createTracer: function(e, n) {
                            var t = {},
                                r = this,
                                i = "function" == typeof n;
                            return o(d + "tracer", [u.now(), e, t], r),
                                function() {
                                    if (c.emit((i ? "" : "no-") + "fn-start", [u.now(), r, i], t), i) try {
                                        return n.apply(this, arguments)
                                    } catch (e) {
                                        throw c.emit("fn-err", [arguments, this, e], t), e
                                    } finally {
                                        c.emit("fn-end", [u.now()], t)
                                    }
                                }
                        }
                    };
                    a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function(e, n) {
                        m[n] = i(d + n)
                    }), newrelic.noticeError = function(e, n) {
                        "string" == typeof e && (e = new Error(e)), o("err", [e, u.now(), !1, n])
                    }
                }, {}],
                2: [function(e, n, t) {
                    function r(e, n) {
                        var t = e.getEntries();
                        t.forEach(function(e) {
                            "first-paint" === e.name ? c("timing", ["fp", Math.floor(e.startTime)]) : "first-contentful-paint" === e.name && c("timing", ["fcp", Math.floor(e.startTime)])
                        })
                    }

                    function i(e, n) {
                        var t = e.getEntries();
                        t.length > 0 && c("lcp", [t[t.length - 1]])
                    }

                    function o(e) {
                        if (e instanceof s && !l) {
                            var n, t = Math.round(e.timeStamp);
                            n = t > 1e12 ? Date.now() - t : u.now() - t, l = !0, c("timing", ["fi", t, {
                                type: e.type,
                                fid: n
                            }])
                        }
                    }
                    if (!("init" in NREUM && "page_view_timing" in NREUM.init && "enabled" in NREUM.init.page_view_timing && NREUM.init.page_view_timing.enabled === !1)) {
                        var a, f, c = e("handle"),
                            u = e("loader"),
                            s = NREUM.o.EV;
                        if ("PerformanceObserver" in window && "function" == typeof window.PerformanceObserver) {
                            a = new PerformanceObserver(r), f = new PerformanceObserver(i);
                            try {
                                a.observe({
                                    entryTypes: ["paint"]
                                }), f.observe({
                                    entryTypes: ["largest-contentful-paint"]
                                })
                            } catch (p) {}
                        }
                        if ("addEventListener" in document) {
                            var l = !1,
                                d = ["click", "keydown", "mousedown", "pointerdown", "touchstart"];
                            d.forEach(function(e) {
                                document.addEventListener(e, o, !1)
                            })
                        }
                    }
                }, {}],
                3: [function(e, n, t) {
                    function r(e, n) {
                        if (!i) return !1;
                        if (e !== i) return !1;
                        if (!n) return !0;
                        if (!o) return !1;
                        for (var t = o.split("."), r = n.split("."), a = 0; a < r.length; a++)
                            if (r[a] !== t[a]) return !1;
                        return !0
                    }
                    var i = null,
                        o = null,
                        a = /Version\/(\S+)\s+Safari/;
                    if (navigator.userAgent) {
                        var f = navigator.userAgent,
                            c = f.match(a);
                        c && f.indexOf("Chrome") === -1 && f.indexOf("Chromium") === -1 && (i = "Safari", o = c[1])
                    }
                    n.exports = {
                        agent: i,
                        version: o,
                        match: r
                    }
                }, {}],
                4: [function(e, n, t) {
                    function r(e, n) {
                        var t = [],
                            r = "",
                            o = 0;
                        for (r in e) i.call(e, r) && (t[o] = n(r, e[r]), o += 1);
                        return t
                    }
                    var i = Object.prototype.hasOwnProperty;
                    n.exports = r
                }, {}],
                5: [function(e, n, t) {
                    function r(e, n, t) {
                        n || (n = 0), "undefined" == typeof t && (t = e ? e.length : 0);
                        for (var r = -1, i = t - n || 0, o = Array(i < 0 ? 0 : i); ++r < i;) o[r] = e[n + r];
                        return o
                    }
                    n.exports = r
                }, {}],
                6: [function(e, n, t) {
                    n.exports = {
                        exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart
                    }
                }, {}],
                ee: [function(e, n, t) {
                    function r() {}

                    function i(e) {
                        function n(e) {
                            return e && e instanceof r ? e : e ? c(e, f, o) : o()
                        }

                        function t(t, r, i, o) {
                            if (!l.aborted || o) {
                                e && e(t, r, i);
                                for (var a = n(i), f = v(t), c = f.length, u = 0; u < c; u++) f[u].apply(a, r);
                                var p = s[y[t]];
                                return p && p.push([b, t, r, a]), a
                            }
                        }

                        function d(e, n) {
                            h[e] = v(e).concat(n)
                        }

                        function m(e, n) {
                            var t = h[e];
                            if (t)
                                for (var r = 0; r < t.length; r++) t[r] === n && t.splice(r, 1)
                        }

                        function v(e) {
                            return h[e] || []
                        }

                        function g(e) {
                            return p[e] = p[e] || i(t)
                        }

                        function w(e, n) {
                            u(e, function(e, t) {
                                n = n || "feature", y[t] = n, n in s || (s[n] = [])
                            })
                        }
                        var h = {},
                            y = {},
                            b = {
                                on: d,
                                addEventListener: d,
                                removeEventListener: m,
                                emit: t,
                                get: g,
                                listeners: v,
                                context: n,
                                buffer: w,
                                abort: a,
                                aborted: !1
                            };
                        return b
                    }

                    function o() {
                        return new r
                    }

                    function a() {
                        (s.api || s.feature) && (l.aborted = !0, s = l.backlog = {})
                    }
                    var f = "nr@context",
                        c = e("gos"),
                        u = e(4),
                        s = {},
                        p = {},
                        l = n.exports = i();
                    l.backlog = s
                }, {}],
                gos: [function(e, n, t) {
                    function r(e, n, t) {
                        if (i.call(e, n)) return e[n];
                        var r = t();
                        if (Object.defineProperty && Object.keys) try {
                            return Object.defineProperty(e, n, {
                                value: r,
                                writable: !0,
                                enumerable: !1
                            }), r
                        } catch (o) {}
                        return e[n] = r, r
                    }
                    var i = Object.prototype.hasOwnProperty;
                    n.exports = r
                }, {}],
                handle: [function(e, n, t) {
                    function r(e, n, t, r) {
                        i.buffer([e], r), i.emit(e, n, t)
                    }
                    var i = e("ee").get("handle");
                    n.exports = r, r.ee = i
                }, {}],
                id: [function(e, n, t) {
                    function r(e) {
                        var n = typeof e;
                        return !e || "object" !== n && "function" !== n ? -1 : e === window ? 0 : a(e, o, function() {
                            return i++
                        })
                    }
                    var i = 1,
                        o = "nr@id",
                        a = e("gos");
                    n.exports = r
                }, {}],
                loader: [function(e, n, t) {
                    function r() {
                        if (!x++) {
                            var e = E.info = NREUM.info,
                                n = d.getElementsByTagName("script")[0];
                            if (setTimeout(s.abort, 3e4), !(e && e.licenseKey && e.applicationID && n)) return s.abort();
                            u(y, function(n, t) {
                                e[n] || (e[n] = t)
                            }), c("mark", ["onload", a() + E.offset], null, "api");
                            var t = d.createElement("script");
                            t.src = "https://" + e.agent, n.parentNode.insertBefore(t, n)
                        }
                    }

                    function i() {
                        "complete" === d.readyState && o()
                    }

                    function o() {
                        c("mark", ["domContent", a() + E.offset], null, "api")
                    }

                    function a() {
                        return O.exists && performance.now ? Math.round(performance.now()) : (f = Math.max((new Date).getTime(), f)) - E.offset
                    }
                    var f = (new Date).getTime(),
                        c = e("handle"),
                        u = e(4),
                        s = e("ee"),
                        p = e(3),
                        l = window,
                        d = l.document,
                        m = "addEventListener",
                        v = "attachEvent",
                        g = l.XMLHttpRequest,
                        w = g && g.prototype;
                    NREUM.o = {
                        ST: setTimeout,
                        SI: l.setImmediate,
                        CT: clearTimeout,
                        XHR: g,
                        REQ: l.Request,
                        EV: l.Event,
                        PR: l.Promise,
                        MO: l.MutationObserver
                    };
                    var h = "" + location,
                        y = {
                            beacon: "bam.nr-data.net",
                            errorBeacon: "bam.nr-data.net",
                            agent: "js-agent.newrelic.com/nr-1173.min.js"
                        },
                        b = g && w && w[m] && !/CriOS/.test(navigator.userAgent),
                        E = n.exports = {
                            offset: f,
                            now: a,
                            origin: h,
                            features: {},
                            xhrWrappable: b,
                            userAgent: p
                        };
                    e(1), e(2), d[m] ? (d[m]("DOMContentLoaded", o, !1), l[m]("load", r, !1)) : (d[v]("onreadystatechange", i), l[v]("onload", r)), c("mark", ["firstbyte", f], null, "api");
                    var x = 0,
                        O = e(6)
                }, {}],
                "wrap-function": [function(e, n, t) {
                    function r(e) {
                        return !(e && e instanceof Function && e.apply && !e[a])
                    }
                    var i = e("ee"),
                        o = e(5),
                        a = "nr@original",
                        f = Object.prototype.hasOwnProperty,
                        c = !1;
                    n.exports = function(e, n) {
                        function t(e, n, t, i) {
                            function nrWrapper() {
                                var r, a, f, c;
                                try {
                                    a = this, r = o(arguments), f = "function" == typeof t ? t(r, a) : t || {}
                                } catch (u) {
                                    l([u, "", [r, a, i], f])
                                }
                                s(n + "start", [r, a, i], f);
                                try {
                                    return c = e.apply(a, r)
                                } catch (p) {
                                    throw s(n + "err", [r, a, p], f), p
                                } finally {
                                    s(n + "end", [r, a, c], f)
                                }
                            }
                            return r(e) ? e : (n || (n = ""), nrWrapper[a] = e, p(e, nrWrapper), nrWrapper)
                        }

                        function u(e, n, i, o) {
                            i || (i = "");
                            var a, f, c, u = "-" === i.charAt(0);
                            for (c = 0; c < n.length; c++) f = n[c], a = e[f], r(a) || (e[f] = t(a, u ? f + i : i, o, f))
                        }

                        function s(t, r, i) {
                            if (!c || n) {
                                var o = c;
                                c = !0;
                                try {
                                    e.emit(t, r, i, n)
                                } catch (a) {
                                    l([a, t, r, i])
                                }
                                c = o
                            }
                        }

                        function p(e, n) {
                            if (Object.defineProperty && Object.keys) try {
                                var t = Object.keys(e);
                                return t.forEach(function(t) {
                                    Object.defineProperty(n, t, {
                                        get: function() {
                                            return e[t]
                                        },
                                        set: function(n) {
                                            return e[t] = n, n
                                        }
                                    })
                                }), n
                            } catch (r) {
                                l([r])
                            }
                            for (var i in e) f.call(e, i) && (n[i] = e[i]);
                            return n
                        }

                        function l(n) {
                            try {
                                e.emit("internal-error", n)
                            } catch (t) {}
                        }
                        return e || (e = i), t.inPlace = u, t.flag = a, t
                    }
                }, {}]
            }, {}, ["loader"]);
        </script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <link rel="icon" href="data/favicon-overwrite.ico?a=1597103853">
        <link rel="shortcut icon" href="data/favicon-overwrite.ico?a=1597103853">
        <link rel="apple-touch-icon" sizes="120x120" href="data/favicon-overwrite.ico?a=1597103853">
        <link rel="stylesheet" type="text/css" href="/assets/global/plugins/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/global/plugins/icons/aff_icons/style.css">
        <link rel="stylesheet" type="text/css" href="/assets/global/bower_components/foundation-sites/dist/foundation.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/global/plugins/percentage-circle/circle.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/global/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/global/kendo/styles/kendo.common-material.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/global/kendo/styles/kendo.material.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/global/kendo/styles/kendo.dataviz.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/global/kendo/styles/kendo.dataviz.material.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/global/kendo/styles/kendo.default.mobile.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/global/bower_components/slick-carousel/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="/assets/global/bower_components/slick-carousel/slick/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="/assets/global/bower_components/loaders.css/loaders.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/global/bower_components/chosen/chosen.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/global/bower_components/Swiper/dist/css/swiper.min.css">
        <!--    <link rel="apple-touch-icon" sizes="120x120" href="img/touch-icon-iphone-retina.png">-->



        <script>
            var isAgent = 0;
        </script>

        <link rel="stylesheet" type="text/css" href="css/style.min.css?a=5518e1fc414bb168f7ba218f63e1614b09c1bd45">
        <link rel="stylesheet" type="text/css" href="data/overwrite.css?a=1597103853">


        <script>
            var productList = {
                    "sportsbook": "Sportsbook",
                    "liveGames": "Live Games",
                    "virtualGames": "Virtual Games",
                    "skillGames": "Skill Games",
                    "bettingGames": "Betting Games",
                    "poolBettingGames": "Pool Betting Games",
                    "slots": "Slots",
                    "tableGames": "Table Games",
                    "videoPoker": "Video Poker",
                    "nativePoker": "Betconstruct Poker",
                    "fantasySport": "Fantasy Sport"
                },
                isPermitted = 0;
        </script>

        <meta class="foundation-mq">
    </head>
</html>

<body ng-controller="RootController" ng-init="init()" ng-class="{'top50':showNotification, 'overflowHidden' : openMenu, 'overflowHidden' : openMsg}" class="ng-scope" style="visibility: visible;" data-gr-c-s-loaded="true">
    <div class="preLoader ng-hide" ng-hide="loaded"></div>
    <div id="toggleAutForm">
        <div class="loginFormContainer scrollClass">
            <div class="Pop-up ng-isolate-scope" loading="loadinFormLogin">
                <div class="base">
                    <div>
                        <div class="headerText">
                            <div class="partnerNameDiv">
                                <p class="partnerName ng-binding">Alivecasino</p>
                            </div>
                            <!-- ngIf: !isCustomLanding -->
                        </div>
                        <div>
                            <p class="affiliates">Affiliates</p>
                        </div>
                    </div>
                    <div>
                        <div class="welcomeDiv">
                            <p class="welcome">Welcome!</p>
                        </div>
                        <div class="welcomeDiv">
                            <p class="subtext">Grow your business with us.</p>

                        </div>
                    </div>

                    <div class="registerButtonDiv">
                        <!-- ngIf: currentSec !== 'login' && currentSec !== '' && currentSec !== 'termsAndConditions' -->
                        <!-- ngIf: currentSec === 'login' || currentSec === 'termsAndConditions' || currentSec === '' --><a class="registerButton ng-scope" href="/#register" ng-if="currentSec === 'login' || currentSec === 'termsAndConditions' || currentSec === ''">
                            <p class="registerButtonText">Register now</p>
                        </a><!-- end ngIf: currentSec === 'login' || currentSec === 'termsAndConditions' || currentSec === '' -->
                    </div>
                    <div class="footer">
                        <p class="footerText">Easy Way to Manage Your Work Process</p>
                        <div class="iconDiv">
                            <div class="Ellipse1 Elipse">
                                <i class="icon-icon"></i>
                                <p>Link-Creator</p>
                            </div>
                            <div class="Ellipse2 Elipse">
                                <i class="icon-share-2"></i>
                                <p>Social-Share</p>
                            </div>
                            <div class="Ellipse3 Elipse">
                                <i class="icon-html5"></i>
                                <p>Banner-Builder</p>
                            </div>
                            <div class="Ellipse4 Elipse">
                                <i class="icon-icon-1"></i>
                                <p>Media</p>
                            </div>
                            <div class="Ellipse5 Elipse">
                                <i class="icon-icon-2"></i>
                                <p>XML-Feed</p>
                            </div>
                            <div class="Ellipse6 Elipse">
                                <i class="icon-icon-3"></i>
                                <p>JSON-Feed</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ngIf: !currentSec || currentSec == 'login' -->
                <div class="baseRight ng-scope" ng-if="!currentSec || currentSec == 'login'" ng-controller="SignInController">
                    <div class="baseRightInformation ng-isolate-scope" loading="contentLoading">
                        <div class="subInformationDiv">
                            <div>
                                <div class="baseRightHeader">
                                    <div class="headerText">
                                        <p class="signInAndRegister">Sign In To Your Account</p>
                                    </div>
                                </div>
                                <div class="signInAndRegisterForm">
                                    <form class="signIn ng-pristine ng-invalid ng-invalid-required" name="signInForm" v-validate-form="user" novalidate="">
                                        <div class="signInAndRegisterInput">
                                            <div class="iconAndInputDiv">
                                                <i class="icon-user"></i>
                                                <input class="inputFields ng-pristine ng-untouched ng-invalid ng-invalid-required" type="text" placeholder="username or e-mail" name="username" v-validate-for="registrationUsername" ng-model="user.username" v-validate-classes="inputFields:inputFieldsError" required="">
                                                <!-- ngIf: signInForm.username.$dirty -->
                                            </div>
                                        </div>
                                        <div class="signInAndRegisterInput">
                                            <div class="iconAndInputDiv">
                                                <i class="icon-lock"></i>
                                                <input class="inputFields ng-pristine ng-untouched ng-invalid ng-invalid-required" type="password" placeholder="Password" name="password" v-validate-for="registrationPassword" v-validate-classes="inputFields:inputFieldsError" ng-model="user.password" required="">
                                                <!-- ngIf: signInForm.password.$dirty -->
                                            </div>
                                        </div>
                                        <!-- ngIf: signInError -->
                                        <div class="forgotPassword">
                                            <a href="/#forgotPassword">Forgot Password?</a>
                                        </div>
                                        <div class="signInAndSendButton">
                                            <button class="button medium ng-scope disabledBut" ng-disabled="signInForm.$pristine || signInForm.$invalid" ng-class="{'disabledBut' : signInForm.$invalid, 'lightGreen' : !signInForm.$invalid}" disabled="disabled">
                                                Sign In
                                            </button>
                                        </div>
                                        <div class="registerAndSingInButtonMobile">
                                            <a href="/#register">Register now</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ngIf: !isCustomLanding -->
                        <div ng-show="loading" class="loadingStyle ng-scope ng-hide">
                            <div class="loader">
                                <div class="loader-inner ball-pulse-sync">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end ngIf: !currentSec || currentSec == 'login' -->
                <!-- ngIf: currentSec == 'register' -->
                <!-- ngIf: currentSec == 'forgotPassword' -->
                <!-- ngIf: currentSec == 'resendEmail' -->
                <!-- ngIf: currentSec == 'resendPassword' -->
                <!-- ngIf: currentSec == 'termsAndConditions' -->
                <!-- ngIf: currentSec && currentSec !== 'login' && currentSec !== 'register' && currentSec !== 'forgotPassword' && currentSec !== 'resendPassword' && currentSec !== 'termsAndConditions' && currentSec !== 'resendEmail' -->
                <div ng-show="loading" class="loadingStyle ng-scope ng-hide">
                    <div class="loader">
                        <div class="loader-inner ball-pulse-sync">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <div id="appendNotification" class="demo-section k-content" style=" overflow: visible; position: fixed; top: 20px; z-index: 10002; right: 20px; background-color: transparent !important;"></div>

</body>

</html>