<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// reference the Dompdf namespace
use Dompdf\Dompdf;
use EmailValidation;
use Requests;
use League\CLImate\CLImate;
use Coduo\PHPHumanizer\String\Humanize;
use Coduo\PHPHumanizer\StringHumanizer;
use Coduo\PHPHumanizer\NumberHumanizer;
use Coduo\PHPHumanizer\CollectionHumanizer;
use Stringy\Stringy as S;

class TestController extends Controller
{
    //
	public function testpdf(){
		// instantiate and use the dompdf class
		$dompdf = new Dompdf();
		$dompdf->loadHtml('hello world');

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4', 'landscape');

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		$dompdf->stream();
	}

	public function testemail()
	{
		$validator = EmailValidation\EmailValidatorFactory::create('hamzath.anees@ooredoo.mv');

		$jsonResult = $validator->getValidationResults()->asJson();
		$arrayResult = $validator->getValidationResults()->asArray();

		return $jsonResult;
	}

	public function testrequest()
	{
		$headers = array('Accept' => 'application/json');
		$options = array('auth' => array('hamzathanees@gmail.com', 'Index04072'));
		$request = Requests::get('https://api.github.com/gists', $headers, $options);

		var_dump($request->status_code);
		// int(200)

		var_dump($request->headers['content-type']);
		// string(31) "application/json; charset=utf-8"

		var_dump($request->body);
	}

	public function testterminal()
	{
		$climate = new CLImate;

		$climate->out('This prints to the terminal.');
	}

	public function testhumanize()
	{
		echo StringHumanizer::humanize('field_name'); // "Field Name"
		echo StringHumanizer::humanize('user_id'); // "User"
		echo StringHumanizer::humanize('field_name', false); // "field name"

		echo NumberHumanizer::ordinalize(0); // "0th"
		echo NumberHumanizer::ordinalize(1); // "1st"
		echo NumberHumanizer::ordinalize(2); // "2nd"
		echo NumberHumanizer::ordinalize(23); // "23rd"
		echo NumberHumanizer::ordinalize(1002, 'nl'); // "1002e"
		echo NumberHumanizer::ordinalize(-111); // "-111th"

		print_r(CollectionHumanizer::oxford(['Michal', 'Norbert', 'Lukasz', 'Pawel'], 2)); // "Michal, Norbert, and 2 others"
		print_r(CollectionHumanizer::oxford(['Michal', 'Norbert', 'Lukasz'], 2)); // "Michal, Norbert, and 1 other"
		print_r(CollectionHumanizer::oxford(['Michal', 'Norbert'])); // "Michal and Norbert"

	}

	public function teststringy()
	{
		$stringy = S::create('fòôbàř'); // 'fòôbàř'

		return $stringy;

	}
}
