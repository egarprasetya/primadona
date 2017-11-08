@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/bahans') }}">Bahan</a> :
@endsection
@section("contentheader_description", $bahan->$view_col)
@section("section", "Bahans")
@section("section_url", url(config('laraadmin.adminRoute') . '/bahans'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Bahans Edit : ".$bahan->$view_col)

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
				{!! Form::model($bahan, ['route' => [config('laraadmin.adminRoute') . '.bahans.update', $bahan->id ], 'method'=>'PUT', 'id' => 'bahan-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'NamaBahanBaku')
					@la_input($module, 'HargaBahanBaku')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/bahans') }}">Cancel</a></button>
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
	$("#bahan-edit-form").validate({
		
	});
});
</script>
@endpush
