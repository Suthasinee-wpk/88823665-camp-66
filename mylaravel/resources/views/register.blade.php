@extends('layouts.default')

@section('content')
    <div class="register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="../index2.html"><b>Admin</b>LTE</a>
            </div>
            <!-- /.register-logo -->
            <div class="card">
                <div class="card-body register-card-body">
                    <p class="register-box-msg">Register a new membership</p>
                    <form action="{{ url('/register') }}"  method="post">
                        @csrf <!-- ทุกครั้งที่ทำฟอร์มให้ใส่ด้วยไม่งั้นข้อมูลจะไม่ส่งค่าไป -->
                        <div class="input-group mb-3">
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Full Name" />
                            <div class="input-group-text"><span class="bi bi-person"></span></div>
                            <div class="valid-feedback">
                                OK
                            </div>
                            <div class="invalid-feedback" id="invalid-name">
                                กรุณาระบุข้อมูล name
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email"/>
                            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                            <div class="valid-feedback">
                                OK
                            </div>
                            <div class="invalid-feedback" id="invalid-email">
                                กรุณาระบุข้อมูล email
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" id="pass" class="form-control"
                                placeholder="Password" />
                            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                            <div class="valid-feedback">
                                OK
                            </div>
                            <div class="invalid-feedback" id="invalid-pass">
                                กรุณาระบุข้อมูล pass
                            </div>
                        </div>
                        <!--begin::Row-->
                        <div class="row">
                            <div class="col-8">
                                <div class="form-check">
                                    <input class="form-check-input" id="mycheckbox" type="checkbox" value=""
                                        id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree to the <a href="#">terms</a>
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Sign In</button>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!--end::Row-->
                    </form>
                    <button class="btn" onclick="myfunction()">Click Me</button>
                    <div class="social-auth-links text-center mb-3 d-grid gap-2">
                        <p>- OR -</p>
                        <a href="#" class="btn btn-primary">
                            <i class="bi bi-facebook me-2"></i> Sign in using Facebook
                        </a>
                        <a href="#" class="btn btn-danger">
                            <i class="bi bi-google me-2"></i> Sign in using Google+
                        </a>
                    </div>
                    <!-- /.social-auth-links -->
                    <p class="mb-0">
                        <a href="login.html" class="text-center"> I already have a membership </a>
                    </p>
                </div>
                <!-- /.register-card-body -->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // let $myval
        // var myval2 = "value of myval2"
        // const myval3 = ""
        // console.log("Hello World!")
        // alert("Hello World!")
        /**/
        //
        // ALERT("Hello World!")

        function myfunction() {
            let name = $('#name').val();
            let email = $('#email').val();
            let pass = $('#pass').val();
            let mycheckbox = $('#mycheckbox').prop('checked');
            // document.getElementsByClass()
            // name.value = "My Name Value"
            // name.val("My Name Value")
            console.log(name, email, pass, mycheckbox);

            if (name == "") {
                $('#name').addClass('is-invalid');
                $('#invalid-name').html("<b><u>กรุณาระบุชื่อ</u></b>");
                return false;
            } else {
                $('#name').removeClass('is-invalid');
            }

            let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(email)) {
                $('#email').addClass('is-invalid');
                $('#invalid-email').html("<b><u> กรุณาระบุอีเมลให้ถูกต้อง @ และ . </u></b>");
                return false;
            } else {
                $('#email').removeClass('is-invalid');
            }

            let passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]+$/;
            if (!passwordPattern.test(pass)) {
                $('#pass').addClass('is-invalid');
                $('#invalid-pass').html("<b><u> รหัสผ่านต้องมีตัวอักษรพิมพ์ใหญ่ ตัวอักษรพิมพ์เล็ก และตัวเลข </u></b>");
                return false;
            } else {
                $('#pass').removeClass('is-invalid');
            }

            if (!mycheckbox) {
                $('mycheckbox').addClass('is-invalid');
                alert('กรุณายอมรับข้อกำหนด');
                return false;
            }
            return true;
        }
    </script>
    <script>
        //console.log(myval2);
    </script>
@endsection
