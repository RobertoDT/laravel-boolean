<?php

namespace App\Http\Controllers;

//importiamo i MODEL
use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index(){
      //salvo in variabile tutto ill contenuto della query
      $students = Student::all();

      //adesso faccio il return della vista e dei dati presi dal db e li ignetto nella vista
      return view("students", ["students" => $students]);
    }
}
