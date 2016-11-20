@extends('layouts.app')

@section('content')
    <div class="container" ng-controller="HomePageController" ng-init="init()">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body" ng-show="!contentLoaded">
                        <h1 class="text-center"><i class="fa fa-spinner fa-spin"></i></h1>
                    </div>
                    <div class="panel-body" ng-show="contentLoaded">
                        You are logged in, @{{ userInformation.username }}!<br>
                        You registered about @{{ userInformation.time_registered }} with the email
                        <strong>@{{ userInformation.email }}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="/app/controllers/HomePageController.js"></script>
@endsection