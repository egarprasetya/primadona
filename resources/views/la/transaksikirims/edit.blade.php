@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/transaksikirims') }}">TransaksiKirim</a> :
@endsection
@section("contentheader_description", $transaksikirim->$view_col)
@section("section", "TransaksiKirims")
@section("section_url", url(config('laraadmin.adminRoute') . '/transaksikirims'))
@section("sub_section", "Edit")

@section("htmlheader_title", "TransaksiKirims Edit : ".$transaksikirim->$view_col)

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
				{!! Form::model($transaksikirim, ['route' => [config('laraadmin.adminRoute') . '.transaksikirims.update', $transaksikirim->id ], 'method'=>'PUT', 'id' => 'transaksikirim-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'TanggalKirim')
					@la_input($module, 'KodeProduk')
					@la_input($module, 'JumlahBarangKirim')
					@la_input($module, 'KodeCabang')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/transaksikirims') }}">Cancel</a></button>
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
	$("#transaksikirim-edit-form").validate({
		
	});
});
</script>
@endpush
