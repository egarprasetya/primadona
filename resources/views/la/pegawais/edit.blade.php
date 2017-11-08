@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/pegawais') }}">Pegawai</a> :
@endsection
@section("contentheader_description", $pegawai->$view_col)
@section("section", "Pegawais")
@section("section_url", url(config('laraadmin.adminRoute') . '/pegawais'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Pegawais Edit : ".$pegawai->$view_col)

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
				{!! Form::model($pegawai, ['route' => [config('laraadmin.adminRoute') . '.pegawais.update', $pegawai->id ], 'method'=>'PUT', 'id' => 'pegawai-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'namapegawai')
					@la_input($module, 'tempatlahir')
					@la_input($module, 'tanggallahir')
					@la_input($module, 'bagianpegawai')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/pegawais') }}">Cancel</a></button>
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
	$("#pegawai-edit-form").validate({
		
	});
});
</script>
@endpush
