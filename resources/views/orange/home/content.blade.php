@extends ('orange.layout')

@section ('content')
    <div class="container">
        @include ('orange.home.header')
        <div class="content">


            <div class="trio">
                <div class="trio-box">
                    <div class="trio-image">
                        <img
                            src="https://livedemo00.template-help.com/wordpress_48834/wp-content/uploads/2014/03/img-14-370x235.jpg">
                    </div>
                    <div class="trio-text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta eos id iste
                            laudantium nostrum quae quaerat reiciendis sequi tempora tempore! Asperiores assumenda illum
                            minima
                            obcaecati praesentium quasi quo recusandae rerum.
                        </p>
                    </div>
                </div>
                @include('orange.home.partials.triobox')
                <div class="trio-box">
                    <div class="trio-image">
                        <img
                            src="https://livedemo00.template-help.com/wordpress_48834/wp-content/uploads/2014/03/img-3-370x235.jpg">
                    </div>
                    <div class="trio-text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta eos id iste
                            laudantium nostrum quae quaerat reiciendis sequi tempora tempore! Asperiores assumenda illum
                            minima
                            obcaecati praesentium quasi quo recusandae rerum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @include ('orange.shared.footer')
    </div>
@endsection