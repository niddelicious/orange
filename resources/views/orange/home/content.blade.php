@extends ('orange.layout')

@section ('content')
    <div class="container">
        @include ('orange.home.header')

        @include ('orange.shared.nav')
        
        <div class="content">


            <div class="trio">
                @foreach ( $trio as $post )

                    @include('orange.home.partials.triobox')

                @endforeach
            </div>
        </div>
        @include ('orange.shared.footer')
    </div>
@endsection