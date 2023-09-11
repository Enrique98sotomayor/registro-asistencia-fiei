<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Asistencia;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(('auth'));
    }
    public function index(){
        $asistencia= Asistencia::all();
        if(auth()->user()->role=='decano'){
            return view('dashboard', compact('asistencia'));
        }elseif(auth()->user()->role=='profesor'){
            return view('dashboard2', compact('asistencia'));
        }elseif(auth()->user()->role=='secretaria'){
            return view('dashboard3', compact('asistencia'));
        }
    }
    public function pdf(){
        $asistencia= Asistencia::all();
        $pdf = Pdf::loadView('dashboardpdf', compact('asistencia'));
        return $pdf->stream();
    }
    public function pdf2(){
        $asistencia= Asistencia::all();
        $pdf = Pdf::loadView('dashboardpdf2', compact('asistencia'));
        return $pdf->stream();
    }
    public function pdf3(){
        $asistencia= Asistencia::all();
        $pdf = Pdf::loadView('dashboardpdf3', compact('asistencia'));
        return $pdf->stream();
    }

}
