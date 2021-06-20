



 @csrf
    
 <div class="form-group">
   <label for="nombre">Producto</label>
 <input class="form-control" type="text" name="nombre" id="nombre" value="{{old('nombre',$venta->nombre)}}">
 </div>

 <div class="form-group">
   <label for="cantidad">Cantidad</label>
 <input class="form-control" type="text" name="cantidad" id="cantidad" value="{{old('nombre',$venta->cantidad)}}">
 </div>

 <div class="form-group">
   <label for="precio">Precio</label>
 <input class="form-control" type="text" name="precio" id="precio" value="{{old('nombre',$venta->precio)}}">
 </div>


 <input  type="submit" value="Enviar" class="btn btn-outline-primary btn-lg">





