<ul class="cl-vnavigation">
	@role('super')
	<li class="{{ Ekko::isActiveURL('/admin/iviews') }}"><a href="{{URL('/admin/iviews')}}"><i class="fa fa-play-circle-o"></i><span>iViews</span></a>
		<ul class="sub-menu">
			<li class="{{ Ekko::isActiveURL('/admin/iviews') }}"><a href="{{URL('/admin/iviews')}}">All</a></li>
			<li class="{{ Ekko::isActiveURL('/admin/iviews/create') }}"><a href="{{URL('/admin/iviews/create')}}">New iView</a></li>
		</ul>
	</li>
	<li class="{{ Ekko::isActiveURL('/admin/tools') }}"><a href="{{URL('/admin/tools')}}"><i class="fa fa-play-circle-o"></i><span>Tools</span></a>
		<ul class="sub-menu">
			<li class="{{ Ekko::isActiveURL('/admin/tools') }}"><a href="{{URL('/admin/tools')}}">All</a></li>
			<li class="{{ Ekko::isActiveURL('/admin/tools/create') }}"><a href="{{URL('/admin/tools/create')}}">New Tool</a></li>
			@if(isset($tools))
				@foreach($tools as $tool)
					<li class="{{ Ekko::isActiveURL('/admin/tools/'.$tool->id) }}"><a href="{{URL('/admin/tools/'.$tool->id)}}">{{str_limit($tool->company->name.': '.$tool->title, 28)}}</a></li>
				@endforeach
			@endif
		</ul>
	</li>
	@endrole
	<!-- Product Specific Menu -->
	@if(isset($tool))
	<li><a href="#"><i class="fa fa-home"></i><span>{{$tool->company->name}}</span></a>
		<ul class="sub-menu">
			<li class="{{ Ekko::isActiveURL('/admin') }}">
				<a href="{{URL('/admin')}}">Dashboard</a>
			</li>
			<li class="{{ Ekko::isActiveURL('/admin/assessments') }}">
				<a href="{{URL('/admin/assessments')}}">Assessments</a>
			</li>
			@hasanyrole(['super','admin','client'])
			<li class="{{ Ekko::isActiveURL('/admin/tracking') }} {{ Ekko::isActiveURL('/admin/tracking/new') }}">
				<a href="{{URL('/admin/tracking')}}">Tracking</a>
			</li>
			<li class="{{ Ekko::isActiveURL('/admin/users') }} {{ Ekko::isActiveURL('/admin/users/new') }}">
				<a href="{{URL('/admin/users')}}">Users</a>
			</li>
			@endhasanyrole
		</ul>
	</li>
	@endif()
</ul>