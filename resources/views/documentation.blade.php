@extends ('layouts.dashboard')

@section ('page_heading','Documentation')

@section('section')

		@section ('dpanel_panel_title', 'Panel')
		@section ('dpanel_panel_body')
			@section ('inside_panel_title', 'Default title')
			@section ('inside_panel_body')
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'inside'))
		@endsection	
		@include ('widgets.panel', array('class'=>'primary', 'header'=>true, 'footer'=>true, 'as'=>'dpanel'))
@stop
