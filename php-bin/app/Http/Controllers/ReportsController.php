<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReportsController extends Controller {

  public function getSchoolReportSlugs() {

    return array(

      'contextual-information', 
      'fsa',
      'grade-to-grade-transitions',
      'student-satisfaction',
      'post-secondary-career-prep',
      'prov-exams',
	    'grad-assess',		
      'transition-to-post-secondary'

    );

  }

  public function getSdReportSlugs() {

    return array(

      'contextual-information', 
      'students-entering-school',
      'completion-rates',
      'fsa',
      'grade-to-grade-transitions',
      'student-satisfaction',
      'post-secondary-career-prep',
      'prov-exams',
      'grad-assess',
      'transition-to-post-secondary'

    );

  }
  public function show($slug)
  {
      // 1. You would typically fetch the report metadata from the DB using the $slug
      // $report = Report::where('slug', $slug)->firstOrFail();
      
      // Mock data for demonstration
      $reportTitle = str_replace('-', ' ', $slug);

      // 2. Return the detail view
      return view('pages.report-detail', compact('slug', 'reportTitle'));
  }
    
  public function getSchoolDbFlagNames() {

    return array(
    
      // Contextual Information
      'w_enrol1',
      'w_enrol2',

      // Foundation Skills Assessment
      'w_fsa1',
      'w_fsa2',

      // Grade-to-Grade Transitions
      'w_g2g',

      // Student Satisfaction
      'w_sat1',

      // Post-Secondary and Career Preparation
      'w_sat2',

      // Provincial Examinations
      'w_exam',

      // Transition to BC Post-Secondary Education
      'w_psi'

    );

  }

}
