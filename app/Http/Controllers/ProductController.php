<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\DatabaseConnection;
use PDO;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id,$dbName)
    {
        
        // $connection = DatabaseConnection::setAnotherDB('db_usi');
        // $users = $connection->table('rmutiexperts_member')->get();
        //$users = DB::table('product')->get();
        //$users = DB::connection('anotherDB')->table('product')->get(); 
        //DatabaseConnection::setAnotherDB('another2');

        

        //$connection = DatabaseConnection::setAnotherDB($dbName);
        //$users = $connection->select($connection->raw("SHOW DATABASES") );
        //ใช้ไม่ได้$users = $connection->query('SELECT * FROM rmutiexperts_member')->get();
        //$users = $connection->select('SHOW DATABASES');
        //$users = $connection->table('rmutiexperts_member')->get();

        //$users = Product::get();
        //$users = Product::select(DB::raw('SHOW DATABASES')); ใช้ไม่ได้

        

        try {
            $users = DB::connection('anotherDB')->select('SELECT * FROM rmutiexperts_member');  

        }  catch (Exception $e) {
            $users = $e->message();
        }  
        
        echo $id;
        echo $dbName;
        echo json_encode($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
