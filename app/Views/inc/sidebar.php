<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li class="active"><a href="<?= base_url('/');?>"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Home</a></li>
				<li><a href="<?= base_url('orders');?>"><svg class="glyph stroked calendar">
				<use xlink:href="#stroked-calendar"></use></svg> Orders</a></li>
			<li><a href="<?= base_url('customers');?>"><svg class="glyph stroked clock">
				<use xlink:href="#stroked-clock"></use></svg> Customers</a></li>
			<li><a href="<?= base_url('products');?>"><svg class="glyph stroked clock">
				<use xlink:href="#stroked-clock"></use></svg> Products</a></li>
			<li class="parent">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down">
						<use xlink:href="#stroked-chevron-down"></use></svg></span> Configuration
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="<?= base_url('categories');?>">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right">
							</use></svg> Categories
						</a>
					</li>
					<li>
						<a class="" href="<?= base_url('profiles');?>">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right">
							</use></svg> User profile
						</a>
					</li>
					<li>
					</li>
				</ul>
			</li>
			<li><a href="<?= base_url('users');?>"><svg class="glyph stroked male-user">
				<use xlink:href="#stroked-male-user"></use></svg> Users</a></li>
			<li><a href="<?= base_url('users/login');?>">
			<svg class="glyph stroked male-user"><use xlink:href="#stroked-cancel"></use></svg> Logout</a>
			</li>
		</ul>

	</div><!--/.sidebar-->
