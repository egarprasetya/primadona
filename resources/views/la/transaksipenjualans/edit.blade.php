@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/transaksipenjualans') }}">TransaksiPenjualan</a> :
@endsection
@section("contentheader_description", $transaksipenjualan->$view_col)
@section("section", "TransaksiPenjualans")
@section("section_url", url(config('laraadmin.adminRoute') . '/transaksipenjualans'))
@section("sub_section", "Edit")

@section("htmlheader_title", "TransaksiPenjualans Edit : ".$transaksipenjualan->$view_col)

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
				{!! Form::model($transaksipenjualan, ['route' => [config('laraadmin.adminRoute') . '.transaksipenjualans.update', $transaksipenjualan->id ], 'method'=>'PUT', 'id' => 'transaksipenjualan-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'NoPembeli')
					@la_input($module, 'TanggalTransaksi')
					@la_input($module, 'JumlahBarangBeli')
					@la_input($module, 'KodeProduk')
					@la_input($module, 'KodeCabang')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/transaksipenjualans') }}">Cancel</a></button>
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
	$("#transaksipenjualan-edit-form").validate({
		
	});
});
</script>
@endpush
