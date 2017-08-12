<li class="navbar__item navbar__item--sub">
  <span>{{ ucfirst($item->title) }}</span>
@if (count($item->children))
  <i class="material-icons">keyboard_arrow_right</i>
  <ul class="navbar__list navbar__list--sub">
    @foreach($item->children as $item)
      @include('orange.shared.nav-item', $item)
    @endforeach
  </ul>
@endif
</li>