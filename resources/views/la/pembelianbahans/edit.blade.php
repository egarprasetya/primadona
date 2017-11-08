@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/pembelianbahans') }}">PembelianBahan</a> :
@endsection
@section("contentheader_description", $pembelianbahan->$view_col)
@section("section", "PembelianBahans")
@section("section_url", url(config('laraadmin.adminRoute') . '/pembelianbahans'))
@section("sub_section", "Edit")

@section("htmlheader_title", "PembelianBahans Edit : ".$pembelianbahan->$view_col)

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
				{!! Form::model($pembelianbahan, ['route' => [config('laraadmin.adminRoute') . '.pembelianbahans.update', $pembelianbahan->id ], 'method'=>'PUT', 'id' => 'pembelianbahan-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'tanggalbeli')
					@la_input($module, 'kodebahan')
					@la_input($module, 'jumlahpembelianbahan')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/pembelianbahans') }}">Cancel</a></button>
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
	$("#pembelianbahan-edit-form").validate({
		
	});
});
</script>
@endpush
