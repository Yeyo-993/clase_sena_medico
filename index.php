<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cita - Médica</title>
    <style>
    body{
    background-color: #1C2833;
    }
    </style>
    </head>
    <body>
        <div class="container py-5">
        <div class="row justify-content-center">
        <div class="col-md-5">
        <div class="card border-primary">
        <div class="card-header bg-primary text-white text-center">
        <h4 class="card-title text-uppercase">FICHA MÉDICA</h4>
        </div>
        <div class="card-body">
        <form action="registrar2.php" method="post" class="needs-validation" novalidate onsubmit="return validarform()">
        <div class="mb-2">
        <script>
        var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
        var f=new Date();
        document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
        </script>
        </div>
        <div class="row">
        <div class="col-sm-6 col-md-12 col-xs-12">
        <div class="form-group mb-2">
        <div class="input-group">
        <span class="input-group-text">Nombre:</span>
        <input type="text" aria-label="First name" id="nombre" name="nombre" class="form-control" required>
        <div class="invalid-feedback">
        Ingresar nombre.
        </div>
        </div>
        <!-- <label for="firstname">Nombre</label>
        <input type="text" id="firstname" placeholder="Nombre" class="form-control" aria-describedby="inputGroupPrepend" required />
        -->
        </div>
        </div>
        <div class="col-sm-6 col-md-12 col-xs-12">
        <div class="form-group mb-2">
        <div class="input-group">
        <span class="input-group-text">Apellido:</span>
        <input type="text" aria-label="First name" id="apellido" name="apellido" class="form-control" required>
        <div class="invalid-feedback">
        Ingresar apellido.
        </div>
        </div>
        <!-- <label for="lastname">Apellido</label>
        <input type="text" id="lastname" placeholder=Apellido" class="form-control" aria-describedby="inputGroupPrepend" required />
        -->
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
        <div class="input-group mb-2">
        <span class="input-group-text" id="basic-addon3">Edad:</span>
        <input type="number" class="form-control" id="edad" name="edad" maxlength="2" aria-describedby="basic-addon3" required>
        <div class="invalid-feedback">
        Ingrese Edad.
        </div>
        </div>
            </div>
</div>
<div class="col-sm-4 col-md-6 col-xs-12">
<div class="form-group">
<div class="input-group mb-2">
<label class="input-group-text" for="inputGroupSelect01">Sexo:</label>
<select class="form-select" id="" name="sexo" required>
<option selected disabled value="">seleccionar</option>
<option value="Hombre">Hombre</option>
<option value="Mujer">Mujer</option>
</select>
<div class="invalid-feedback">
Selecciona el sexo.
</div>
</div>
</div>
</div>
<div class="col-sm-4 col-md-12 col-xs-12">
<div class="form-group">
<div class="input-group mb-2">
<span class="input-group-text" id="basic-addon3">Correo:</span>
<input type="email" class="form-control" id="basic-url" name="correo" aria-describedby="basic-addon3" required>
<div class="invalid-feedback">
Ingrese correo.
</div>
</div>
<!-- <label for="email">Correo</label>
<input type="email" class="form-control" id="email" placeholder="Correo" aria-describedby="inputGroupPrepend" required>
-->
</div>
</div>
            <div class="col-sm-4 col-md-12 col-xs-12">
<div class="form-group">
<div class="input-group mb-3">
<span class="input-group-text" id="basic-addon3">Télefono:</span>
<input type="number" pattern="^\d{9}$" class="form-control" id="basic-url" name="telefono" aria-describedby="basic-addon3" required>
<div class="invalid-feedback">
Ingrese numero telefono.
</div>
</div>
<!-- <label for="phonenumber">Teléfono</label>
<input type="tel" class="form-control" id="phonenumber" placeholder="Número telefono" aria-describedby="inputGroupPrepend" required>
-->
</div>
</div>
</div>
<div class="row mb-3">
<div class="col-sm-12 col-md-12 col-xs-12">

<div class="form-group">
<label>Sistema de Salud:</label>
</div>
<div class="border border-dark p-2">
<div class="form-check-inline">
<div class="custom-control custom-radio custom-control-inline">
<input type="radio" class="custom-control-input form-check-input" id="" aria-describedby="inputGroupPrepend" name="ssalud" value="Isapre" required>
<label class="custom-control-label form-check-label" for="html">Isapre</label>

</div>
 </div>
</div>
<div class="form-check-inline">
<div class="custom-control custom-radio ">
<input type="checkbox" class="form-check-input" id="" aria-describedby="inputGroupPrepend" name="alergico" value="Pastillas" >
<label class="form-check-label" for="csharp">Pastillas</label>

</div>
</div>
<div class="form-check-inline">
<div class="custom-control custom-radio">
<input type="checkbox" class="form-check-input" id="" aria-describedby="inputGroupPrepend" name="alergico" value="Otros" >
<label class="form-check-label" for="aspdotnet">Otros</label>

</div>
</div>
</div>
</div>
</div><div class="row mb-2">
<div class="col-sm-12 col-md-12 col-xs-12">
<div class="form-group">
<label>Grupo Sanguineo:</label>
</div>
<div class="border border-dark p-2">
<!-- Material inline 1 -->
<div class="form-check form-check-inline">
<input type="radio" class="form-check-input" id="materialInline1" name="gruposan" value="A+" required>
<label class="form-check-label" for="materialInline1">A+</label>
</div>
<!-- Material inline 2 -->
<div class="form-check form-check-inline">
<input type="radio" class="form-check-input" id="materialInline2" name="gruposan" value="A-" required>
<label class="form-check-label" for="materialInline2">A-</label>
</div>

<!-- Material inline 3 -->
<div class="form-check form-check-inline">
<input type="radio" class="form-check-input" id="materialInline3" name="gruposan" value="B+" required>
<label class="form-check-label" for="materialInline3">B+</label>
</div>
<!-- Material inline 1 -->
<div class="form-check form-check-inline">
<input type="radio" class="form-check-input" id="materialInline1" name="gruposan" value="B-" required>
<label class="form-check-label" for="materialInline1">B-</label>
</div>

<!-- Material inline 2 -->
<div class="form-check form-check-inline">
<input type="radio" class="form-check-input" id="materialInline2" name="gruposan" value="AB+" required>
<label class="form-check-label" for="materialInline2">AB+</label>
</div>

<!-- Material inline 3 -->
<div class="form-check form-check-inline">
<input type="radio" class="form-check-input" id="materialInline3" name="gruposan" value="AB-" required>
<label class="form-check-label" for="materialInline3">AB-</label>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12 col-md-12 col-xs-12">
<div class="form-group">
<label for="address">Observaciones:</label>
<textarea class="form-control" rows="3" id="address" name="campotexto" placeholder="Escribir texto..." aria-describedby="inputGroupPrepend" required></textarea>
<div class="invalid-feedback">Escriba en Observaciones</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12 col-md-12 col-xs-12">
<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
<label class="form-check-label" for="invalidCheck">
Aceptar los términos y condiciones.
</label>
</div>
</div>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-12 col-md-12 col-xs-12 text-center">
<div class="float-right">
<button class="btn btn-danger rounded-0" type="reset">Limpiar</button>
<button class="btn btn-primary rounded-0" type="submit">Registrar</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>



<script src="javascript/scriptb.js"></script>
<script src="javascript/validate.js"></script>
</body>
</html>
