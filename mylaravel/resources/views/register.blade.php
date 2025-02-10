@extends('layouts.default_register')

@section('scripts')
    <script>
        function successRegisterAlert() {
            Swal.fire({
                title: "Drag me!",
                icon: "success",
                draggable: true
            });
            return true;
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
            if (name.val() == "My name value") {
                name.addClass('is-invalid');
                $('#invalid-name').html("ใส่ name เป็นคำนี้ไม่ได้");
            } else {
                name.removeClass('is-invalid');
            }

            return false;
        }
    </script> --}}
@endsection
