\@extends('layout')
@section('content')
  <section id="about">
	    <div>
	          <h1>Hi. I'm Nathan.<h1>
	      <img class="myImage" src="nathanfawcett.jpg" alt="Nathan Fawcett" border="3" style="width:300px;height:300px;"/>
	  </div>
	  <div>
	    <h1>Portfolio</h1>
              @foreach ($portfolios as $portfolioItem)
                  <div>
                     <h2>{{ $portfolioItem->title }}</h2>
                     <p>{{ $portfolioItem->blurb }}</p>
                     <a class="nav-link" href="/project/{{ $portfolioItem->page_id }}">See More</a>
                  </div>
                  </br>
              @endforeach
	  </section>

    </body>
@endsection
