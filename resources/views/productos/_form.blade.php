@csrf
<div class="form-group">
  <label for="nombre">Producto</label>
<input class="form-control" type="text" name="nombre" id="nombre" value="{{old('nombre',$producto->nombre)}}">
</div>

<div class="form-group">
  <label for="precio">Precio</label>
<input class="form-control" type="text" name="precio" id="precio" value="{{old('nombre',$producto->precio)}}">
</div>


<div class="form-group">
  <label for="cantidad">Cantidad</label>
<input class="form-control" type="text" name="cantidad" id="cantidad" value="{{old('nombre',$producto->cantidad)}}">
</div>

<div class="form-group">
  <label for="departamento">Departamento</label>
<input class="form-control" type="text" name="departamento" id="departamento" value="{{old('nombre',$producto->departamento)}}"> 
</div>


<div class="form-group">
  <label for="descripcion">Descripción</label>
<input class="form-control" type="text" name="descripcion" id="descripcion" value="{{old('nombre',$producto->descripcion)}}">
</div>


<input  type="submit" value="Enviar" class="btn btn-outline-primary btn-lg">
  