<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\booking;
use App\Models\UserBooking;
use Illuminate\Support\Facades\Auth;

class ReserveClass extends Component
{

    public $classes = [];
    public $classesFull = [];
    public $date;
    public $numClassReserved;
    public $idClass;
    public $numAlumClass = [];
    public $alumInClass = [];
    public $isFull = [];
    public $alum = [];
    public $classUser = [];
    public $validUserClass = false;



    //Crea una reserva de clase

    public function reserve($idClass){


        UserBooking::create([
            'class' => $idClass,
            'user' => Auth::user()->id,
        ]);

            return redirect()->route('reserve');
    }

    //Borra una reserva de clase

    public function delete($idClass){


        UserBooking::where([
            'class' => $idClass,
            'user' => Auth::user()->id,
        ])->delete();

        return redirect()->route('reserve');
    }


    //Muestra las clases dadas de alta y su disponibilidad

    public function showClass(){


        $this->classes = [];
        $this->classesFull = [];
        $this->date;
        $this->numClassReserved;
        $this->idClass;
        $this->numAlumClass = [];
        $this->alumInClass = [];
        $this->isFull = [];
        $this->alum = [];
        $this->classUser = [];
        $this->validUserClass = false;


        $this->classes = booking::where('date',$this->date)->get();
    
        foreach ($this->classes as $class) {
            $this->validUserClass = false;
            $classReserved = UserBooking::where('class',$class->id)->get();
            $this->numClassReserved = $classReserved->count();
            
            array_push($this->alum,Auth::user()->id);
            array_push($this->classUser,$class->user);

            for($i = 0; $i < count($classReserved); $i++){

                if($classReserved[$i]->user == Auth::user()->id)
                    $this->validUserClass = true;
            }

            if($this->validUserClass == true)
                array_push($this->alumInClass,true);
            else
                array_push($this->alumInClass,false);
            
               
            

            array_push($this->numAlumClass,$this->numClassReserved);
            if($this->numClassReserved == $class->alumn){
                array_push($this->isFull,true);
                
            }
            else{
                array_push($this->isFull,false);
            }
        }
        
        return view('livewire.reserve-class')
            ->with('classes',$this->classes)
            ->with('numClassReserved',$this->numClassReserved)
            ->with('isFull',$this->isFull)
            ->with('numAlumClass',$this->numAlumClass)
            ->with('alumInClass',$this->alumInClass)
            ->with('alum',$this->alum)
            ->with('classUser',$this->classUser);

    }




























    /*public function showClass(){

        $this->classes = booking::where('date',$this->date)->get();
    
        foreach ($this->classes as $class) {
            $classReserved = UserBooking::where('class',$class->id)->get();
            $this->numClassReserved = $classReserved->count();
            
            array_push($this->numAlumClass,$this->numClassReserved);
            if($this->numClassReserved == $class->alumn){
                array_push($this->isFull,true);
                
            }
            else{
                array_push($this->isFull,false);
            }
        }
       

       
        

        return view('livewire.reserve-class')
            ->with('classes',$this->classes)
            ->with('numClassReserved',$this->numClassReserved)
            ->with('isFull',$this->isFull)
            ->with('numAlumClass',$this->numAlumClass);

    }

    public function reserve($idClass){


        UserBooking::create([
            'class' => $idClass,
            'user' => Auth::user()->id,
        ]);

        //Numero de alumnos de una clase
        $alumnClass = booking::select('alumn')->where('id',$idClass)->get();

        //dd($alumnClass[0]->alumn);

        $this->idClass = $idClass;

        $classReserved = UserBooking::where('class',$idClass)->get();

        $this->numClassReserved = $classReserved->count();

        if($alumnClass[0]->alumn <= $this->numClassReserved){
            //dd($this->isFull);
            $this->isFull[$idClass] = true;
        }

        //return redirect()->route('reserve')->with('message','Clase reservada')->with('date',$this->date)->with('numClass',$this->numClassReserved);
        /*return view('livewire.reserve-class')
            ->with('date',$this->date)
            ->with('numClassReserved',$this->numClassReserved)
            ->with('idClass',$this->idClass)
            ->with('isFull',$this->isFull);
            */
            //return view('livewire.reserve-class');
    }

    

   /* public function render()
    {
        
        return view('livewire.reserve-class');
    }*/
//}
