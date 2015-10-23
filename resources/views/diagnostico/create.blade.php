@extends('layout.admin')
@section('content')
	<div class="container">
	{!! Form::open(['route'=>'diagnostico.store','method'=>'post','files'=>true])!!}
	<legend><h2>Registro Nuevos Diagnosticos</h2></legend>
	<div class="form-group">
		{!!Form::label('Nombre')!!}
		{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del paciente'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Apellido')!!}
		{!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingresa el Apellido del paciente'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Edad')!!}
		{!!Form::text('edad',null,['class'=>'form-control','placeholder'=>'Ingresa la edad'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Peso (lbs)')!!}
		{!!Form::text('peso',null,['class'=>'form-control','placeholder'=>'Ingresa el peso del paciente'])!!}
	</div>
		<div class="form-group">
		{!!Form::label('Tipo Sangre')!!}
		{!!Form::text('sangre_tipo',null,['class'=>'form-control','placeholder'=>'Tipo de Sangre'])!!}
	</div>
		<div class="form-group">
		{!!Form::label('Alergias')!!}
		{!!Form::text('alergias',null,['class'=>'form-control','placeholder'=>'Ingresa las alergias del paciente'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Expediente')!!}
		{!!Form::text('expediente',null,['class'=>'form-control','placeholder'=>'Ingresa el expediente  o Historial Medico del paciente'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Antecendentes')!!}
		{!!Form::text('antecedentes',null,['class'=>'form-control','placeholder'=>'Ingresa el expediente  o Historial Medico del paciente'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Examenes de orina')!!}
		{!!Form::text('examen_orina',null,['class'=>'form-control','placeholder'=>'Resultados de examenes de orina'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Examanes de heces')!!}
		{!!Form::text('examen_heces',null,['class'=>'form-control','placeholder'=>'Resultados de examenes de heces'])!!}
	</div>
		<div class="form-group">
		{!!Form::label('Observaciones')!!}
		{!!Form::text('observaciones',null,['class'=>'form-control','placeholder'=>'Observaciones Registradas'])!!}
	</div>
		<div class="form-group">
		{!!Form::label('Fotografia')!!}
		{!!Form::file('path')!!}
	</div>
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!! Form::close()!!}
		
	</div>
@stop