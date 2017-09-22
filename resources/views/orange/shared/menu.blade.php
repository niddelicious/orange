<nav class="menu">
    <div class="menu__item">
        <div class="menu__item--text">Menu</div>
        <div class="menu__item--icon"><i class="material-icons">menu</i></div>
    </div>
    <div class="menu__list">
        <div class="menu__item">
            <div class="menu__item--text">Home</div>
            <div class="menu__item--icon"><i class="material-icons">home</i></div>
        </div>
        <div class="menu__item">
            <div class="menu__item--text">Categories</div>
            <div class="menu__item--icon"><i class="material-icons">keyboard_arrow_right</i></div>
        </div>
        <div class="menu__list menu__list--submenu">
            @each('orange.shared.menu-item', $categories, 'item')
        </div>
        <div class="menu__item">
            <div class="menu__item--text">About</div>
            <div class="menu__item--icon"><i class="material-icons">info</i></div>
        </div>
        <div class="menu__item">
            <div class="menu__item--text">Search</div>
            <div class="menu__item--icon"><i class="material-icons">search</i></div>
        </div>
        <div class="menu__item">
            <div class="menu__item--text">Contact</div>
            <div class="menu__item--icon"><i class="material-icons">comment</i></div>
        </div>
    </div>
</nav>

@section ('scripts')
@parent
<script>
    $('.menu__item').on('click', function(){
        console.log('clicked');
        $(this).next('.menu__list').toggleClass('menu__list--open');
        if (
            $(this).find('.material-icons').first().text() == "keyboard_arrow_right" ||
            $(this).find('.material-icons').first().text() == "keyboard_arrow_down"
            ) {
            if ($(this).find('.material-icons').first().text() == "keyboard_arrow_right") {
                $(this).find('.material-icons').first().text("keyboard_arrow_down");
            } else {
                $(this).find('.material-icons').first().text("keyboard_arrow_right");
            }
        }
    });
</script>
@endsection