@extends('layouts.app')

@section('title', 'Report')
@section('report', 'active')

@section('content')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">My sytes <a href="#" class="pull-right btn btn-success">Create</a></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">#id</th>
                              <th scope="col">domain</th>
                              <th scope="col"></th>
                              <th scope="col"></th>
                            </tr>
                       </thead>
                        <tbody>
                            <tr>
                              <th scope="row">3133</th>
                              <td>mysite.com</td>
                              <td>
                                  <a href="{{ url('report', ['id'=>111]) }}" class="btn btn-sm btn-link">Report</a>
                              </td>
                              <td class="text-right">
                                  <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                  <a href="#" class="btn btn-sm btn-danger">Delete</a>
                              </td>
                            </tr>
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
