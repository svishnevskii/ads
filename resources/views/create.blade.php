@extends('layouts.app')

@section('title', 'Report')
@section('adverts', 'active')

@section('content')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    {{ $title }}
                </div>
                <div class="card-body">
                    @include('components.form.' . Auth()->user()->getRoleName() . '_create')
                </div>
            </div>
        </div>
@endsection
