<?php

class ChatApiTokenTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		//\DB::table('chat_api_token')->delete();
        
		\DB::table('chat_api_token')->insert(array (
			0 => 
			array (
				'id' => 1,
				'token' => '7ZeLaMtKfRaXAD1mLaD1heIGLZgVgauDW3uqtwMizctBIoeFRB3lfAiNSYq5igxt',
			),
		));
	}

}
