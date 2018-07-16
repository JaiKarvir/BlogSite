     <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
      <div class="sidebar-module sidebar-module-inset">
        <div class="sidebar-module">
          <h4>Archives</h4>
          <ol class="list-unstyled">
            @foreach($archives as $archive)
            <li><a href="/?month={{ $archive['month'] }}&year={{ $archive['year'] }}">
              {{$archive['month'].' '.$archive['year']}}
            </a>
          </li>
          @endforeach
        </ol>
      </div>
</div>
<div class="sidebar-module sidebar-module-inset">
 <div class="sidebar-module">
        <h4>Tags</h4>
        <ol class="list-unstyled">
          @foreach($tags as $tag)
          <li><a href="/posts/tags/{{ $tag }}">
            {{ $tag }}
          </a>
        </li>
        @endforeach
      </ol>
    </div>
  </div>
<div class="sidebar-module sidebar-module-inset">
      <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="#">GitHub</a></li>
          <li><a href="#">LinkedIn</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
    </div>