
<div class="form-group">
    {{ Form::label('name', 'Nombre Categoría') }}
    {{ Form::text('name_cat', null, ['class' => 'form-control', 'id' => 'name_cat']) }}
</div>
<div class="form-group">
    {{Form::label('deacription','Describa la categoría')}}
    {{Form::text('description_cat',null,['class'=>'form-control','id'=>'description_cat'])}}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
