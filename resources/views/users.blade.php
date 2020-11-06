@extends('layouts.app')

@section('title', 'Users')
@section('users', 'active')

@section('content')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Users</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">#id</th>
                              <th scope="col">Bio</th>
                              <th scope="col">Access</th>
                              <th scope="col"></th>
                            </tr>
                       </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                  <th scope="row">{{ $user->id }}</th>
                                  <td>{{ $user->name }}</td>
                                  <td><span class="access-info">{{ $user->getRoleName() }}</span></td>
                                  <td class="text-right">
                                      <a href="#" class="btn btn-sm btn-warning">Ban</a>
                                  </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="card-body">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
@endsection
