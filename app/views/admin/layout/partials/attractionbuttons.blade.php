{{ link_to("admin/transitline/{$attraction->id}/edit/", 'Edit', ['class' => 'btn btn-info pull-left tabular-button']) }}
{{ Form::open(['url' => 'admin/attraction/' . $attraction->id, 'method' => 'DELETE']) }}
{{ Form::submit('Delete', ['class' => 'btn btn-danger', 'data-toggle' => 'modal', 'data-target' => '#ModalConfirm'])}}
{{ Form::close() }}