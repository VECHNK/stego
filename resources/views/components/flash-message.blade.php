@if(session()->has('message'))
<div class="fixed top-5 left=1/2 transgorm -translate-x-1/2 bg-laravel text-black px-48 py-3">
<p>
    {{session('message')}}
</p>
</div>
@endif
