<?php

namespace App\Http\Controllers\Macros;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Macros\MacroRequest;
use App\Http\Resources\Macros\MacroResource;
use App\Http\Resources\Macros\MacroCollection;
use App\Repository\Macros\MacroRepository;

/**
 * Class MacroController
 * @package App\Http\Controllers\Macros
 */
class MacroController extends Controller
{
    /**
     * @var macroRepository
     */
    protected $macroRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(MacroRepository $macroRepository)
    {
        $this->macroRepository = $macroRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \App\Http\Resources\Macros\MacroCollection
     */
    public function index(Request $request)
    {
        //get data
        $requestData = $request->all();
        //get from db
        $Macros = $this->macroRepository->getAll($requestData,$perPage = 25);
        //output
        return new MacroCollection($Macros);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \App\Http\Resources\Macros\MacroResource
     */
    public function show($id)
    {
        $Macro = $this->macroRepository->getById($id);

        if (is_null($Macro)) {
            return $this->sendError('Macro not found.');
        }
        //output
        return new MacroResource($Macro);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Macros\MacroRequest $request
     *
     * @return mixed
     */
    public function store(MacroRequest $request)
    {
        //get data
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $Macro_id = $this->macroRepository->createCustomMacro(
            $company_id =1,
            $requestData
        );
        //output
        return $this->sendResponse('Macro_id:'.$Macro_id, 'Macro created successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Macros\MacroRequest $request
     * @param  int  $id
     *
     * @return mixed
     */
    public function update(MacroRequest $request, $id)
    {
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $Macro_id = $this->macroRepository->update(
            $id,
            $company_id=1,
            $requestData
        );
        //output
        return $this->sendResponse('Macro_id:'.$Macro_id, 'Macro updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return mixed
     */
    public function destroy($id)
    {
        $this->macroRepository->delete($id);
        //output
        return $this->sendResponse('Macro_id:'.$id, 'Macro deleted successfully.');
    }
}
