<?php
namespace App\Http\Controllers\API;
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\food;
use App\Models\menu;
use App\Models\menus;
use App\Models\mmfood;
use App\Models\kfood;
use App\Models\User;
use App\Models\orders;
use App\Models\towns;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    public function index()
    {
        $food=food::all();
     return view('articles/home',compact('food'));
    }
    //for insert food home page

    public function storedata()
    {
        return view('admin.insert');
    }

    public function insertdatatoDB(Request  $request){

        $food=new food();
        $food->img=$request->input('img');
        $food->title=$request->input('title');
        $food->save();
        return redirect()->back()->with('status','Foods Added Successfully');
    }
    public function adminhome(){

        $food=food::all();

       // $menu=menu::all();
        return view('admin/adminhome',compact('food'));
    }




    public function slide(){
        return view('articles.slide');
    }


    //FOR DELETE DATA


    public function destroy($id)
    {
        $food = food::find($id);
        $food->delete();

       
        return redirect()->back()->with('status','Item Deleted Successfully');
    }  
    
    //for delete data insertallmenu
   //delete kfood
   
   public function deletek($id){
   $kfood=kfood::find($id);
   $kfood->delete();
   
   return redirect()->back()->with('status','Kfood Deleted Successfully');

}
   
  //delete mmfood
 public function deletem($id){
    $mmfood=mmfood::find($id);
    $mmfood->delete();
    //return view('admin/delmenu',['data'=>$mmfood]);
    return redirect()->back()->with('status','Kfood Deleted Successfully');
 
 }

   

  

public function insertmenu(){
    return view('admin.adminhome');
}






    public function setmenu(Request $request){
       
        $mmfood=new mmfood();
//        $user=Auth::User()->id;


       $mmfood->img=$request->input('img');
        $mmfood->price=$request->input('price');
        $mmfood->title=$request->input('title');
       // $mmfood->img = $imageName;

    

        $mmfood->save();
        return redirect()->back()->with('status','Foods Added Successfully');

    }

    // select* mmfood



    public function mmfood(){
        $mmfood=mmfood::all();
        $kfood=kfood::all();
        return view('articles.mmfood',compact('mmfood','kfood'));
    }
   
   



    public function delmenus(){
        $mmfood=mmfood::all();
        $kfood=kfood::all();
        $food=food::all();
        return view('admin.delmenu',compact('mmfood','kfood','food'));
    }
 
    public function selectmmfood($id)
    {
     $mmfood = mmfood::find($id);
     $towns=towns::all();
    // $kfood = mmfood::find($id);
     return view('articles/makeorder',['data'=>$mmfood],compact('towns'));
    }  
    public function selectkfood($id)
    {   $towns=towns::all();
     $kfood = kfood::find($id);
    // $kfood = mmfood::find($id);
     return view('articles/makeorder',['data'=>$kfood],compact('towns'));
    }  

  
  




    public function pfood($id)
    {
     $food = food::find($id);
    // $kfood = mmfood::find($id);
     return view('articles/makeorder',['data'=>$food]);
    }  
    public function ser()
    {

    // $kfood = mmfood::find($id);
     return view('articles/ser');
    } 
    public function order()
    {
$user=Auth::User()->id;
$orders = orders::Where('user_id', "$user")->get();

        return view('articles/order',compact('orders'));
    } 


   
}
