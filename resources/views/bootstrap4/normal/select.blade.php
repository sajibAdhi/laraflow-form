<div class="form-group">
    {!! \Form::label($name, $label, $required) !!}

    @php
        $options = ['class' => 'form-control custom-select' . ($errors->has($name) ? ' is-invalid' : NULL )];



        if(isset($required) && $required == true)
        $options['required'] = 'required'
    @endphp

    {!! \Form::select($name, $data, $selected, array_merge($options, $attributes)) !!}

    {!! \Form::error($name) !!}
</div>
