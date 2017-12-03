<?php

namespace App\Http\Controllers\Settings\Company;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\Company\ContactRequest;
use App\Http\Resources\Settings\Company\CompanyResource;
use App\Repository\Settings\Company\ContactRepository;
/**
 * 
 * @resource Company Contact
 *
 * Company Contact resource representation.
 */
class ContactController extends Controller
{
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRequest $request, $id)
    {
        //
    }
}
