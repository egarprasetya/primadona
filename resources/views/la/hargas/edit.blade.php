@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/hargas') }}">Harga</a> :
@endsection
@section("contentheader_description", $harga->$view_col)
@section("section", "Hargas")
@section("section_url", url(config('laraadmin.adminRoute') . '/hargas'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Hargas Edit : ".$harga->$view_col)

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
				{!! Form::model($harga, ['route' => [config('laraadmin.adminRoute') . '.hargas.update', $harga->id ], 'method'=>'PUT', 'id' => 'harga-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'StatusHarga')
					@la_input($module, 'Harga')
					@la_input($module, 'TanggalHarga')
					@la_input($module, 'KodeProduk')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/hargas') }}">Cancel</a></button>
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
	$("#harga-edit-form").validate({
		
	});
});
</script>
@endpush
