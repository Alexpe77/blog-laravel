<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#editor',
    maxwidth: 700,
    plugins: 'autoresize file edit searchreplace fullscreen insertdatetime paste help wordcount',
    toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist'
  });
</script>