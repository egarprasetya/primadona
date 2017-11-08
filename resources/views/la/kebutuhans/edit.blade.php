@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/kebutuhans') }}">Kebutuhan</a> :
@endsection
@section("contentheader_description", $kebutuhan->$view_col)
@section("section", "Kebutuhans")
@section("section_url", url(config('laraadmin.adminRoute') . '/kebutuhans'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Kebutuhans Edit : ".$kebutuhan->$view_col)

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
				{!! Form::model($kebutuhan, ['route' => [config('laraadmin.adminRoute') . '.kebutuhans.update', $kebutuhan->id ], 'method'=>'PUT', 'id' => 'kebutuhan-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'KodeProduk')
					@la_input($module, 'KodeBahan')
					@la_input($module, 'JumlahKebutuhan')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/kebutuhans') }}">Cancel</a></button>
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
	$("#kebutuhan-edit-form").validate({
		
	});
});
</script>
@endpush
