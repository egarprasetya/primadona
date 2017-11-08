@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/cabangs') }}">Cabang</a> :
@endsection
@section("contentheader_description", $cabang->$view_col)
@section("section", "Cabangs")
@section("section_url", url(config('laraadmin.adminRoute') . '/cabangs'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Cabangs Edit : ".$cabang->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($cabang, ['route' => [config('laraadmin.adminRoute') . '.cabangs.update', $cabang->id ], 'method'=>'PUT', 'id' => 'cabang-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'NamaCabang')
					@la_input($module, 'KodeProduk')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/cabangs') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#cabang-edit-form").validate({
		
	});
});
</script>
@endpush
