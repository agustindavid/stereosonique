@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <div class="container mt-5 pt-5">
    <div class="initiative-text mb-5">
      @include('partials.page-header')
    </div>
    @include('partials.content-page')
  </div>
  @endwhile
@endsection
