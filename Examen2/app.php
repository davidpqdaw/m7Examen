<?php

    use App\Employe;
    use App\Notifier;

    require __DIR__.'/vendor/autoload.php';
    //var_dump($_POST);
    $emp1=new Employe;
    $emp1->name = $_POST['emp1_name'];
    $emp2=new Employe;
    $emp2->name = "David";
    //var_dump($emp1);
    $notifier= new Notifier;

    $emp1->attach($notifier);
    $emp1->attach($notifier);
    $emp1->modifySalary(50000);
    //var_dump($emp1);

?>