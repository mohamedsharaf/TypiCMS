@section('head')
	{{ HTML::script(asset('js/list.js')) }}
@stop

@section('h1')
	<span id="nb_elements">{{ count($models) }}</span> @choice('modules.news.news', count($models))
@stop

@section('addButton')
	<a href="{{ route('admin.news.create') }}" class=""><span class="glyphicon glyphicon glyphicon-plus-sign"></span><span class="sr-only">{{ ucfirst(trans('modules.news.New')) }}</span></a>&nbsp;
@stop


@section('main')

	<div class="list-form" lang="{{ Config::get('app.locale') }}">

		@include('admin._buttons-list')

		{{ HTML::adminList($models, array('display' => array('%s — %s', 'date', 'title'))) }}
		
	</div>

@stop