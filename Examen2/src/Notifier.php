<?php

    namespace App;

    use App\Observer;

    class Notifier implements Observer{
        function update(Employe $employe){
            $mensaje="Querido empleado {$employe->name} su sueldo a sido actualizado";
            $subject="Modificacion de salario";
            echo $mensaje;
            // mail($employe->getEmail(),$subject,$mensaje);
            
        }
    }