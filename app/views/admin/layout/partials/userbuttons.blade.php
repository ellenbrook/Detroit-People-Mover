{{ link_to("/user/{$user->id}/edit/", 'Edit', ['class' => 'btn btn-info pull-left tabular-button']) }}
{{ Form::open(['url' => '/user/' . $user->id, 'method' => 'DELETE']) }}
{{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{{ Form::close() }}