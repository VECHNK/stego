<h2>
    {{$st_prog['prog_name']}}
</h2>
@unless(empty($st_prog->author))
<p>
    {{$st_prog['author']}}
</p>
@else
<p>No author found</p>
@endunless

<form method="GET" action="/editapp/{{$st_prog->id}}" enctype="multipart/form-data">
<div class="mb-6">
    <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
      Update app
    </button>
    <a href="/" class="text-black ml-4"> Back </a>
  </div>
</form>

<form method="POST" action="/editapp/{{$st_prog->id}}">
    @csrf
    @method('DELETE')
        <button class="text-red-500"><i class="fa-solid fa-trash"></i>
          Delete app
        </button>
    </form>