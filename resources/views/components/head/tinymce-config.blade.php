<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#editor',
    width: 600,
    height: 500,
    plugins: 'file edit searchreplace fullscreen insertdatetime paste help wordcount',
    toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist'
  });
</script>