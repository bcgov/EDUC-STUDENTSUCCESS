<?php

namespace App\Http\Controllers;

use App\FSASchoolOrDistrictIDAGG;
use DB;

class FsaController extends Controller
{
	// A_SELECTED_RESPONSE stores gender as Man/Boy and Woman/Girl
	private static $selectedResponseGenders = [
		'Male'   => 'Man/Boy',
		'Female' => 'Woman/Girl',
	];

	public function getSchoolDistricts()
	{
		return response()->json(DB::table('EDW_RESEARCH.FSA_ILR_SCHOOL_OR_DISTRICT_ID')->get(), 200);
	}

	public function getSchoolYears()
	{
		return response()->json(DB::table('EDW_RESEARCH.fsa_ilr_school_year')->get(), 200);
	}

	public function getSelectedResponse($district, $year, $grade, $subject, $exam_language, $gender, $francophone, $french_immersion, $ell, $indigenous)
	{
		if (isset(self::$selectedResponseGenders[$gender])) {
			$gender = self::$selectedResponseGenders[$gender];
		}

		return $this->fsaResults('EDW_RESEARCH.A_SELECTED_RESPONSE', $district, $year, $grade, $subject, $exam_language, $gender, $francophone, $french_immersion, $ell, $indigenous);
	}

	public function getConstructedResponse($district, $year, $grade, $subject, $exam_language, $gender, $francophone, $french_immersion, $ell, $indigenous)
	{
		return $this->fsaResults('EDW_RESEARCH.B_CONSTRUCTED_RESPONSE', $district, $year, $grade, $subject, $exam_language, $gender, $francophone, $french_immersion, $ell, $indigenous);
	}

	public function getCognitiveLevels($district, $year, $grade, $subject, $exam_language, $gender, $francophone, $french_immersion, $ell, $indigenous)
	{
		return $this->fsaResults('EDW_RESEARCH.C_COGNITIVE_LEVELS', $district, $year, $grade, $subject, $exam_language, $gender, $francophone, $french_immersion, $ell, $indigenous);
	}

	public function getSchoolDistrictsAgg()
	{
		$schoolDistrictsAgg = FSASchoolOrDistrictIDAGG::select('school_or_district_id', 'school_or_district_name', 'district')
			->orderBy('school_or_district_id', 'asc')
			->remember(30) // Cache the result as we are on production server.
			->get()
			->sortBy('school_or_district_id', SORT_NATURAL | SORT_FLAG_CASE);

		return response()->json($schoolDistrictsAgg, 200);
	}

	public function getAllSchoolDistrictsAgg()
	{
		$allSchoolDistrictsAgg = FSASchoolOrDistrictIDAGG::select('school_or_district_id', 'school_or_district_name', 'district')
			->whereNull('district')
			->orderBy('school_or_district_id', 'desc')
			->remember(30) // Cache the result as we are on production server.
			->get()
			->sortBy('school_or_district_id', SORT_NATURAL | SORT_FLAG_CASE);

		return response()->json($allSchoolDistrictsAgg, 200);
	}

	public function getSchoolDistrictsID($district)
	{
		// e.g. "010Public%20Schools" -> "010 Public Schools"
		$formattedDistrict = preg_replace(
			['/^(\d+)\s*/', '/\s+/'],
			['$1 ', ' '],
			trim(urldecode($district))
		);

		$schoolDistrictsID = DB::table('EDW_RESEARCH.FSA_ILR_SCHOOL_OR_DISTRICT_ID')
			->where('district', '=', $formattedDistrict)
			->orderBy('school_or_district_name', 'asc')
			->get();

		return response()->json($schoolDistrictsID, 200);
	}

	/**
	 * Run a filtered query against one of the FSA results tables.
	 * 'all' on a demographic filter matches rows where that column IS NULL.
	 */
	private function fsaResults($table, $district, $year, $grade, $subject, $exam_language, $gender, $francophone, $french_immersion, $ell, $indigenous)
	{
		$filters = [
			'SCHOOL_OR_DISTRICT_ID' => $district,
			'YEAR'                  => str_replace('-', '/', $year),
			'GRADE'                 => $grade,
			'SUBJECT'               => $subject,
			'EXAM_LANGUAGE'         => $exam_language,
			'GENDER'                => $gender,
			'FRANCOPHONE'           => $francophone,
			'FRENCH_IMMERSION'      => $french_immersion,
			'ELL'                   => $ell,
			'INDIGENOUS'            => $indigenous,
		];

		$query = DB::table($table);
		foreach ($filters as $column => $value) {
			$query->where($column, '=', $value === 'all' ? null : $value);
		}

		return response()->json($query->get(), 200);
	}
}
