{{ link_to("admin/transitstop/{$transitstop->id}/edit/", 'Edit', ['class' => 'btn btn-info pull-left tabular-button']) }}
{{ Form::open(['url' => 'admin/transitstop/' . $transitstop->id, 'method' => 'DELETE']) }}
{{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{{ Form::close() }}