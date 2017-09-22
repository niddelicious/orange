<div class="menu__item">
	<div class="menu__item--text">{{ ucfirst($item->title) }}</div>
	@if (count($item->children))
	<div class="menu__item--icon"><i class="material-icons">keyboard_arrow_right</i></div>
</div>
<div class="menu__list menu__list--submenu">
	@foreach($item->children as $item)
		@include('orange.shared.menu-item', $item)
	@endforeach

	@endif
</div>