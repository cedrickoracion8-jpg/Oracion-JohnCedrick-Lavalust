<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $this->call->view('student_home');
    }

    public function profile()
    {
        $this->call->helper('url');
        $student = [
            'student_id' => 'MCC2024-00106',
            'name' => 'JohnCedrick M.Oracion',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => 'F3',
            'email' => 'john.cedrick.oracion@minsu.edu.ph',
        ];

        $this->call->view('student_profile', $student);
    }
}
