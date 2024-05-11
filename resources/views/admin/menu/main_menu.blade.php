<!-- start: Main Menu -->
<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="{{ url('/dashboard') }}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<!-- <li><a href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
						<li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>
						<li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
						<li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li> -->

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Category</span></a>
							<ul>
								<li><a class="submenu" href="{{ url('/categories/create') }}"><i class="icon-edit"></i><span class="hidden-tablet"> Add Category </span></a></li>
								<li><a class="submenu" href="{{ url('/categories') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Category List</span></a></li>
							</ul>	
						</li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Sub Category </span></a>
							<ul>
								<li><a class="submenu" href="{{ url('/sub-categories/create') }}"><i class="icon-edit"></i><span class="hidden-tablet"> Add Sub Category</span></a></li>
								<li><a class="submenu" href="{{ url('/sub-categories') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Category List</span></a></li>
							</ul>	
						</li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Brand </span></a>
							<ul>
								<li><a class="submenu" href="{{ url('/brands/create') }}"><i class="icon-edit"></i><span class="hidden-tablet"> Add Brand</span></a></li>
								<li><a class="submenu" href="{{ url('/brands') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Brand List</span></a></li>
							</ul>	
						</li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Unit </span></a>
							<ul>
								<li><a class="submenu" href="{{ url('/units/create') }}"><i class="icon-edit"></i><span class="hidden-tablet"> Add Unit</span></a></li>
								<li><a class="submenu" href="{{ url('/units') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Unit List</span></a></li>
							</ul>	
						</li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Size </span></a>
							<ul>
								<li><a class="submenu" href="{{ url('/sizes/create') }}"><i class="icon-edit"></i><span class="hidden-tablet"> Add Size</span></a></li>
								<li><a class="submenu" href="{{ url('/sizes') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Size List</span></a></li>
							</ul>	
						</li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Color </span></a>
							<ul>
								<li><a class="submenu" href="{{ url('/colors/create') }}"><i class="icon-edit"></i><span class="hidden-tablet"> Add Color</span></a></li>
								<li><a class="submenu" href="{{ url('/colors') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Color List</span></a></li>
							</ul>	
						</li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Product </span></a>
							<ul>
								<li><a class="submenu" href="{{ url('/products/create') }}"><i class="icon-edit"></i><span class="hidden-tablet"> Add Product</span></a></li>
								<li><a class="submenu" href="{{ url('/products') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Product List</span></a></li>
							</ul>	
						</li>

						<li><a href="{{ url('/subscribers') }}"><i class="icon-edit"></i><span class="hidden-tablet"> Subscribers</span></a></li>

						<li><a href="{{ url('/setting') }}"><i class="icon-edit"></i><span class="hidden-tablet"> General Settings</span></a></li>
						
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->