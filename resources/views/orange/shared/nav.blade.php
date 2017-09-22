<nav class="navbar">
    <ul class="navbar__list">
        <li class="navbar__item"><i class="material-icons">home</i> Home</li>
        <li class="navbar__item"><i class="material-icons">keyboard_arrow_down</i> Categories
            <ul class="navbar__list navbar__list--sub">
                @each('orange.shared.nav-item', $categories, 'item')
            </ul>
        </li>
        <li class="navbar__item"><i class="material-icons">info</i> About</li>
        <li class="navbar__item"><i class="material-icons">search</i> Search</li>
        <li class="navbar__item"><i class="material-icons">comment</i> Contact</li>
    </ul>
</nav>