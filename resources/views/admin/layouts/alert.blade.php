
            <div class="col-sm-12">
            
               @if (Session::has('info'))
                        <div class="alert alert-info" role="alert">
                                {{ Session::get('info') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                @endif

                @if(Session::has('error'))
                <div class="alert alert-info" role="alert">
                         {{ Session::get('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                @endif
            </div>



