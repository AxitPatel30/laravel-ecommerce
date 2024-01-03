<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel;
use App\Models\userdatamodel;
use App\Models\cartmodel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use App\Models\User;
use Illuminate\Database\Query\Builder;
class Showdatacontroller extends Controller
{
    // for products admin 
    public function Products(){
        $data = DB::table('product_data')->get();
        return view('SData.product')->with('data',$data);
    }
    // for add product admin 
    public function Addproduct(){
        return view('SData.Addproduct');
    }
    // for add product to database admin 
    public function ProductToDB(Request $request){
       $productModel = new productModel();
       if ($request->hasfile('photo')) {
           $file = $request->file('photo');
           $extension = $file->getClientOriginalExtension();
           $filename = time(). "." .$extension;
           $file->move('uploads/photos/',$filename);
           $productModel->photo = $filename;
       }
       if ($request->hasfile('photo2')) {
           $file = $request->file('photo2');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'2'. "." .$extension;
           $file->move('uploads/photos/',$filename);
           $productModel->photo2 = $filename;
       }
       if ($request->hasfile('photo3')) {
           $file = $request->file('photo3');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'3'."." .$extension;
           $file->move('uploads/photos/',$filename);
           $productModel->photo3 = $filename;
       }
       if ($request->hasfile('photo4')) {
           $file = $request->file('photo4');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'4'. "." .$extension;
           $file->move('uploads/photos/',$filename);
           $productModel->photo4 = $filename;
       }
       $productModel->category = $request->input('category');
       $productModel->productname = $request->input('productname');
       $productModel->price = $request->input('price');
       $productModel->description = $request->input('description');
       $productModel->save(); 
       return view('SData.Addproduct');
    }
    // for offers admin
    public function Offers(){
        $data = DB::table('product_data')->get();
        return view('SData.offers')->with('data',$data);
    }
    // show data categorized 
    public function Category(){ 
        $product = DB::select('SELECT * FROM product_data ORDER BY category;');
        return view('SData.Category')->with('data',$product);
    }
    // delete products 
    public function ManageProducts(){ 
        $data = DB::table('product_data')->get();
        return view('SData.ManageProduct')->with('data',$data);
    }
    // delete producbts in database 
    public function deleteproduct($productid){
        $deleted = DB::table('product_data')->where('productid', '=', $productid)->delete(); 
        $data = DB::table('product_data')->get();
        if (!$deleted) {
            return "sorry we cant delete your data";
        }
        else {
            return view('SData.ManageProduct')->with('data',$data);
        }
    }
    // discription
    public function discription($productid){
        $discrib = DB::select("SELECT * FROM product_data where productid = $productid");
        return view('SData.data')->with('data',$discrib);
    }
    // city wise user count
    public function citywiseuser(){
        $city = DB::select('SELECT * FROM user_data ORDER BY city;');
        return view('SData.filter')->with('data',$city);
    }    
    public function Countrywiseuser(){
        $city = DB::select('SELECT * FROM user_data ORDER BY country;');
        return view('SData.filter')->with('data',$city);
    }
    // products 
    public function mobiles(){
        $product = DB::select('SELECT * FROM product_data where category = "mobiles"');
        return view('SData.filter')->with('data',$product);
    }
    public function Electronics(){
        $product = DB::select('SELECT * FROM product_data where category = "Electronics"');
        return view('SData.filter')->with('data',$product);
    }
    public function tvs(){
        $product = DB::select('SELECT * FROM product_data where category = "tvs"');
        return view('SData.filter')->with('data',$product);
    }
    public function Fashion(){
        $product = DB::select('SELECT * FROM product_data where category = "Fashion"');
        return view('SData.filter')->with('data',$product);
    }
    public function Beauty(){
        $product = DB::select('SELECT * FROM product_data where category = "Beauty"');
        return view('SData.filter')->with('data',$product);
    }
    public function Furniture(){
        $product = DB::select('SELECT * FROM product_data where category = "Furniture"');
        return view('SData.filter')->with('data',$product);
    }
    public function Grocery(){
        $product = DB::select('SELECT * FROM product_data where category = "Grocery"');
        return view('SData.filter')->with('data',$product);
    }
    // super admin 
    public function CreateanotheroneStore(){
        $data = DB::select('SELECT * FROM users where LoginCode = "0"');
        return view('SData.UserData')->with('data',$data);
    }
    public function Stores(){
        $data = DB::select('SELECT * FROM users where LoginCode = "1"');
        return view('SData.UserData')->with('data',$data);
    }
    public function editStorAdmin($id){
        $data = DB::select("SELECT * FROM users where id = $id");
        return view('SData.editstoreadmin')->with('data',$data);
    }
    public function StorAdmin(request $request){
    $updated = DB::table('users')
              ->where('id', $request->id)
              ->update(['email' => $request->email,'name' => $request->name,'LoginCode' => $request->LoginCode]);
     if ($updated) {
        return "updated";
     }   
    }
    public function CartData(){
        $email = Auth::user()->email;
        $product = DB::select("SELECT * FROM cart_data where email = '$email'");
        return view('SData.addtocart')->with('data',$product);
    }
    public function usercart(request $request,$productid){
        $product = DB::select("SELECT * FROM product_data where productid = $productid");
        foreach ($product as $key => $value) {
            cartmodel::create([
                'productid'=>$value->productid,
                'photo'=>$value->photo,
                'photo2'=>$value->photo2,
                'photo3'=>$value->photo3,
                'photo4'=>$value->photo4,
                'productname'=>$value->productname,
                'category'=>$value->category,
                'price'=>$value->price,
                'description'=>$value->description,
                'email'=>Auth::user()->email,
            ]);
        }
        return "data saved";
    }
    public function USerData(request $request){
        return view('SData.userinfo');
    }
    // add user data 
    public function Usersdata(request $request){
        $userdatamodel = new userdatamodel();
        $userdatamodel->emailadd = $request->input('emailadd');
        $userdatamodel->name = $request->input('name');
        $userdatamodel->Address = $request->input('Address');
        $userdatamodel->city = $request->input('city');
        $userdatamodel->state = $request->input('state');
        $userdatamodel->country = $request->input('country');
        $userdatamodel->save();
        return view('dashboard');
    }
    // buy 
    public function buy($id){
        $product = DB::select("SELECT * FROM product_data where productid = '$id'");
        return view('SData.buyproduct')->with('data',$product);
    }
}
