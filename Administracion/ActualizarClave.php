<?php
   include '../constantes.php';
   include '../librerias.php';
?>
<?php
        $rut=$_POST['rut'];
        $passAntigua = $_POST['passAntigua'];
        $passNueva = $_POST['passNueva'];
        $passConfirma = $_POST['passConfirma'];
        
        if ($passNueva!=$passConfirma){
            echo "Las claves no son iguales";
            return; 
        }
        $oUsr=new Usuario();
        $oUsr->rut=$rut;
        $oUsr->clave=$passAntigua;
                
        if(!$oUsr->VerificaUsuarioClave()){
           echo "El usuario o clave antigua no corresponde";
           return; 
        }
        
        echo "Estamos listos para el cambio";
       
       /*
Metodo actualizar clave
        *         */
        /*
Llamada a la clase LogTransacciones para registrar la actualización
         * 
         *          */
        
        $oTransac=new LogTransaccion();
        $oTransac->accion='U';
        $oTransac->descripcion='USU:$rut Cambio desde pagina: Actualizaclave.php';
        $oTransac->nomtabla='Usuario';
        $oTransac->Agregar();
        
?>