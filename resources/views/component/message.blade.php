<div class="my-5">
    @if ($errors->any())
    <div class="alert alert-danger w-50 center border rounded px-3 py-3 mx-auto">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::get('success'))
   <div class="alert alert-sucess w-50 center border rounded px-3 py-3 mx-auto my-5">
    {{Session::get('success')}}
    </div>
@endif
</div>

