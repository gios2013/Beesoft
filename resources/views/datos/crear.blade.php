<form method="POST" action="{{ route('datos/store') }}" role="form" enctype="multipart/form-data">
 
  <input type="hidden" name="_method" value="PUT">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
  @include('datos.frm.prt')
                                                          
</form>