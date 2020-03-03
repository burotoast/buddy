@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  poep
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
