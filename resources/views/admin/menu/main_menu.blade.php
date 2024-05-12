<!-- start: Main Menu -->
<div id="sidebar-left" class="span2">
	<div class="nav-collapse sidebar-nav">
		<ul class="nav nav-tabs nav-stacked main-menu">
			<li><a href="{{ url('/admin') }}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	

			<li>
				<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Category</span></a>
				<ul>
					<li><a class="submenu" href="{{ url('/categories/create') }}"><i class="icon-edit"></i><span class="hidden-tablet"> Add Category </span></a></li>
					<li><a class="submenu" href="{{ url('/categories') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Category List</span></a></li>
				</ul>	
			</li>

			<li>
				<a class="dropmenu" href="#"><i class="icon-folder-open-alt"></i><span class="hidden-tablet"> Sub Category </span></a>
				<ul>
					<li><a class="submenu" href="{{ url('/sub-categories/create') }}"><i class="icon-edit"></i><span class="hidden-tablet"> Add Sub Category</span></a></li>
					<li><a class="submenu" href="{{ url('/sub-categories') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Category List</span></a></li>
				</ul>	
			</li>

			<li>
				<a class="dropmenu" href="#"><i class="icon-tags"></i><span class="hidden-tablet"> Brand </span></a>
				<ul>
					<li><a class="submenu" href="{{ url('/brands/create') }}"><i class="icon-edit"></i><span class="hidden-tablet"> Add Brand</span></a></li>
					<li><a class="submenu" href="{{ url('/brands') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Brand List</span></a></li>
				</ul>	
			</li>

			<li>
				<a class="dropmenu" href="#"><i class="icon-list"></i><span class="hidden-tablet"> Unit </span></a>
				<ul>
					<li><a class="submenu" href="{{ url('/units/create') }}"><i class="icon-edit"></i><span class="hidden-tablet"> Add Unit</span></a></li>
					<li><a class="submenu" href="{{ url('/units') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Unit List</span></a></li>
				</ul>	
			</li>

			<li>
				<a class="dropmenu" href="#"><i class="icon-resize-full"></i><span class="hidden-tablet"> Size </span></a>
				<ul>
					<li><a class="submenu" href="{{ url('/sizes/create') }}"><i class="icon-edit"></i><span class="hidden-tablet"> Add Size</span></a></li>
					<li><a class="submenu" href="{{ url('/sizes') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Size List</span></a></li>
				</ul>	
			</li>

			<li>
				<a class="dropmenu" href="#"><i class="icon-tint"></i><span class="hidden-tablet"> Color </span></a>
				<ul>
					<li><a class="submenu" href="{{ url('/colors/create') }}"><i class="icon-edit"></i><span class="hidden-tablet"> Add Color</span></a></li>
					<li><a class="submenu" href="{{ url('/colors') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Color List</span></a></li>
				</ul>	
			</li>

			<li>
				<a class="dropmenu" href="#"><i class="icon-briefcase"></i><span class="hidden-tablet"> Product </span></a>
				<ul>
					<li><a class="submenu" href="{{ url('/products/create') }}"><i class="icon-edit"></i><span class="hidden-tablet"> Add Product</span></a></li>
					<li><a class="submenu" href="{{ url('/products') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Product List</span></a></li>
				</ul>	
			</li>

			<li><a href="{{ url('/subscribers') }}"><i class="icon-group"></i><span class="hidden-tablet"> Subscribers</span></a></li>

			<li>
				<a class="dropmenu" href="#"><i class="icon-cog"></i><span class="hidden-tablet"> FAQs </span></a>
				<ul>
					<li><a class="submenu" href="{{ url('/brands/create') }}"><i class="icon-edit"></i><span class="hidden-tablet"> Add FAQ</span></a></li>
					<li><a class="submenu" href="{{ url('/faqs') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> FAQ List</span></a></li>
				</ul>	
			</li>

			<li>
				<a class="dropmenu" href="#"><i class="icon-cog"></i><span class="hidden-tablet"> Application Settings </span></a>
				<ul>
					<li><a class="submenu" href="{{ url('/setting') }}"><i class="icon-edit"></i><span class="hidden-tablet"> General Settings</span></a></li>
					<li><a class="submenu" href="{{ url('/application-cache-clear') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Clear Cache</span></a></li>
				</ul>	
			</li>
			
		</ul>
	</div>
</div>
<!-- end: Main Menu -->