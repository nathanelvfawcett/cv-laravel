@extends('layout')
@section('content')
  <section id="project">
              @forelse ($portfolios as $portfolioItem)
                  <div>
                     <h1>{{ $portfolioItem->title }}</h1>
                @if (!is_null($portfolioItem->embed_video_url))
                     <p>{{ $portfolioItem->embed_video_url }}</p>
                     <br>
                @elseif (!is_null($portfolioItem->image_path))
                     <p><img src="{{ asset($portfolioItem->image_path) }}"></p>
                     <br>
                @endif

		@if (!is_null($portfolioItem->description))
                     <p>{{ $portfolioItem->description }}</p>
		@elseif (!is_null($portfolioItem->blurb))
                     <p>{{ $portfolioItem->blurb }}</p>
                @endif
                     <br>

                @if (!is_null($portfolioItem->link_name))
                     <p><a href="{{ $portfolioItem->link }}">{{ $portfolioItem->link_name }}</p>
                @elseif (!is_null($portfolioItem->link))
                     <p><a href="{{ $portfolioItem->link }}">{{ $portfolioItem->link }}</p>
                @elseif (is_null($portfolioItem->link))
                     <p>Contact me to see more.</p>
                @endif

                  </div>
                  </br>
              @empty
                <h1>No Project found.<h1>
                <p>Looks like you somehow got off track.
                Please use the links provided.
                If you got here while using the links, please contact me.</p>
	      @endforelse

@endsection
