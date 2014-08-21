@if($errors->has())
   @foreach ($errors->all() as $error)
   <div class="alert alert-danger" role="alert">
      {{ $error }}
   </div>
  @endforeach
@endif

@if(Session::get('flash_message'))
	<div class="alert alert-danger" role="alert">
		{{ Session::get('flash_message') }}
	</div>
@endif

@if(Session::get('flash_message'))
	<div class="alert alert-success" role="alert">
		{{ Session::get('flash_message') }}
	</div>
@endif

<div class="modal fade" id="ModalConfirm">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Are you sure?</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this item?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary"  data-dismiss="modal" id="confirmDelete">Yes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->