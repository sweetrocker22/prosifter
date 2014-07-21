@extends('layouts.adminMaster')

@section('content')

        <div class="span9">
		  <div class="row-fluid">
			<div class="page-header">
				<h1>Users <small>All users</small></h1>
			</div>
			<table class="table table-striped table-bordered table-condensed">
				<thead>
					<tr>
						<th>ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>E-mail</th>
						<th>Role</th>
						<th>Status</th>
						<th></th>
					</tr>
				</thead>

				@foreach ($users as $user)
					{{-- expr --}}

				<tbody>
				<tr class="list-users">
					<td>{{ $user->id }}</td>
					<td>{{ $user->first_name }}</td>
					<td>{{ $user->last_name }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->role }}</td>
					<td><span class="label label-success">Active</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
								<li><a href="#"><i class="icon-user"></i> Details</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Moderator</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr>

				@endforeach
				<!-- <tr class="list-users">
					<td>2</td>
					<td>Jose E. Jones</td>
					<td>joseejones@provider.com</td>
					<td>801-xxx-xxxx</td>
					<td>Morgan, UT</td>
					<td>Moderator</td>
					<td><span class="label label-success">Active</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
								<li><a href="#"><i class="icon-user"></i> Details</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Moderator</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr class="list-users">
					<td>3</td>
					<td>George F. Green</td>
					<td>georgefgreen@provider.com</td>
					<td>443-xxx-xxxx</td>
					<td>Baltimore, MD</td>
					<td>User</td>
					<td><span class="label label-important">Inactive</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
								<li><a href="#"><i class="icon-user"></i> Details</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Moderator</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr class="list-users">
					<td>4</td>
					<td>Leticia E. Bonk</td>
					<td>leticiaebonk@provider.com</td>
					<td>615-xxx-xxxx</td>
					<td>Lafayette, TN</td>
					<td>User</td>
					<td><span class="label label-important">Inactive</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
								<li><a href="#"><i class="icon-user"></i> Details</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Moderator</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr class="list-users">
					<td>5</td>
					<td>Darrell J. Ezzell</td>
					<td>darrelljezzell@provider.com</td>
					<td>937-xxx-xxxx</td>
					<td>Yellow Springs, OH</td>
					<td>User</td>
					<td><span class="label label-important">Inactive</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
								<li><a href="#"><i class="icon-user"></i> Details</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Moderator</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr class="list-users">
					<td>6</td>
					<td>Gene A. Lawhorn</td>
					<td>genealawhorn@provider.com</td>
					<td>901-xxx-xxxx</td>
					<td>Memphis, TN</td>
					<td>User</td>
					<td><span class="label label-important">Inactive</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
								<li><a href="#"><i class="icon-user"></i> Details</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Moderator</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr class="list-users">
					<td>7</td>
					<td>Timothy R. Nichols</td>
					<td>timothyrnichols@provider.com</td>
					<td>212-xxx-xxxx</td>
					<td>New York, NY</td>
					<td>User</td>
					<td><span class="label label-important">Inactive</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
								<li><a href="#"><i class="icon-user"></i> Details</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Moderator</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr class="list-users">
					<td>8</td>
					<td>Samuel I. Heim</td>
					<td>samueliheim@provider.com</td>
					<td>508-xxx-xxxx</td>
					<td>Marlboro, MA</td>
					<td>User</td>
					<td><span class="label label-important">Inactive</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
								<li><a href="#"><i class="icon-user"></i> Details</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Moderator</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr class="list-users">
					<td>9</td>
					<td>Dennis B. Kim</td>
					<td>dennisbkim@provider.com</td>
					<td>407-xxx-xxxx</td>
					<td>Orlando, FL</td>
					<td>User</td>
					<td><span class="label label-important">Inactive</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
								<li><a href="#"><i class="icon-user"></i> Details</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Moderator</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr>
				<tr class="list-users">
					<td>10</td>
					<td>Joni D. Soto</td>
					<td>jonidsoto@provider.com</td>
					<td>215-xxx-xxxx</td>
					<td>Philadelphia, PA</td>
					<td>User</td>
					<td><span class="label label-important">Inactive</span></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">Actions <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
								<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
								<li><a href="#"><i class="icon-user"></i> Details</a></li>
								<li class="nav-header">Permissions</li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Admin</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>Moderator</strong></a></li>
								<li><a href="#"><i class="icon-lock"></i> Make <strong>User</strong></a></li>
							</ul>
						</div>
					</td>
				</tr> -->
				</tbody>
			</table>
			<div class="pagination">
				<ul>
					<li><a href="#">Prev</a></li>
					<li class="active">
						<a href="#">1</a>
					</li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">Next</a></li>
				</ul>
			</div>
			<a href="{{ action('AdminController@getNewUser') }}" class="btn btn-success">New User</a>
		  </div>
        </div>
      </div>

      <hr>

      <footer class="well">
        &copy; Strass
      </footer>

    </div>

@stop
