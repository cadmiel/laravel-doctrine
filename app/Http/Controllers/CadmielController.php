<?php

namespace App\Http\Controllers;

use App\Domain\Teacher\TeacherRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

class CadmielController extends Controller
{
    public function index(TeacherRepository $repository){
        $this->repository = $repository;
        return view('welcome');
    }
}
