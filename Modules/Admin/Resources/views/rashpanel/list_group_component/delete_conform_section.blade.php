<div id="deletesec{{ $lg_data->les_group_id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">      
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete Section</h4>
        </div>
        <div class="modal-body">
              <p>Are you really want to delete this section? {{ $lg_data->les_group_name }} </p>                 
        </div>
        <div class="modal-footer">
            <button type="submit" value="Validate!" class="btn btn-danger">Delete</button>
        </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
