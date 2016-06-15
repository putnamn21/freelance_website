@extends('master')



@section('content')
    
   
   <!-- Page content -->  

   <div class="banner-section window-height">
      <div class="fade-animation window-height">
        <img src="{{asset('img/Logo-finished.svg')}}" alt="">
         <div class="row">
            <h1 class="text-center"><small>The Web to power your</small> <br/>
               <span data-text='["eCommerce Website", "Photography Business", "Promotional efforts", "Business"]'></span> 
            </h1>
            <div class="large-6 medium-8 small-10 small-centered text-center">
               <p class="lead">The web is the most powerful tool your business has to leverage its product or service to a broader audience.</p>
               <hr>
               <a class="button" href='#contact'>Contact Now</a>
            </div> 
         </div>
      </div>
   </div>

   <div class="design-section window-height">
     <div class="fade-animation window-height">
      <div class="row text-center">
         <h2>Website Design</h2>
         <div class="medium-4 columns">
            <h4>Discover</h4>
            <div class="animate3d">
              <div class="layer">
              </div>
            	<img src="{{ asset('img/question-page/question-page-1.svg') }}" alt="web page">
            	<img src="{{ asset('img/question-page/question-page-2.svg') }}" alt="web page">
            	<img src="{{ asset('img/question-page/question-page-3.svg') }}" alt="web page">
            </div>
            <p>What Goals do we have?</p>
            <p>Together we will discover the ideal aspects that are needed for a website to drive the results your business seeks.</p>
         </div>
         <div class="medium-4 columns">
            <h4>Design</h4>
            <div class="animate3d">
            	<img src="{{ asset('img/web-page/web-page-1.svg') }}" alt="web page">
            	<img src="{{ asset('img/web-page/web-page-2.svg') }}" alt="web page">
            	<img src="{{ asset('img/web-page/web-page-3.svg') }}" alt="web page">
            </div>
            <p>How do we achieve our goals?</p>
            <p>The effectiveness of a website is dependant on the ability to communicate your goals through a beautifully designed website that functions intuitively on all platforms.</p>
            <br>
         </div>
         <div class="medium-4 columns">
            <h4>Develop</h4>
            <div class="animate3d">
              <div class="layer-1"></div>
              <div class="layer-2">
<pre>
$(<span class="codeOrange">'.fade-animation'</span>)<span class="codePurple">.each</span>(
 <span class="codeBlue">function</span> (<span class="codePurple">i</span>, <span class="codePurple">element</span>) {
  <span class="codeBlue">var</span> <span class="codePurple">a</span> = {
     <span class="codePurple">element</span>: element,
     <span class="codePurple">pxFromTop</span>: $(element).<span class="codePurple">parent</span>
     .(<span class="codeOrange">'div'</span>).<span class="codePurple">offset</span>().<span class="codePurple">top</span>,
  }
 moveElements.<span class="codePurple">push</span>(a);
});
</pre>  
              </div>   
            </div>
            <p>Goals Achieved!</p>
            <p>All is for naught if the website is not robust, reliable, and quick. Accessing from a desktop wired in with a quick internet connection or loading on an old iphone with 3G, your website will deliver.</p>
            <br>
         </div>
      </div>
    </div>
   </div>

   <div class="services-section window-height">
     <div class="fade-animation window-height">
      <div class="row">
         <h2 class="text-center">Services</h2>
         <div class="medium-6 large-4 large-offset-1 columns">
            <div class="text-center">
               <h4>Wordpress</h4>
               <img class="serviceImage" src="{{ asset('img/Wordpress.svg') }}" alt="graphic">
            </div>
            <p>Wordpress is the leading Content Management Platform (CMS) on the web powering 75 million websites! </p><p> What is a CMS? Simply put, it allows those without technical knowledge to edit the content on your webpage!</p>
         </div>
         <div class="medium-6 large-4 large-offset-1 columns">
            <div class="text-center">
              <h4 class="text-center">PHP & Node.js Applications</h4>
              <img src="{{ asset('img/Node-php-graphic.svg') }}" alt="graphic"> 
            </div>
            <p>PHP and Node.js are technologies used on some of the largest web platforms (facebook, Yahoo, Wikipedia, Ebay).</p><p>These technologies can be used to build custom web solutions. Think of it and it can be a reality.</p>
            <br>
         </div>
         <div class="column"></div>
      </div>
    </div>
   </div>

   <div class="contact-section window-height">
     <div class="window-height">
         <h2 class="text-center">Lets Talk</h4>
         <div class="row">
           <form id="contact" class="small-10 medium-6 large-5 columns small-centered">
               <div class="row">
                  <div class="medium-4 columns">
                     <label>Name
                        <input type="text">
                     </label>
                  </div>
                  <div class="medium-4 columns">
                     <label>Email
                        <input type="email">
                     </label>
                  </div>
                  <div class="medium-4 columns">
                     <label>Subject
                        <input type="text">
                     </label>
                  </div>
              </div>
               <div class="row">
                  <label>Message
                     <textarea cols="30" rows="5"></textarea>
                  </label>
               </div>
               <div class="submit">
                  <button>Send</button>  
               </div>            
            </form>   
         </div> 
     </div>
   </div>
          
          
@endsection