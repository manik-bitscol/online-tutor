<script src="{{ asset('assets/vendors/tinymce/tinymce.min.js') }}"></script>
<script>
    tinymce.init({
        selector: '{{$id}}',
        plugins: [
            "advlist", "anchor", "autolink", "charmap", "code", "fullscreen",
            "help", "image", "insertdatetime", "link", "lists", "media", "paste",
            "preview", "print", "searchreplace", "table", "visualblocks",
            "bbcode", "fullpage", "imagetools", "legacyoutput", "spellchecker", "toc",
        ],
        toolbar: "undo redo | styleselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"

    });
</script>