<?php namespace App\Http\Requests;

use App\Http\Requests\Request;


class StylistFormRequest extends Request {

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
			'stylist_id'
			'date'
			'first_name'
			'second_name'
			'address1'
<<<<<<< HEAD
			address2'
			address3'
			postcode'
			email'
			phone'
			mobile'
			current_emp'
			current_emp_des
			school_qual
			qual_non_hair
			adex_stock
			adex_manage
			adex_train
			adex_reception
			adex_marketing
			adex_cservice
			experience
			current_position
			client_base
			qualifications
			cutting_skills
			colour_knowledge
			colour_skills
			men
			extensions_weave
			extensions_other
			chem_straighten
			braz_blow
			hair_up
			awards
			about_you
			why_hairdressing
			why_jakata
=======
			'address2'
			'address3'
			'postcode'
			'email'
			'phone'
			'mobile'
			'current_emp'
			'current_emp_des'
			'school_qual'
			'qual_non_hair'
			'adex_stock'
			'adex_manage'
			'adex_train'
			'adex_reception'
			'adex_marketing'
			'adex_cservice'
			'experience'
			'current_position'
			'client_base'
			'qualifications'
			'cutting_skills'
			'colour_knowledge'
			'colour_skills'
			'men'
			'extensions_weave'
			'extensions_other'
			'chem_straighten'
			'braz_blow'
			'hair_up'
			'awards'
			'about_you'
			'why_hairdressing'
			'why_jakata'
>>>>>>> Dev
			
		];
	}

}
