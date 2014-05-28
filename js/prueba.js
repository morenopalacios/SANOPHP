function inicio(){

//validacion de usuario
    var usuario="administrador"
    var contra="saludsena"

    var usuario=document.getElementById('usuario').value;

    if (usuario=="")
    {

     alert('Ingrese usuario')
     return false
     }
     
    if  (usuario.length > 15 && contra.length < 4)
	{
	 alert("debes escribir usuario y contraseña")
		return false
	}
	
	 if(usuario.length<4)
	{
	 alert('el usuario debe ser mayor a 4')
      return false
    }
	 if(contra.length>15)
	{
     alert("la contraseña debe ser menor a 15")
	   return false;
	}

	if (usuario.length=="administrador" && contra.length=="saludsena")
	{
     return true 
	}
}
		