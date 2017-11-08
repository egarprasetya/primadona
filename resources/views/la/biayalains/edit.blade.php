@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/biayalains') }}">BiayaLain</a> :
@endsection
@section("contentheader_description", $biayalain->$view_col)
@section("section", "BiayaLains")
@section("section_url", url(config('laraadmin.adminRoute') . '/biayalains'))
@section("sub_section", "Edit")

@section("htmlheader_title", "BiayaLains Edit : ".$biayalain->$view_col)

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
				{!! Form::model($biayalain, ['route' => [config('laraadmin.adminRoute') . '.biayalains.update', $biayalain->id ], 'method'=>'PUT', 'id' => 'biayalain-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'NamaBIaya')
					@la_input($module, 'BesarBiaya')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/biayalains') }}">Cancel</a></button>
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
	$("#biayalain-edit-form").validate({
		
	});
});
</script>
@endpush
