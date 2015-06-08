var managerScreen = managerScreen || {};
managerScreen = {
    
    
    alertify: function(){
        //alertify .alert("Message");
        alertify.log("Falta ingresar Usuario o Contraseña", "Error", 10000);
        //alertify.log("Notification", "Success", 10000);
    },
    
    alertify_error: function(){
        alertify.log("Faltan datos", "Error", 10000);
    },
    
    alertify_proponer_idea: function(){
        alertify.log("Idea propuesta correctamente", "Success", 10000);      
    },
    
    alertify_nombre_usado: function(){
        alertify.log("Nombre ya usado, pruebe con otro", "Error", 10000);      
    },
    
    alertify_error_calificacion: function(){
        alertify.log("Usted propuso esta idea, por lo tanto no debería calificarla", "Error", 10000);      
    },
    
    alertify_calificacion: function(){
        alertify.log("Idea calificada correctamente", "Error", 10000);      
    },
    
    alertify_reunion_calificacion: function(){
        alertify.log("No existen reuniones para hoy", "Error", 10000);      
    },
    
    alertify_programar_reunion: function(){
        alertify.log("Programación de la reunion con éxito", "Success", 10000);      
    },
    
    alertify_definir_dispositivo: function(){
        alertify.log("Dispositivo definido correctamente", "Success", 10000);      
    },
    
    alertify_definir_software: function(){
        alertify.log("Software definido correctamente", "Success", 10000);      
    }
    
       
   
};


var ms = managerScreen;