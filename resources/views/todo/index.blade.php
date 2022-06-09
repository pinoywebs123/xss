
@extends('category.index')


@section('todos')

@if($todos->count() > 0)
	@foreach($todos as $todo)
			<div class="form-group">
				<input type="checkbox" name="todo_status" class="todo_status" data-status="{{$todo->id}}" {{$todo->status == true ? 'checked': ''}}>
			{{$todo->todo_name}} <a href="{{route('todo_delete', $todo->id)}}">X</a>
			</div>
			
	@endforeach
@endif
@endsection

@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		var update_todo_status = "{{route('todo_update_status')}}";
		var token = "{{Session::token()}}";

		$(".todo_status").click(function(){
			var todo_id = $(this).data('status');


			$.ajax({
		    type:"POST",
		    url: update_todo_status,
		    data:{_token: token, todo_id: todo_id},
		    success: function(data){
		      console.log(data);
		    }
		  })

		});
	});
</script>
@endsection