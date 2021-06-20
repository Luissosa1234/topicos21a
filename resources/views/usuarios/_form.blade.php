

    @csrf
    
        <div class="form-group">
            <label for="name">Nombre</label>
            <input class="form-control" type="text" name="name" id="name"   value="{{old('nombre',$user->name)}}">
    
    
        </div>
        <div class="form-group">
            <label for="email">Correo</label>
            <input class="form-control" type="text" name="email" id="email" value="{{old('nombre',$user->email)}}">
        </div>
        
        <div class="form-group">
            <label for="content" class="form-label">Password</label>
                <input id="password" type="password" class="form-control" name="password" autocomplete="new-password" value="{{old('nombre',$user->password)}}">
        </div>
    

        <input  type="submit" value="Enviar" class="btn btn-outline-primary btn-lg">


