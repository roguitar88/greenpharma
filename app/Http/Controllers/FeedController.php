<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sales;
use App\Models\Spreadsheet;

class FeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function feed()
    {
        return view('feed');
    }


    /*
    public function import()
    {
        Excel::import(new UsersImport,request()->file('file'));

        return back();
    }
    */



    /*
    public function postUpload (Request $request)
    {
        if ($request->hasFile('csv_file')){
        //if (isset($_POST['upload_file']) && !empty($_POST['csv_file'])){

            $file = $request->file('csv_file');
            //$file = $_POST['upload_file']; //Input::file('file');
            $name = time() . '-' . $file->getClientOriginalName();

            //check out the edit content on bottom of my answer for details on $storage
            //$storage = '/some/world/readible/dir';
            //$path = $storage . '/uploads/CSV';
            $path = '/assets/uploads/CSV/';

            // Moves file to folder on server
            $file->move($path, $name);

            // Import the moved file to DB and return OK if there were rows affected
            $this->_import_csv();

            //if ($this->_import_csv($path, $name)) {
                //$result = 'OK';
            //} else {
                //$result = 'Error';
            //}
            return view( 'feed_result' );
        }
    }
    */

    public function index()
    {
        //
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
    /*
    public function store(Request $request)
    {
        //
    }
    */

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

    public function store(Request $request) //$path, $filename
    {
        //$csv = $path . $filename;
        $c_dev = false;
        $c_host = "localhost";
        $c_user = "root";
        $c_pass = "";
        $c_datenbank = "green_pharma";

        $db = new \PDO("mysql:host=".$c_host.";dbname=".$c_datenbank."", $c_user, $c_pass, array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8, NAMES utf8"));
        //$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        if($request->credential > 0){
        //if(isset($_POST['postad'])){
            if ($request->hasFile('uploadedfile')){
            //if (isset($_FILES['uploadedfile'])) {

                // get the csv file and open it up
                //$file = $request->file('uploadedfile');
                $file = $_FILES['uploadedfile']['tmp_name'];
                $application_type = $_FILES['uploadedfile']['type'];
                $filename = $_FILES['uploadedfile']['name'];
                $explode = explode(".", $filename);
                $ext = end($explode);
                //$name = time() . '-' . $file->getClientOriginalName();

                if($application_type == 'application/vnd.ms-excel' && $ext == 'csv'){
                    $handle = fopen($file, "r");
                    try {
                        //$sale = new Sales();
                        // prepare for insertion
                        $query_ip = $db->prepare('INSERT INTO sales (`id`, `product`, `ean`, `description`, `supplier`,`jan_20`, `feb_20`, `mar_20`, `apr_20`, `may_20`, `jun_20`, `jul_20`, `aug_20`, `sep_20`, `oct_20`, `nov_20`, `dec_20`, `jan_21`, `feb_21`, `mar_21`, `apr_21`, `may_21`, `jun_21`, `jul_21`, `aug_21`, `sep_21`, `oct_21`, `nov_21`, `dec_21`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

                        // unset the first line like this
                        #fgets($handle);

                        // created loop here
                        while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) { //fgetcsv($handle, 1000, ',')
                            $query_ip->execute($data);
                            //$sale->product = $data;
                            //...
                        }

                        fclose($handle);

                    } catch(\PDOException $e) {
                        $errormsg = 'Erro: '.$e->getMessage();
                        die($e->getMessage());
                    }

                    $name = time() . '-sales.csv';
                    $tmp = 'assets/uploads/CSV/'.$name;

                    $spreadsheet = new Spreadsheet();
                    $spreadsheet->name = $name;
                    $spreadsheet->username = $request->userid;
                    $spreadsheet->save();

                    if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $tmp)) {
                        $result = "Foi pra pasta!\n";
                        //echo 'Tá na pasta!<br>';
                    } else {
                        $result = "Não foi pra pasta...\n";
                        //echo 'Não foi pra pasta...<br>';
                    }

                    $result2 = 'Projeto importado com sucesso';

                    return view('feed', compact('result', 'result2'));
                } else {
                    $result = '';
                    $result2 = 'O formato do presente arquivo não é permitido';
                    return view('feed', compact('result', 'result2'));
                }

            } else {
                $result = '';
                $result2 = 'Não foi possível importar o projeto ou o campo se encontra vazio';
                return view('feed', compact('result', 'result2'));
            }
        }
    }
}
