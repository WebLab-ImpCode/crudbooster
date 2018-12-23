@push('bottom')
    <script>
        $(document).ready(function () {
            var editor = ace.edit('ace_textarea_{{$name}}');
            editor.setTheme('ace/theme/monokai');
            editor.session.setUseWorker(false);
            editor.session.setMode('ace/mode/html');
            editor.setOption('enableEmmet', true);

            var textarea = $('textarea[name="{{$name}}"]').hide();

            editor.getSession().setValue(textarea.val());
            editor.getSession().on('change', function(){
                textarea.val(editor.getSession().getValue());
            });
        })
    </script>
@endpush
<div class='form-group' id='form-group-{{$name}}' style="{{@$form['style']}}">
    <label class='control-label col-sm-2'>{{$form['label']}}</label>

    <div class="{{$col_width?:'col-sm-10'}}">
        <textarea id='textarea_{{$name}}' id="{{$name}}" {{$required}} {{$readonly}} {{$disabled}}
            name="{{$form['name']}}"
            class='form-control'
            rows='5'>{{ $value }}</textarea>
        <div id="ace_textarea_{{ $name }}"></div>
        <div class="text-danger">{{ $errors->first($name) }}</div>
        <p class='help-block'>{{ @$form['help'] }}</p>
    </div>
</div>
