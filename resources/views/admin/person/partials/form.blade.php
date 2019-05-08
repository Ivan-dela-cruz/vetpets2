
<div class="form-group">
    {{ Form::label('name', 'Nombres') }}
    {{ Form::text('name_people', null, ['class' => 'form-control', 'id' => 'name_people']) }}
</div>
<div class="form-group">
    {{Form::label('surname','Apellidos')}}
    {{Form::text('surname_people',null,['class'=>'form-control','id'=>'surname_people'])}}
</div>
<div class="form-group">
    {{ Form::label('ci', 'Documento de identidad') }}
    {{ Form::text('ci_people', null, ['class' => 'form-control', 'id' => 'ci_people']) }}
</div>
<div class="form-group">
    {{Form::label('mobile','Número Teléfonico')}}
    {{Form::text('mobile_people',null,['class'=>'form-control','id'=>'mobile_people'])}}
</div>
<div class="form-group">
    {{ Form::label('email', 'Correo electrónico') }}
    {{ Form::text('email_people', null, ['class' => 'form-control', 'id' => 'email_people']) }}
</div>
<div class="form-group">
    {{ Form::label('province', 'Provincia') }}
    {{ Form::text('province_people', null, ['class' => 'form-control', 'id' => 'province_people']) }}
</div>
<div class="form-group">
    {{Form::label('canton','Cantón')}}
    {{Form::text('canton_people',null,['class'=>'form-control','id'=>'canton_people'])}}
</div>
<div class="form-group">
    {{Form::label('address','Dirección')}}
    {{Form::text('address_people',null,['class'=>'form-control','id'=>'address_people'])}}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
