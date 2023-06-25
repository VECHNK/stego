@if(session()->has('message'))
{{--<div class="fixed top-5 left=1/2 text-black px-48 py-3">
<p>
    {{session('message')}}
</p>
</div>--}}
<div class="alert alert-success text-center" role="alert">
    <p>
        {{session('message')}}
    </p>
</div>
@endif
