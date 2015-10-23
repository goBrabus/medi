@extends('layout.admin')
@section('content')
@foreach($diagnostico as $diagnostico)
<div class="jumbotron">
<h6>NOTA: Estos son los datos del paciente, lee y evalua a tu criterio y el posible diagnostico del paciente</h6>
  <p>Nombre del paciente : {{$diagnostico->nombre}}</p>
  <p>Apellidos del paciente : {{$diagnostico->apellido}}</p>
  <p>Edad : {{$diagnostico->edad}}</p>
  <p>Peso (lbs) : {{$diagnostico->peso}}</p>
  <p>Tipo de Sangre : {{$diagnostico->sangre_tipo}}</p>
  <p>Alergias Patologicos : {{$diagnostico->alergias}}</p>
  <p>Expedientes : {{$diagnostico->expediente}}</p>
  <p>Antecedentes o Historial medico : {{$diagnostico->antecedentes}}</p>
  <p>Resultado Examenes de orina : {{$diagnostico->examen_orina}}</p>
  <p>Resultado Examenes de heces  : {{$diagnostico->examen_heces}}</p>
  <p>Observaciones  : {{$diagnostico->observaciones}}</p>
  <h5>A continuacion , estan los posibles diagnosticos, pulsa en el boton que consideras que es el diagnostico correcto!!!</h5>

  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Insuciencia Renal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Insuciencia Renal</h4>
      </div>
      <div class="modal-body">
        Una vez que se encuentra la causa, el objetivo del tratamiento es restaurar el funcionamiento de los riñones y evitar que el líquido y los residuos se acumulen en el cuerpo, mientras estos órganos sanan. Generalmente es necesario permanecer una noche en el hospital para el tratamiento.

La cantidad de líquido que usted beba se limitará a la cantidad de orina que pueda producir. Le dirán lo que puede o no comer con el fin de reducir la acumulación de toxinas que los riñones normalmente eliminarían. Es posible que necesite consumir una dieta rica en carbohidratos y baja en proteínas, sal y potasio.

Se pueden necesitar antibióticos para tratar o prevenir la infección. Se pueden emplear diuréticos para ayudar a eliminar el líquido del cuerpo.


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      
      </div>
    </div>
  </div>
</div>
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Insuciencia Renal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> Infeccion Orinaria</h4>
      </div>
      <div class="modal-body">
        Una vez que se encuentra la causa, el objetivo del tratamiento es restaurar el funcionamiento de los riñones y evitar que el líquido y los residuos se acumulen en el cuerpo, mientras estos órganos sanan. Generalmente es necesario permanecer una noche en el hospital para el tratamiento.

La cantidad de líquido que usted beba se limitará a la cantidad de orina que pueda producir. Le dirán lo que puede o no comer con el fin de reducir la acumulación de toxinas que los riñones normalmente eliminarían. Es posible que necesite consumir una dieta rica en carbohidratos y baja en proteínas, sal y potasio.

Se pueden necesitar antibióticos para tratar o prevenir la infección. Se pueden emplear diuréticos para ayudar a eliminar el líquido del cuerpo.


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      
      </div>
    </div>
  </div>
</div>
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Insuciencia Renal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Mal de orin</h4>
      </div>
      <div class="modal-body">
        Una vez que se encuentra la causa, el objetivo del tratamiento es restaurar el funcionamiento de los riñones y evitar que el líquido y los residuos se acumulen en el cuerpo, mientras estos órganos sanan. Generalmente es necesario permanecer una noche en el hospital para el tratamiento.

La cantidad de líquido que usted beba se limitará a la cantidad de orina que pueda producir. Le dirán lo que puede o no comer con el fin de reducir la acumulación de toxinas que los riñones normalmente eliminarían. Es posible que necesite consumir una dieta rica en carbohidratos y baja en proteínas, sal y potasio.

Se pueden necesitar antibióticos para tratar o prevenir la infección. Se pueden emplear diuréticos para ayudar a eliminar el líquido del cuerpo.


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      
      </div>
    </div>
  </div>
</div>
</div>
@endforeach

@stop