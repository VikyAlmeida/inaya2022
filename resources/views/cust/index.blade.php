@extends("cust.layouts.layout")
@section('publications')
<div class="section type-3" style="margin-top: 9em;">
  <div class="container">
    <div class="section-headlines">
      <h4>Tus locales</h4>
      <h2><a href="{{ url('/customer/misLocales/create') }}"><i class="fa fa-comments" style="color:#666666"></i> Añadir local</a></h2>
    </div>
    <div class="row">
      @if(!$locales)
        <h3>No has dado de alta a ningun establecimiento</h3>
      @endif
      @foreach ($locales as $local)
        <div class="col-md-4">
          <div class="team_item">
            <div class="img_block"><a href="{{ url('customer/misLocales',$local) }}"><img alt="" src="../../images/locales/{{"local-".$local->id."-user-".$local->customer_id}}/{{$local->profile}}" width="290px" height="350px"></a></div>
            <div class="team_body">
              <a href=""><h5>{{ $local->name }}</h5></a>
              <p style="text-align:justify;">{{$local->details}}</p>
              <p style="text-align:justify;">Direccion: {{$local->address}}</p>
              <p style="text-align:justify;">
                <form action="{{ url('customer/misLocales') }}" method="post" enctype="multipart/form-data" >
                  @csrf 
                  @method("delete")
                  <input type="hidden" name="local_id" value="{{ $local->id }}">
                  <button type="submit" style="border:0px;background-color:transparent;"><i class="menu-icon tf-icons bx bxs-trash"style="color:red;font-size:20px;"></i></button>
                  <a href="{{ url('customer/misLocales/edit',$local) }}"><i class="menu-icon tf-icons bx bxs-edit"style="color:orange;font-size:20px;"></i></a>
                </form>	
              </p>
              </div>
          </div>
        </div>
      @endforeach
    </div>
    
    <!--end:.row--> 
  </div>
  <!--end:.container--> 
</div>
@stop
@section('comment')
<div id="jump5" class="jumper"></div>

@stop
@section('contact')

@stop
@push("styles")
<link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />
@endpush
@push('scripts')
@endpush