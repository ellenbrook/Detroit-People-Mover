{{ link_to("admin/transitstop/{$transitstop->id}/edit/", 'Edit', ['class' => 'btn btn-info pull-left tabular-button']) }}
{{ Form::open(['url' => 'admin/transitstop/' . $transitstop->id, 'method' => 'DELETE']) }}
{{ Form::submit('Delete', ['class' => 'btn btn-danger', 'data-toggle' => 'modal', 'data-target' => '#ModalConfirm'])}}
{{ Form::close() }}