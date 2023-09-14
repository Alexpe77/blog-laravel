<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#editor',
    plugins: 'advlist autolink lists link image searchreplace fullscreen insertdatetime paste help wordcount',
    toolbar: 'undo redo | blocks | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist'
  });
</script>