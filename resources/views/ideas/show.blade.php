@include('layout.nav')
@extends('layout.layout')
<div class="container py-4">
    <div class="row">
        <div class="col-3">
            @include('shared.left-sidebar')
        </div>
        <div class="col-6">
            <hr>
            <div class="mt-3">
                @include('shared.idea-card')
            </div>
        </div>
        <div class="col-3">
            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>
    </div>
</div>
