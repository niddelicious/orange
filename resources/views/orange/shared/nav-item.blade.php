<li class="navbar__item navbar__item--sub">{{ $item->id }} {{ $item->title }}</li>
@if (count($item->children))
  <ul class="navbar__list navbar__list--sub">
    @foreach($item->children as $item)
      @include('orange.shared.nav-item', $item)
    @endforeach
  </ul>
@endif