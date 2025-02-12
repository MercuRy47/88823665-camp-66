@extends('layouts.default_table')

@section('scripts')
    <script>
        function confirmDelete() {
            if(confirm('Are you sure you want to delete?')){
                document.getElementById('delete-form').submit();
            }
        }

        function confirmAlert(){

            return true;
        }
    </script>
@endsection
