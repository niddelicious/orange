<script src='https://cloud.tinymce.com/stable/tinymce.min.js?apiKey={{ env('TINYMCE_API_KEY') }}'></script>
<script>
    tinymce.init({
        selector: '#{{ $wysiwyg }}',
        toolbar: "image",
        plugins: "image imagetools"
    });
</script>