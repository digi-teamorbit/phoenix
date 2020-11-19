<div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('package_name') ? 'has-error' : ''}}">
    {!! Form::label('package_name', 'Package Name', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('package_name', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('package_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Title', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('title', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('price') ? 'has-error' : ''}}">
    {!! Form::label('price', 'Price', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('price', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('time_period') ? 'has-error' : ''}}">
    {!! Form::label('time_period', 'Time Period', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::text('time_period', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('time_period', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center left_css col-md-12 {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Description', ['class' => 'col-md-12 control-label']) !!}
    <div class="col-md-12">
        {!! Form::textarea('description', null, ('required' == 'required') ? ['class' => 'form-control', 'id' => 'summary-ckeditor', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row justify-content-center">
    <div class="col-lg-4 col-12 align-content-center">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
