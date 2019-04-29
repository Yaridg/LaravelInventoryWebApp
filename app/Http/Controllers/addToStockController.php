<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class addToStockController extends Controller
{
    private $qrCodeLumberType;
    private $qrCodeLumberSize;
    private $amount;
    private $lumberQRCode;

    /****** Scanner Functionality *********/
//QRCode will contain the type and size of the lumber

//function just displays the QRCode scanning functionality
    public function displayQRScanner(){

        //return view('backLayout.scanQRCode');
        return "Success";
    }
    //called right after QR scanning
    public function getUserAmount(){

        //return view('backLayout.showFormAmount');
        return "Success";
    }

    public function setUserAmount($total){

        $this->amount = $total;

    }
    /************* Manual Input through form **********/

    // Displays the inputForm
    public function displayEnterForm(){
        //selecting branches from database and passing it to the view
        $branches = array (
            "id" => "1","name"=>"test"
        );
        return view('backLayout.showAddStockForm');

    }
    public function addLumber(Request $request){

        print_r($request->all());
        $lumberType = $request->get("length");
        echo $lumberType;
          DB::table('users')->insert(
              array('user' => 'jdoe',
                    'fname' => 'john',
                    'lname' => 'doe',
                    'email' => 'jdoe@example.com')
          );

    }

    /* @pre: requires qrcode
     * @param $qrcode
     * @post stores values in global variable.
     */
    public function splitQRCode($qrCode){

        $this->lumberQRCode = $qrCode ;
        $split = split("_", $qrCode);
        $this->qrCodeLumberType = $split[0];
        $this->qrCodeLumberSize = $split[1];

    }
    /* @pre: requires form data
     * @param $request
     * @post updates item Stock
     */
    public function updateStock(Request $request){
        /*
        DB::insert('insert into student (name) values(?)',[$name]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
        */
        $userID = $request->input('userID');
        $lumberType = $request->input('lumberType');
        $amount = $request->input('amount');

        $sql = NULL; //query from database to see if lumbertype and lumberSize are within the tables
        if($sql == NULL){
            //insert lumbertype and lumberSIze in table
            return "Success";
        }
        //insert lumberDetails
        //insert itemStockEntry




        return "Success";
    }
    /**
     * updates the database on item added.
     *
     * @param  string  $lumbertype
     * @param  int  $amount
     * @return \Illuminate\Http\Response
     */
//    public function addToStock($lumbertype, $amount){
//
//        //updates the database on amount and lumber type specified.
//
//    }
}
