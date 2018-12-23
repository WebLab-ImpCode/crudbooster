@push('head')
    <link href="{{ asset('vendor/crudbooster/assets/ace-editor/ace.css') }}" rel="stylesheet">
@endpush
@push('bottom')
    <script src="{{ asset('vendor/crudbooster/assets/ace-editor/ace.min.js') }}"></script>
    <script src="{{ asset('vendor/crudbooster/assets/ace-editor/ext-emmet.min.js') }}"></script>
    <script src="{{ asset('vendor/crudbooster/assets/ace-editor/theme-monokai.min.js') }}"></script>
    <script src="{{ asset('vendor/crudbooster/assets/ace-editor/mode-html.min.js') }}"></script>
@endpush
