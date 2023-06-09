<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href=" {{ asset('template') }}/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href=" {{ asset('template') }}/dist/css/adminlte.min.css?v=3.2.0">
    <script nonce="a12e23e3-2108-4df9-b953-f3152c6bbc5e">
        (function (w, d) {
            ! function (Z, _, ba, bb) {
                Z.zarazData = Z.zarazData || {};
                Z.zarazData.executed = [];
                Z.zaraz = {
                    deferred: [],
                    listeners: []
                };
                Z.zaraz.q = [];
                Z.zaraz._f = function (bc) {
                    return function () {
                        var bd = Array.prototype.slice.call(arguments);
                        Z.zaraz.q.push({
                            m: bc,
                            a: bd
                        })
                    }
                };
                for (const be of ["track", "set", "debug"]) Z.zaraz[be] = Z.zaraz._f(be);
                Z.zaraz.init = () => {
                    var bf = _.getElementsByTagName(bb)[0],
                        bg = _.createElement(bb),
                        bh = _.getElementsByTagName("title")[0];
                    bh && (Z.zarazData.t = _.getElementsByTagName("title")[0].text);
                    Z.zarazData.x = Math.random();
                    Z.zarazData.w = Z.screen.width;
                    Z.zarazData.h = Z.screen.height;
                    Z.zarazData.j = Z.innerHeight;
                    Z.zarazData.e = Z.innerWidth;
                    Z.zarazData.l = Z.location.href;
                    Z.zarazData.r = _.referrer;
                    Z.zarazData.k = Z.screen.colorDepth;
                    Z.zarazData.n = _.characterSet;
                    Z.zarazData.o = (new Date).getTimezoneOffset();
                    Z.zarazData.q = [];
                    for (; Z.zaraz.q.length;) {
                        const bl = Z.zaraz.q.shift();
                        Z.zarazData.q.push(bl)
                    }
                    bg.defer = !0;
                    for (const bm of [localStorage, sessionStorage]) Object.keys(bm || {}).filter((bo => bo
                        .startsWith("_zaraz_"))).forEach((bn => {
                        try {
                            Z.zarazData["z_" + bn.slice(7)] = JSON.parse(bm.getItem(bn))
                        } catch {
                            Z.zarazData["z_" + bn.slice(7)] = bm.getItem(bn)
                        }
                    }));
                    bg.referrerPolicy = "origin";
                    bg.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(Z.zarazData)));
                    bf.parentNode.insertBefore(bg, bf)
                };
                ["complete", "interactive"].includes(_.readyState) ? zaraz.init() : Z.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-4"></div>
                        <!-- form login -->
                        <div class="col-sm-4">
                            <div class="login-box ">

                                <div class="card card-outline card-primary">

                                    <div class="card-header text-center">
                                        <h3><strong>LOGIN</strong></h3>
                                    </div>

                                    <div class="card-body">


                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control "
                                                    placeholder="Email" autofocus required>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password"
                                                    class="form-control" placeholder="Password" required>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <hr>
                                            <div class="row">
                                                <div class="col-8">

                                                </div>
                                                <div class="col-4 ">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-block">Login</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('template') }}/plugins/jquery/jquery.min.js"></script>

    <script src="{{ asset('template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('template') }}/dist/js/adminlte.min.js?v=3.2.0"></script>

    <script src="{{ asset('template') }}/dist/js/demo.js"></script>
</body>

</html>