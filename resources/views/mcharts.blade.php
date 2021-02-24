@extends ('layouts.dashboard')
@section('page_heading','Charts')
@section('section')
<div class="col-sm-12">	
	<div class="row">
		<div class="col-sm-12">
			@section ('cchart1_panel_title','Line Chart')
			@section ('cchart1_panel_body')
			@include('widgets.charts.clinechart')
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart1'))
		</div>
	</div>
</div>
@stop
