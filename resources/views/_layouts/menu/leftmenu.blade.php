<ul class="cl-vnavigation">          
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
		</ul>
	</li>
</ul>