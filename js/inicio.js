function inicio(){

//validacion de usuario
    var usuario = "administrador"
    var contra = "saludsena"

    var usuario=document.getElementById('usuario').value;
    var contra=document.getElementById('contrasena').value;

  
   
	
	 if(usuario.length < 1)
	{
	 alert('Ingresar usuario')
      return false
    }
    if (usuario.length < 4)
    {
     alert('El usuario debe ser minimo de 4 caracteres')
     return false
    }
    if(usuario.length > 15)
    {
    	alert('El usuario debe ser minimo de 15 caracteres')
    	return false
    }

    //validacion de contraseña

    

	 if(contra.length < 1)
	{
     alert("Ingresar Contraseña")
	   return false;
	}
	 if (contra.length < 4)
    {
      alert('La contraseña debe ser minimo de 4 caracteres')
      return false
    }
    if (contra.length > 15) 
    {
    	alert('La contraseña debe ser minimo de 15 caracteres')
    	return false
    }
    
    if (usuario == "administrador" && contra == "saludsena")
	{
     return true 
	}
	else 
	{
		alert('usuario o contraseña incorrecta')
		return false
	}

	
	
}
		function inicio(){

//validacion de usuario
    var usuario = "administrador"
    var contra = "saludsena"

    var usuario=document.getElementById('usuario').value;
    var contra=document.getElementById('contrasena').value;

  
   
	
	 if(usuario.length < 1)
	{
	 alert('Ingresar usuario')
      return false
    }
    if (usuario.length < 4)
    {
     alert('El usuario debe ser minimo de 4 caracteres')
     return false
    }
    if(usuario.length > 15)
    {
    	alert('El usuario debe ser minimo de 15 caracteres')
    	return false
    }

    //validacion de contraseña

    

	 if(contra.length < 1)
	{
     alert("Ingresar Contraseña")
	   return false;
	}
	 if (contra.length < 4)
    {
      alert('La contraseña debe ser minimo de 4 caracteres')
      return false
    }
    if (contra.length > 15) 
    {
    	alert('La contraseña debe ser minimo de 15 caracteres')
    	return false
    }
    
    if (usuario == "administrador" && contra == "saludsena")
	{
     return true 
	}
	else 
	{
		alert('usuario o contraseña incorrecta')
		return false
	}

	
	
}
		