var managerScreen = managerScreen || {};
managerScreen = {
    
    
    alertify: function(){
        //alertify .alert("Message");
        alertify.log("Falta ingresar Usuario o Contraseña", "Error", 10000);
        //alertify.log("Notification", "Success", 10000);
    },
    
    alertify_error: function(){
        //alertify .alert("Message");
        alertify.log("Faltan datos", "Error", 10000);
        //alertify.log("Notification", "Success", 10000);
    },
    
    alertify_proponer_idea: function(){
        //alertify .alert("Message");
        alertify.log("Idea propuesta correctamente", "Success", 10000);
        //alertify.log("Notification", "Success", 10000);
    }
       
   
};


var ms = managerScreen;