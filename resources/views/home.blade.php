@extends('layouts.app')

@section('title', 'Home')

@section('main')
    <div class="container py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <div class="d-inline-flex gap-2 align-items-center">
                        <i class="fa fa-sm fa-home"></i>
                        <span>Home</span>
                    </div>
                </li>
            </ol>
        </nav>

        <figure>
            <blockquote class="blockquote">
              <p class="lead">No man is your enemy, no man is your friend, every man is your teacher</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                Florence Scovel Shinn in <cite title="Source Title">The Game of Life and How to Play It</cite>
            </figcaption>
        </figure>
    </div>
@endsection