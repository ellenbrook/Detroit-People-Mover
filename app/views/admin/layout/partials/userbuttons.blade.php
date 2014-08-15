{{ link_to("admin/user/{$user->id}/edit/", 'Edit', ['class' => 'btn btn-info pull-left tabular-button']) }}
{{ Form::open(['url' => 'admin/user/' . $user->id, 'method' => 'DELETE']) }}
{{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{{ Form::close() }}