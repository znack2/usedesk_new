<?



	public function mailcimpAddList($email, $status, $list_id, $api_key, $merge_fields = array('FNAME' => '','LNAME' => '') ){
        try{
            $data = array(
                'apikey'        => $api_key,
                'email_address' => $email,
                'status'        => $status,
                'merge_fields'  => $merge_fields
            );
            $this->service->call();
            return $result;
        }
        catch(Exception $e){

        }
    }