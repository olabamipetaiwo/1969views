<div class="row">

<div class="modal fade" id="createCategoryModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="mediumModalLabel">Create Category</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
              <form action="#" method="post" > 
                      {{ csrf_field() }}                      
                          <div class="form-group">
                              <label>Category Name</label>
                              <input 
                                  type="text"
                                  name="category_name" 
                                  id="category_name" 
                                  value="{{ Request::old('category_name') }}"
                                  class="form-control" 
                                  placeholder="Category"
                                  data-href="{{ route('admin.checkCategory') }}"
                                  >
                              @if ($errors->has('category_name'))
                                  <span class="text-danger">{{ $errors->first('category_name') }}</span>
                              @endif

                            <p class="text-danger invisible">Name Exists</p>
                          </div>
                      </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button 
                    type="button" 
                    class="btn btn-primary"  
                    data-dismiss="modal" 
                    id="createCategory"
                    data-href="{{ route('admin.createCategory') }}">Create</button>
              </div>
          </div>
      </div>
  </div>

</div>