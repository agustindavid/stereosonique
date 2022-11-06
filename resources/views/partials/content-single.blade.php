<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-md-9">
      <article @php post_class() @endphp>
        <header>
          <div class="intro-single">
            <h1 class="entry-title">{!! get_the_title() !!}</h1>
            {{ the_post_thumbnail('full', array('class'=>'img-fluid')) }}
          </div>
        </header>
        <div class="entry-content">
          @php the_content() @endphp
        </div>
      </article>
    </div>
  </div>
</div>
