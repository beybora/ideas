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
                @include('shared.user-card')
            </div>
            <hr>
            @if (count($ideas) > 0)
                @foreach ($ideas as $idea)
                    <div class="mt-3">
                        @include('shared.idea-card')
                    </div>
                @endforeach
            @else
                No ideas shared yet!
            @endif
        </div>
        <div class="col-3">
            @include('shared.search-bar')
            @include('shared.follow-box')
        </div>
    </div>
</div>
