<?php
	define('PREPEND_PATH', '');
	include_once(__DIR__ . '/lib.php');

	// accept a record as an assoc array, return transformed row ready to insert to table
	$transformFunctions = [
		'users' => function($data, $options = []) {
			if(isset($data['date_joined'])) $data['date_joined'] = guessMySQLDateTime($data['date_joined']);

			return $data;
		},
		'deposits' => function($data, $options = []) {
			if(isset($data['user_id'])) $data['user_id'] = pkGivenLookupText($data['user_id'], 'deposits', 'user_id');
			if(isset($data['date'])) $data['date'] = guessMySQLDateTime($data['date']);

			return $data;
		},
		'withdrawals' => function($data, $options = []) {
			if(isset($data['user_id'])) $data['user_id'] = pkGivenLookupText($data['user_id'], 'withdrawals', 'user_id');
			if(isset($data['date'])) $data['date'] = guessMySQLDateTime($data['date']);

			return $data;
		},
		'wallets' => function($data, $options = []) {
			if(isset($data['user_id'])) $data['user_id'] = pkGivenLookupText($data['user_id'], 'wallets', 'user_id');

			return $data;
		},
		'companies' => function($data, $options = []) {

			return $data;
		},
		'investments' => function($data, $options = []) {
			if(isset($data['user_id'])) $data['user_id'] = pkGivenLookupText($data['user_id'], 'investments', 'user_id');
			if(isset($data['company'])) $data['company'] = pkGivenLookupText($data['company'], 'investments', 'company');
			if(isset($data['date_invested'])) $data['date_invested'] = guessMySQLDateTime($data['date_invested']);

			return $data;
		},
		'affiliates' => function($data, $options = []) {

			return $data;
		},
	];

	// accept a record as an assoc array, return a boolean indicating whether to import or skip record
	$filterFunctions = [
		'users' => function($data, $options = []) { return true; },
		'deposits' => function($data, $options = []) { return true; },
		'withdrawals' => function($data, $options = []) { return true; },
		'wallets' => function($data, $options = []) { return true; },
		'companies' => function($data, $options = []) { return true; },
		'investments' => function($data, $options = []) { return true; },
		'affiliates' => function($data, $options = []) { return true; },
	];

	/*
	Hook file for overwriting/amending $transformFunctions and $filterFunctions:
	hooks/import-csv.php
	If found, it's included below

	The way this works is by either completely overwriting any of the above 2 arrays,
	or, more commonly, overwriting a single function, for example:
		$transformFunctions['tablename'] = function($data, $options = []) {
			// new definition here
			// then you must return transformed data
			return $data;
		};

	Another scenario is transforming a specific field and leaving other fields to the default
	transformation. One possible way of doing this is to store the original transformation function
	in GLOBALS array, calling it inside the custom transformation function, then modifying the
	specific field:
		$GLOBALS['originalTransformationFunction'] = $transformFunctions['tablename'];
		$transformFunctions['tablename'] = function($data, $options = []) {
			$data = call_user_func_array($GLOBALS['originalTransformationFunction'], [$data, $options]);
			$data['fieldname'] = 'transformed value';
			return $data;
		};
	*/

	@include(__DIR__ . '/hooks/import-csv.php');

	$ui = new CSVImportUI($transformFunctions, $filterFunctions);
