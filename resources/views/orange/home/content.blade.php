@extends ('orange.layout')

@section ('content')

    <div class="container">
        <section class="layout__header">
            @include ('orange.shared.menu')
            @include ('orange.home.header')
            @include ('orange.shared.nav')
        </section>
        <section class="layout_content">
            <div class="content">

                <div class="trio">
                    @foreach ( $trio as $post )

                        @include('orange.home.partials.triobox')

                    @endforeach
                </div>

                <section class="frontpage">
                    <section class="frontpage__list">

                        <div class="frontpage__list--header">Articles</div>
                        <div class="frontpage__list--list">
                            @include('orange.home.partials.article')
                            @include('orange.home.partials.article')
                            @include('orange.home.partials.article')
                            @include('orange.home.partials.article')
                            @include('orange.home.partials.article')
                            @include('orange.home.partials.article')
                        </div>

                    </section>
                    <aside class="frontpage__aside">
                        <ul>
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                            <li>Item 4</li>
                            <li>Item 5</li>
                            <li>Item 6</li>
                            <li>Item 7</li>
                            <li>Item 8</li>
                            <li>Item 9</li>
                            <li>Item 10</li>
                            <li>Item 11</li>
                            <li>Item 12</li>
                            <li>Item 13</li>
                            <li>Item 14</li>
                        </ul>
                    </aside>
                </section>
            </div>
        </section>
        <section class="footer">
            @include ('orange.shared.footer')
        </section>
    </div>
@endsection