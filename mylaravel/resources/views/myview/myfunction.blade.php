<h1>My Controller</h1>
{{-- <h1><?php echo $myvalue; ?></h1> --}}
<h1>myinput: {{ $myinput }}</h1>
<h1>myvalue: {{ $myvalue }}</h1>
<form action="{{ url('/mycontroller') }}" method="post">
    @csrf
    <input type="text" name="myinput" id="">
    <button type="submit">Submit</button>
</form>