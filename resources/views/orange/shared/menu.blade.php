<nav class="menu">
    <div class="menu__item">
        <div class="menu__item--text">Menu</div>
        <div class="menu__item--icon"><i class="material-icons">menu</i></div>
    </div>

    <ul class="menu__list">
        <li class="menu__item">
            <div class="menu__item--text">Home</div>
            <div class="menu__item--icon"><i class="material-icons">home</i></div>
        </li>
        <li class="menu__item">
            <div class="menu__item--text">Categories</div>
            <div class="menu__item--icon"><i class="material-icons">keyboard_arrow_down</i></div>
            <ul class="menu__list menu__list--submenu">
                @each('orange.shared.menu-item', $categories, 'item')
            </ul>
        </li>
        <li class="menu__item">
            <div class="menu__item--text">About</div>
            <div class="menu__item--icon"><i class="material-icons">info</i></div>
        </li>
        <li class="menu__item">
            <div class="menu__item--text">Search</div>
            <div class="menu__item--icon"><i class="material-icons">search</i></div>
        </li>
        <li class="menu__item">
            <div class="menu__item--text">Contact</div>
            <div class="menu__item--icon"><i class="material-icons">comment</i></div>
        </li>
    </ul>
</nav>