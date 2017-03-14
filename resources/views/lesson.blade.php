@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Lessons</h2>
            </div>

            <div class="panel-body">
                <div class="container-fluid">
                    <table class="table table-bordered" id="users-table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Length</th>
                            <th>Difficulty</th>
                            <th>Views</th>
                            <th>@lang('user.created_at')</th>
                            <th>@lang('user.updated_at')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($lessons as $lesson)
                            <tr>
                                <td>{{ $lesson->id }}</td>
                                <td>{{ $lesson->title }}</td>
                                <td>{{ $lesson->length }}</td>
                                <td>{{ $lesson->difficulty }}</td>
                                <td>{{ $lesson->views }}</td>
                                <td>{{ $lesson->created_at }}</td>
                                <td>{{ $lesson->updated_at }}</td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>

                </div>

                {{ $lessons->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
