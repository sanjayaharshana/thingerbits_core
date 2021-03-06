<?php

namespace Modules\Admin\Http\Controllers\Admin;

use Modules\User\Entities\User;
use Modules\Order\Entities\Order;
use Illuminate\Routing\Controller;
use Modules\Review\Entities\Review;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\SearchTerm;
use Illuminate\Http\Request; 
use File;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Storage;
use DB;
use Log;
use Response;

class DashboardController extends Controller
{
    public $x;
    /**
     * Display the dashboard with its widgets.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin::dashboard.index', [
            'totalSales' => Order::totalSales(),
            'totalOrders' => Order::count(),
            'totalProducts' => Product::withoutGlobalScope('active')->count(),
            'totalCustomers' => User::totalCustomers(),
            'latestSearchTerms' => $this->getLatestSearchTerms(),
            'latestOrders' => $this->getLatestOrders(),
            'latestReviews' => $this->getLatestReviews(),
        ]);
    }

    private function getLatestSearchTerms()
    {
        return SearchTerm::latest('updated_at')->take(5)->get();
    }

    /**
     * Get latest five orders.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    private function getLatestOrders()
    {
        return Order::select([
            'id',
            'customer_first_name',
            'customer_last_name',
            'total',
            'status',
            'created_at',
        ])
        ->latest()
        ->take(5)
        ->get();
    }

    /**
     * Get latest five reviews.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    private function getLatestReviews()
    {
        return Review::select('id', 'product_id', 'reviewer_name', 'rating')
            ->with('product:id')
            ->get();
    }

   

    //PackGenetro

    function packgenerator()
    {
        $data['data'] = DB::table('sol_packtable')->get();
        if(count($data) > 0)
        {
            return view('admin::packs.index',$data);
        }
        else
        {
            return view('admin::packs.index');
        }      
    
       

    }

    function createpackage()
    {
        //Tempory Deativated This code      
        $data['data'] = DB::table('products')->where('is_pack', '0')->get();

        if(count($data) > 0)
        {
            return view('admin::packs.createpack',$data);
        }
        else
        {
            return view('admin::packs.createpack');
        }      
    

      //  return view('admin::packs.createpack');
    }

    function createpackageinsert (Request $reql)
    {
        $package_name =  $reql->input('package_name');
        $product_name = $reql->input('product_name');

        $data = array(
            'pack_name' => $package_name,
            'product_id'=>$product_name,            
        );

       

       $pack_id = DB::table('sol_packtable')->insertGetId($data);

        DB::table('products')->where('id', $product_name )->update(['is_pack' => '1']);

       // return view('admin::rashpanel.insertlesson');
       return redirect()->route('packitems',[$pack_id,$product_name]);   
      // return redirect()->route('packgenerator');
    }

    function addpackitems ($packid,$productid) 
    {
        $data = DB::table('sol_packitem')->where('pack_id', $packid)->get();

        $product_info = DB::table('products')->where('id', $packid)->get();

        if(count($data) > 0)
        {
            return view('admin::packs.pack_items',['data' => $data,'product_info' => $product_info,'packid'=>$packid,'productid'=>$productid]);
        }
        else
        {
            return view('admin::packs.pack_items',['data' => $data,'product_info' => $product_info,'packid'=>$packid,'productid'=>$productid]);
        }      

    }

    function insertitems ($packid,$productid) 
    {
        $data = DB::table('products')->where('is_pack', '0')->get();

        if(count($data) > 0)
        {
            return view('admin::packs.add_product_item',['packid' => $packid,'productid'=>$productid,'data' => $data]);
        }
        else
        {
            return view('admin::packs.add_product_item',['packid' => $packid,'productid'=>$productid,'data' => $data]);
        }           

    }

    function postadditem(Request $req) 
    {
        $user_id =  '1';
        $pack_id = $req->input('pack_id');
        $main_product_id = $req->input('product_id');
        $product_item_id = $req->input('product_item_id');
        $product_item_name = 'ProductName';
        $qty = $req->input('qty');

        $dot = DB::table('products')->where('id', $product_item_id )->value('slug');

        $data = array(
            'user_id'=>$user_id,
            'pack_id' => $pack_id,
            'product_id'=>$main_product_id, 
            'product_item_id' => $product_item_id,
            'product_item_name'=>$dot,   
            'qty'=>$qty, 
        );

        DB::table('sol_packitem')->insert($data);       
        // return view('admin::rashpanel.insertlesson');
        return redirect()->route('packitems',[$pack_id,$main_product_id]);   
    }    
    
    function deletepack($productidt)
    {
        DB::table('sol_packitem')->where('product_id', $productidt )->delete();
        DB::table('sol_packtable')->where('product_id', $productidt )->delete();
        DB::table('products')->where('id', $productidt )->update(['is_pack' => '0']);


        return back(); 
    }

    function editpack($pack_id,$productid)
    {
        $datarol = DB::table('sol_packtable')->where('pack_id', $pack_id)->first();
        $productman = DB::table('products')->where('id', $datarol->product_id)->first();
        $data= DB::table('products')->where('is_pack', '0')->get();

        if(count($data) > 0)
        {
            return view('admin::packs.edit_pack',['data' => $data,'packagedit' => $datarol,'normalpc' => $productman,'packid' => $pack_id]);
        }
        else
        {
            return view('admin::packs.edit_pack');
        }      
    }

    function editpack_save(Request $reql )
    {
        $package_name =  $reql->input('package_name');
        $product_name = $reql->input('product_name');
        $pack_id = $reql->input('pack_id');

        $data = array(
            'pack_name' => $package_name,
            'product_id'=>$product_name,            
        );

       


        DB::table('sol_packtable')->where('pack_id', $pack_id )->update($data);

       // return view('admin::rashpanel.insertlesson');
       return redirect()->route('packitems',[$pack_id,$product_name]);   
    }

    function deletepol($productidt)
    {
        DB::table('sol_packitem')->where('product_id', $productidt )->delete();

        return back(); 

    }

    function edititems($productidt)
    {
       
        $data= DB::table('products')->where('is_pack', '0')->get();

        if(count($data) > 0)
        {
            return view('admin::packs.edit_item',['data' => $data]);
        }
        else
        {
            return view('admin::packs.edit_item');
        }      
    }

    function staff_admin()
    {
        return view('admin::staff_admin.index');

    }

    function purchase_oder()
    {

        $data['data'] = DB::table('sol_po_table')->where('draft', '0')->get();

        if(count($data) > 0)
        {
            return view('admin::purches_order.purches_order',$data);
        }
        else
        {
            return view('admin::purches_order.purches_order',$data);
        }
        

       // return view('admin::purches_order.purches_order');
    }

    public function purchase_oder_return($id)
    {
        $data= DB::table('products')->where('is_pack', '0')->get(); 
        
        //Enparine Purch Server
        $micro_data = DB::table('sol_po_table')->where('po_id', $id)->first();  
 

        return view('admin::purches_order.create_po',['po_id' => $id,'data'=>$data,'micro_data'=>$micro_data]);
    }

    function create_po()
    {
        $id = DB::table('sol_po_table')->insertGetId(
            array(
                'title' => 'untitle',
                'suppler_id'=> 'unknown',
                'adress'=> 'adress',
                'date'=>'date',
                'product_item_id'=>'id',
                'status'=>'panding',
                'draft'=>1,
            )
        );

        //return view('admin::purches_order.purches_order');
        return redirect()->route('purchase_oder_return',['po_id' => $id]); 
    }

    //Controller     
    public function addpo_items(Request $request){
     
        $data = array(
            "po_id"=>$request->po_id,
            "product_id"=> $request->product_id,
            "qty"=> $request->qty            
        );
        \Log::info( $data);
        
        $id = DB::table('sol_po_items')->insertGetId($data);

        //DB::table('sol_po_items')->insert($data);        
        return $id;     
    }

    public function add_po_getdata($id)
    {
        $data = DB::table('sol_po_items')->where('po_id', $id)->get();
        // $jelbrak = DB::table('sol_po_items')->where('po_id',$id)->get();
        
        $dataArr = array();
        foreach($data as $itms){
        // dd($itms->product_id);
        $jelbrak = DB::table('products')->where('id',$itms->product_id)->first();
        $data2 = [
            'po_items' => $itms->po_items,
            'po_id' => $itms->po_id,
            'product_id' => $itms->product_id,
            'product_name' => $jelbrak->slug,
            'product_price' => $jelbrak->price,
            'qty' => $itms->qty           
        ];
        array_push($dataArr,$data2);
    }      
        return Response::json($dataArr);
    }

    public function deletepo($id)
    {
        DB::table('sol_po_table')->where('po_id', $id )->delete();
        DB::table('sol_po_items')->where('po_id', $id )->delete();
        return redirect()->route('purchase_oder'); 
    }

    public function draft_oder()
    {
        $data['data'] = DB::table('sol_po_table')->where('draft', '1')->get();

        //$data['data'] = DB::table('sol_po_table')->get();

        if(count($data) > 0)
        {
            return view('admin::purches_order.purches_order_draft',$data);
        }
        else
        {
            return view('admin::purches_order.purches_order_draft',$data);
        }
        
    }

    public function save_po(Request $req)
    {
        
        // create Post

        $po_id = $req->input('referenceno');
        $date = $req->input('date');
        $title = $req->input('title');
        $suppler_id = $req->input('supplier');
        $status = $req->input('status');
        $adress = $req->input('adress');


        
       // $data = array('lesson_title'->$lesson_title,'lesson_body'->$lesson_body);
       DB::table('sol_po_table')->where('po_id', $po_id )->update(
           ['title' => $title,
           'suppler_id' => $suppler_id,
           'adress' => 'null',
           'date' => $date,
           'status' => $status,
           'draft' => '0',
           ]);

        //echo $lesson_id;
        return redirect()->route('draft_oder');     
    }    

    public function deleteitem($id)
    {
        DB::table('sol_po_items')->where('po_items', $id )->delete();
        
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }

    
}
