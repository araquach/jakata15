<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

apprentice_id
date
first_name
second_name
age
address1
address2
address3
postcode
email
phone
mobile
current_position
in_salon
salon_name
qualification_school
qualification_hair
cutting
styling
colouring
men
extensions
chem_straightening
brazil_blow
hair_up
about
why_hairdressing
why_jakata

class ApprenticeFormRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'apprentice_id' => 'required',
			'date' => 'required',
			'first_name' => 'required',
			'second_name' => 'required',
			'age' => 'required',
			'address1' => 'required',
			'address2' => 'required',
			'address3' => 'required',
			'postcode' => 'required',
			'email' => 'required',
			'phone' => 'required',
			'mobile' => 'required',
			'current_position' => 'required',
			'in_salon' => 'required',
			'salon_name' => '',
			'qualification_school' => 'required',
			'qualification_hair' => 'required',
			'cutting' => 'required',
			'styling' => 'required',
			'colouring' => 'required',
			'men' => 'required',
			'extensions' => 'required',
			'chem_straightening' => 'required',
			'brazil_blow' => 'required',
			'hair_up' => 'required',
			'about' => 'required',
			'why_hairdressing' => 'required',
			'why_jakata' => 'required'
		];
	}

}
