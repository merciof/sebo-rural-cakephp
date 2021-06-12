<?php

namespace App\Controller;

use Cake\Controller\Controller;

class CoursesController extends Controller {

    public function index () {
        $courses = $this->Courses->find('all')->toArray();

        $this->set('courses', $courses);
    }

}