@csrf
<div class="form-group">
    <label for="nombre">Nombre</label>
  <input class="form-control" type="text" name="nombre" id="nombre" value="{{old('nombre',$proveedor->nombre)}}">
  </div>

  <div class="form-group">
    <label for="correo">Correo</label>
  <input class="form-control" type="text" name="correo" id="correo" value="{{old('correo',$proveedor->correo)}}">
  </div>

  <div class="form-group">
    <label for="telefono">Telefono</label>
  <input class="form-control" type="text" name="telefono" id="telefono" value="{{old('telefono',$proveedor->telefono)}}">
  </div>

  <div class="form-group">
    <label for="direccion">Direccion</label>
  <input class="form-control" type="text" name="direccion" id="direccion" value="{{old('direccion',$proveedor->direccion)}}">
  </div>



  <input  type="submit" value="Enviar" class="btn btn-outline-primary btn-lg">