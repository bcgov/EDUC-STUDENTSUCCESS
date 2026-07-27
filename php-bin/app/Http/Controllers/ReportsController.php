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
      'completion-rates',
      'contextual-information',
      'foundation-skills-assessment',
      'grad-assess',
      'grade-to-grade-transitions',
      'post-secondary-career-prep',
      'prov-exams',
      'student-satisfaction',
      'students-entering-school',
      'transition-to-post-secondary'
    );

  }
  /**
   * Map of report slug → Power BI embed URL.
   * Add new reports here as single-line entries.
   */
  private const EMBED_URLS = [
      'completion-rates'             => '',  // TODO: add embed URL
      'contextual-information'       => '',  // TODO: add embed URL
      'foundation-skills-assessment' => 'https://app.powerbi.com/view?r=eyJrIjoiZTY5YTdlNDEtNThhNy00NjkzLWJhNTUtNzI5YzM3MDJmMjk1IiwidCI6IjZmZGI1MjAwLTNkMGQtNGE4YS1iMDM2LWQzNjg1ZTM1OWFkYyJ9&pageName=bb597b00d8e7047e2da5',
      'grad-assess'                  => '',  // TODO: add embed URL
      'grade-to-grade-transitions'   => '',  // TODO: add embed URL
      'post-secondary-career-prep'   => '',  // TODO: add embed URL
      'prov-exams'                   => '',  // TODO: add embed URL
      'student-satisfaction'         => '',  // TODO: add embed URL
      'students-entering-school'     => '',  // TODO: add embed URL
      'transition-to-post-secondary' => '',  // TODO: add embed URL
  ];

  public function show($slug)
  {
      $reportTitle = str_replace('-', ' ', $slug);
      $embedUrl    = self::EMBED_URLS[$slug] ?? null;

      return view('pages.report-detail', compact('slug', 'reportTitle', 'embedUrl'));
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
