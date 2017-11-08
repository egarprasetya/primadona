@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/pembuatans') }}">Pembuatan</a> :
@endsection
@section("contentheader_description", $pembuatan->$view_col)
@section("section", "Pembuatans")
@section("section_url", url(config('laraadmin.adminRoute') . '/pembuatans'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Pembuatans Edit : ".$pembuatan->$view_col)

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
				{!! Form::model($pembuatan, ['route' => [config('laraadmin.adminRoute') . '.pembuatans.update', $pembuatan->id ], 'method'=>'PUT', 'id' => 'pembuatan-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'tanggalproduksi')
					@la_input($module, 'KodeProduk')
					@la_input($module, 'JumlahProduksi')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/pembuatans') }}">Cancel</a></button>
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
	$("#pembuatan-edit-form").validate({
		
	});
});
</script>
@endpush
