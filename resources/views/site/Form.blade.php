@extends('site.master');
@section('content')
    <div class="form-add-category">
        @if(count($errors)>0)
            <ul>
                @foreach($errors->all() as $err)
                    <li>{!! $err !!}</li>
                @endforeach
            </ul>
        @endif
        <form method="post" action="{!! route('addCat') !!}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <span>Tên Category:</span>
                <span><input type="text" name="cat_name"> {!! $errors->first('cat_name') !!}</span>
                <div><input type="submit" value="Save"></div>
        </form>
    </div>
@endsection