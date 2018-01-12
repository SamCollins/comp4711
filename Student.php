<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 * Lab 1
 * @author Sam Collins
 */
class Student {
    
    //Creates a new Student object
    function __construct() {
        $this->surname = '';
        $this->first_name = '';    
        $this->emails = array();    
        $this->grades = array();    

    }
    
    //Adds an email to a student
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    //Adds a grade to a student
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    //Calculates the students average based on their grades
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }
    
    //Displays all the info about a student as a string
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what) {
            $result .= $which . ': '. $what. "\n";
        }
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
