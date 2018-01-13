<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 * Student object with first, last name, email, and grade
 * @author Ching
 */
class Student {
    /**
     * Constructor of student class
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Add an email to student object
     * @param type $which input student
     * @param type $address input address
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    /**
     * Add a grade to student object
     * @param type $grade input grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
     * Returns the average grade of the student
     * @return type average grade of the student's grade
     */
    function average() {
        $total = 0;
        foreach($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    /**
     * Print out students information
     * @return type
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
