@if($errors->any())
    <div class="alert alert-danger">
    	{{$errors->first('category_name')}}
    	{{$errors->first('todo_name')}}
    	{{$errors->first('category_id')}}
    </div>
@endif
@if(Session::has('success'))
	<div class="alert alert-success">
		{{Session::get('success')}}
	</div>
@endif

@if(Session::has('error'))
	<div class="alert alert-danger">
		{{Session::get('error')}}
	</div>
@endif