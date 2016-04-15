<?php

namespace Mi2\FHIR\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mi2\Emr\Contracts\PatientAdapterInterface;
use Mi2\Emr\Contracts\PatientFinderInterface;
use Mi2\Emr\Contracts\PatientRepositoryInterface;

class EncounterController extends Controller
{
    protected $encounterRepository = null;
    protected $encounterAdapter = null;

    public function __construct( PatientRepositoryInterface $patientRepository, PatientAdapterInterface $patientAdapter )
    {
        $this->patientRepository = $patientRepository;
        $this->patientAdapter = $patientAdapter;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return $this->patientAdapter->toOutput( $this->patientRepository->fetchAll() );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store( Request $request )
    {
        $data = $request->getContent();
        $patientInterface = $this->patientAdapter->toPatientInterface( $data );
        $this->patientRepository->create( $patientInterface );
        // TODO return response code
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return $this->patientAdapter->toOutput( $this->patientRepository->find()->byPid( $id ) );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
