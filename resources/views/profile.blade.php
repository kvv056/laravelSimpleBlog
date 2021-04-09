@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
					<table class="table">

						<tbody>
							<tr>
								<th scope="row">id</th>
								<td>{{$user->id}}</td>
							</tr>
							<tr>
								<th scope="row">nickname</th>
								<td>{{$user->nickname}}</td>
							</tr>
							<tr>
								<th scope="row">name</th>
								<td>{{$user->name}}</td>
							</tr>
							<tr>
								<th scope="row">surname</th>
								<td>{{$user->surname}}</td>
							</tr>
							<tr>
								<th scope="row">avatar</th>
								<td>
									<img src="{{$avatar}}" width="200px"  alt="avatar"></a>
									
								</td>
							</tr>
							<tr>
								<th scope="row">phone</th>
								<td>{{$user->phone}}</td>
							</tr>
							<tr>
								<th scope="row">sex</th>
								<td>{{$user->sex}}</td>
							</tr>
							<tr>
								<th scope="row">email</th>
								<td>{{$user->email}}</td>
							</tr>
							<tr>
								<th scope="row">expirience</th>
								<td>{{$user->experience}}</td>
							</tr>
						</tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
