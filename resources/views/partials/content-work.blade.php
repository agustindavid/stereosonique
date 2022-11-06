<div class="col-md-6 work-item-wrap">
  <article @php post_class() @endphp>
    <div>
      <header class="position-relative">
        <img src="{{ get_the_post_thumbnail_url() }}" class="img-fluid" alt="">
        <div class="position-absolute d-flex w-100 h-100 justify-content-center align-items-center overlay-square">
          <h2><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
        </div>
      </header>
    </div>
  </article>
</div>
