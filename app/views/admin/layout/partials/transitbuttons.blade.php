{{ link_to("admin/transit/{$transit->id}/edit/", 'Edit', ['class' => 'btn btn-info pull-left tabular-button']) }}
{{ Form::open(['url' => 'admin/transit/' . $transit->id, 'method' => 'DELETE']) }}
{{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{{ Form::close() }}