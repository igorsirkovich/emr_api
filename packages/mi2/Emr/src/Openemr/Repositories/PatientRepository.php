<?php
/**
 * Created by PhpStorm.
 * User: kchapple
 * Date: 2/5/16
 * Time: 9:44 AM
 */

namespace Mi2\Emr\OpenEMR\Repositories;

use App\System\AbstractRepository;
use Illuminate\Support\Facades\DB;
use Mi2\Emr\Contracts\PatientFinderInterface;
use Mi2\Emr\Contracts\PatientInterface;
use Mi2\Emr\Contracts\PatientRepositoryInterface;
use Mi2\Emr\OpenEMR\Eloquent\PatientData as Patient;

class PatientRepository extends AbstractRepository implements PatientRepositoryInterface
{
    public function __construct( PatientFinderInterface $finder )
    {
        $this->finder = $finder;
    }

    public function create( PatientInterface $patientInterface )
    {
        if ( $patientInterface instanceof PatientData ) {

            if ( !$patientInterface->getId() ) {
                // If a pid is not provided, we have to increment the pid in SQL
                // because though it's not the primary key, it must be unique.
                // This subquery increments the pid from the max in the table
                $subquery = DB::table((new PatientData)->getTable() . ' as PD')
                    ->selectRaw('pid + 1 as new_pid')
                    ->orderBy('pid', 'desc')
                    ->take(1)->toSql();

                $patientInterface->setAttribute( 'pid',  DB::raw("($subquery)") );
            }

            $patientInterface->save();

        }
    }

    public function update( $id, array $data )
    {

    }

    public function delete( $id )
    {

    }

    public function fetchAll()
    {
        return Patient::all();
    }

    public function get( $id )
    {
        return Patient::find( $id );
    }

}