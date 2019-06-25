<!-- Modal -->
<div id="catrine" class="modal fade" role="dialog">
    <div class="modal-dialog">      
      <!-- Appple Contrab-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Catrine</h4>
        </div>
        <div class="modal-body">
                <form autocomplete="off" method="POST" action="{{ route('adsection') }}" enctype="multipart/form-data" id="commentForm">
                    {{ csrf_field() }}    
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Catrine Title</label>
                        <input type="text" pattern=".{12,}" required title="3 characters minimum" id="ctitle" class="form-control" placeholder="Course Title" name="section_name" style="" value="" required>
                    </div>                  
                    <div class="form-group" style="display:none;">
                        <label for="exampleFormControlTextarea1">Course ID</label>
                        <input type="text" class="form-control" id="slugg" placeholder="Slugg" name="course_id" style="" value="{{ $lesson->course_id }}" required>
                    </div>                    
                     
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Ctrine Body</label>
                        <input type="number" pattern=".{160,}" required title="160 characters minimum" class="form-control" placeholder="Catrine Description" name="catrine_body" style="" value="0" required>
                    </div>
                    <br>                      
                     </div>
                     <div class="modal-footer">
                     <button type="submit" value="Validate!" class="btn btn-primary">Save</button>
                </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>