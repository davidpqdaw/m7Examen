<?php

    namespace App;

    use App\Observable;

    class Employe implements Observable{
        public $name;
        public $email;
        public $salary;

        public $observers=[];

        public function __get($key){
            return $this->$key;
        }

        public function __set($key, $value){
            $this->key = $value;
        }
        
        function attach($observer){
            $this->observers[] = $observer;
            return $this;
        }

        function detach($observer){
            if($i=array_search($observer,$this->observers)){
                unset($this->observers[$i]);
            }
            return $this;
        }

        public function notify(){
            foreach($this->observers as $observer){
                $observer->update($this);
            }
        }

        public function modifySalary($newSalary){
            $this->salary = $newSalary;
            $this->notify();
        }
    }