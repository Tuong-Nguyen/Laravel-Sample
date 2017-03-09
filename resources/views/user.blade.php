@extends('layouts.app')

@section('content')
    <div class="container" ng-controller="userController">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
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
                                <th>
                                    <button id="btn-add" class="btn btn-primary btn-xs" ng-click="toggle('add', 0)">
                                        @lang('user.add')
                                    </button>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="user in users">
                                <td><% user.id %></td>
                                <td><% user.name %></td>
                                <td><% user.email %></td>
                                <td><% user.created_at %></td>
                                <td><% user.updated_at %></td>
                                <td>
                                    <button class="btn btn-default btn-xs btn-detail" ng-click="toggle('edit', user.id)">Edit</button>
                                    <button class="btn btn-danger btn-xs btn-delete" ng-click="confirmDelete(user.id)">Delete</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <!-- End of Table-to-load-the-data Part -->
                        <!-- Modal (Pop up when detail button clicked) -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">×</span></button>
                                        <h4 class="modal-title" id="myModalLabel"><%form_title%></h4>
                                    </div>
                                    <div class="modal-body">
                                        <form name="frmUser" class="form-horizontal" novalidate="">

                                            <div class="form-group error">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control has-error" id="name" name="name"
                                                           placeholder="@lang('user.name_holder')" value="<%name%>"
                                                           ng-model="user.name" ng-required="true">
                                                    <span class="help-block"
                                                          ng-show="frmUser.name.$invalid && frmUser.name.$touched">Name field is required</span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" id="email" name="email"
                                                           placeholder="@lang('user.email_holder')" value="<%email%>"
                                                           ng-model="user.email" ng-required="true">
                                                    <span class="help-block"
                                                          ng-show="frmUser.email.$invalid && frmUser.email.$touched">Valid Email field is required</span>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modalstate, id)"
                                                ng-disabled="frmUser.$invalid">Save changes
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
