<?php

class ConfigTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		//\DB::table('config')->delete();
        
		\DB::table('config')->insert(array (
			0 => 
			array (
				'id' => 1,
				'key' => 'trial_period',
				'value' => 's:2:"14";',
			),
			1 => 
			array (
				'id' => 2,
				'key' => 'payment_period',
				'value' => 's:1:"5";',
			),
			2 => 
			array (
				'id' => 3,
				'key' => 'price_per_user',
				'value' => 's:4:"1600";',
			),
			3 => 
			array (
				'id' => 4,
				'key' => 'invoicing_day',
				'value' => 's:2:"-5";',
			),
			4 => 
			array (
				'id' => 5,
				'key' => 'company_name',
				'value' => 's:102:"Общество с ограниченной ответственностью "Ближе к делу"";',
			),
			5 => 
			array (
				'id' => 6,
				'key' => 'company_inn',
				'value' => 's:10:"7706416451";',
			),
			6 => 
			array (
				'id' => 7,
				'key' => 'company_ppc',
				'value' => 's:9:"770601001";',
			),
			7 => 
			array (
				'id' => 8,
				'key' => 'company_bin',
				'value' => 's:9:"044583340";',
			),
			8 => 
			array (
				'id' => 9,
				'key' => 'company_giro',
				'value' => 's:20:"40702810470010000267";',
			),
			9 => 
			array (
				'id' => 10,
				'key' => 'company_ca',
				'value' => 's:20:"30101810000000000340";',
			),
			10 => 
			array (
				'id' => 11,
				'key' => 'company_bank',
				'value' => 's:88:"МОСКОВСКИЙ ФИЛИАЛ ОАО КБ «Региональный кредит» ";',
			),
			11 => 
			array (
				'id' => 12,
				'key' => 'company_legal_address',
				'value' => 's:83:"119180, г. Москва, 2-ой Хвостов переулок, д.12, пом. V.";',
			),
			12 => 
			array (
				'id' => 13,
				'key' => 'spam_score',
				'value' => 's:4:"15.0";',
			),
			13 => 
			array (
				'id' => 14,
				'key' => 'sms_confirmation',
				'value' => 's:1:"1";',
			),
			14 => 
			array (
				'id' => 15,
				'key' => 'num_pictures_in_latter',
				'value' => 's:1:"3"',
			),
			15 => 
			array (
				'id' => 16,
				'key' => 'unsubscribe_in_letter',
				'value' => 's:1:"1"',
			),
			16 => 
			array (
				'id' => 17,
				'key' => 'num_links_in_letter',
				'value' => 's:1:"3"',
			),
		));
	}

}
