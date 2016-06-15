@extends('home)


@section('content')

<h4>Develop</h4>
            <div class="code-animation" data-3dAnimate="[5,2]">
              <img src="{{ asset('img/code-area.svg') }}" alt="web page">
              <div class="transformed-element1"></div>
              <div class="transformed-element">
<pre>
$(<span class="codeOrange">'.fade-animation'</span>)<span class="codePurple">.each</span>(
 <span class="codeBlue">function</span> (<span class="codePurple">i</span>, <span class="codePurple">element</span>) {
  <span class="codeBlue">var</span> <span class="codePurple">a</span> = {
     <span class="codePurple">element</span>: element,
     <span class="codePurple">pxFromTop</span>: $(element).<span class="codePurple">parent</span>(<span class="codeOrange">'div'</span>)
     .<span class="codePurple">offset</span>().<span class="codePurple">top</span>,
  }
 moveElements.<span class="codePurple">push</span>(a);
});
</pre>  
              </div>   
            </div>
            <p>Goals Achieved!</p>
            <p>All is for naught if the website is not robust, reliable, and quick. Accessing from a desktop wired in with a quick internet connection or loading on an old iphone with 3G, your website will deliver.</p>

@endsection