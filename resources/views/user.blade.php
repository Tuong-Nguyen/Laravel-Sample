@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <button type="button" class="btn btn-primary btn-lg pull-right">Add user</button>
                <h2>@lang('user.page_title')</h2>
            </div>

            <div class="panel-body">
                <div class="container-fluid">
                    <table class="table table-bordered" id="users-table">
                        <thead>
                        <tr>
                            <th>@lang('user.id')</th>
                            <th>@lang('user.name')</th>
                            <th>@lang('user.email')</th>
                            <th>@lang('user.created_at')</th>
                            <th>@lang('user.updated_at')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>

                </div>

                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
