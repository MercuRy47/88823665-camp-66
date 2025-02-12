@extends('layouts.default_register')

@section('scripts')
    <script>
        function validateForm() {
            let name = document.getElementById('name');
            let email = document.getElementById('email');
            let password = document.getElementById('password');
            let mycheckbox = document.getElementById('mycheckbox');
            name = $('#name');
            email = $('#email');
            password = $('#password');

            let pass = true;

            // Check Name
            if (!name.val().trim()) {
                name.addClass('invalid-name');
                $('#invalid-name').show().html("<b><u>กรุณากรอกชื่อของคุณ</u></b>");
                pass = false;
            } else {
                name.removeClass('invalid-name');
                $('#invalid-name').hide()
            }

            // Check Email
            if (!isValidEmail(email.val())) {
                email.addClass('invalid-email');
                $('#invalid-email').show().html("<b><u>รูปแบบอีเมลไม่ถูกต้อง</u></b>");
                pass = false;
            } else {
                email.removeClass('invalid-email');
                $('#invalid-email').hide()
            }

            // Check Password
            if (!validatePassword(password.val())) {
                password.addClass('invalid-password');
                $('#invalid-password').show().html("<b><u>รูปแบบรหัสผ่านไม่ถูกต้อง</u></b>");
                pass = false;
            } else {
                password.removeClass('invalid-password');
                $('#invalid-password').hide()
            }

            // Submit
            if (pass && mycheckbox.checked) {
                document.getElementById('registerForm').submit();
            }

            console.log(name.value, email.val(), password.value, mycheckbox.checked);
        }

        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
            // return email.value.includes('@') && email.value.includes('.');
        }

        function validatePassword(password) {
            const hasLowerCase = /[a-z]/.test(password);
            const hasUpperCase = /[A-Z]/.test(password);
            const hasNumber = /\d/.test(password);

            if (!password || !(hasLowerCase && hasUpperCase && hasNumber)) {
                return false;
            } else {
                return true;
            }
        }
    </script>
    {{-- <script>
        console.log("hello");

        function MyFunction() {
            let name = document.getElementById('name');
            name = $('#name');
            let email = document.getElementById('email');
            let password = document.getElementById('password');
            let mycheckbox = document.getElementById('mycheckbox');
            // name.val("My name value");
            console.log(name.value, email.value, password.value, mycheckbox.checked)
            if (name.val() == "M") {
                name.addClass('is-invalid');
                $('#invalid-name').html("<b><u>ใส่ name เป็นคำนี้ไม่ได้</u></b>");
            } else {
                name.removeClass('is-invalid');
            }

            return false;
        }
    </script> --}}
@endsection
