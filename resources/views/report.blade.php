@extends('layouts.app')

@section('title', 'Report')
@section('adverts', 'active')

@section('content')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">My sytes / mysite.com / report </div>
                <div class="card-body">
                    <p>Advertiser: <span class="left-side-nav">Ann D.</span><span class="left-side-nav">ID: 322.</span></p>
                    <p>Place: <span class="left-side-nav">example.com</span></p>

                    <ul class="list-inline">
                        <li class="list-inline-item">Visited: <span class="mark-primary">232</span> </li>
                        <li class="list-inline-item">Views: <span class="mark-primary">88</span></li>
                    </ul>
                </div>

                <div class="card-body">
                    <h5>Referrers</h5>
                    <table class="table">
                        <tbody>
                            <tr>
                              <td>http://someurl.ru</td>
                              <td>{{ Auth()->user()->created_at}}</td>
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
