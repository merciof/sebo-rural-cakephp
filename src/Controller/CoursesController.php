<?php

namespace App\Controller;

use Cake\Controller\Controller;

class CoursesController extends Controller {

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }


    public function index () {
        $courses = $this->Courses->find('all');

        $this->set('courses', $courses);
        $this->set('_serialize', 'courses');
    }

    public function view($id)
    {
        $course = $this->Courses->get($id);
        
        $this->set('course', $course);
        $this->set('_serialize', 'course');

    }

}