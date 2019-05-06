<?php

namespace Modules\Admin\Http\Controllers\Admin;

use Modules\User\Entities\User;
use Modules\Order\Entities\Order;
use Illuminate\Routing\Controller;
use Modules\Review\Entities\Review;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\SearchTerm;
use Illuminate\Http\Request; 
use DB;
use Log;

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

    public function lessionpan()
    {
        $data['data'] = DB::table('course_list')->get();

        if(count($data) > 0)
        {
            return view('admin::rashpanel.index',$data);
        }
        else
        {
            return view('admin::rashpanel.index');
        }
        
       

    }

    public function addles() 
    {
       
    }

    public function insertlesson(request $request) 
    {
        echo "ehhple";
    }

    public function courseopener($courseid) 
    {
        $data['data'] = DB::table('lessons')->where('course_id', $courseid)->get();

        if(count($data) > 0)
        {
            return view('admin::rashpanel.listgroup',$data);
        }
        else
        {
            return view('admin::rashpanel.listgroup');
        }

       // return view('admin::rashpanel.listgroup');
    }

    public function lessoneditor( $lessonid) {
       // return view('admin::rashpanel.lesson_editor');
        $data['data'] = DB::table('lessons')->where('lesson_id', $lessonid)->get();
        $this->x = $lessonid;

        if(count($data) > 0)
        {
            return view('admin::rashpanel.lesson_editor',$data);
        }
        else
        {
            return view('admin::rashpanel.listgroup');
        }

       // return view('admin::rashpanel.listgroup');

    }

    public function updatelesson (Request $req) 
    {
        
        $lesson_id = $req->input('lesson_id');
        $course_id = $req->input('course_id');
        $lesson_title = $req->input('lesson_title');
        $lesson_body = $req->input('lesson_body');
        
       // $data = array('lesson_title'->$lesson_title,'lesson_body'->$lesson_body);
       DB::table('lessons')->where('lesson_id', $lesson_id )->update(['lesson_title' => $lesson_title,'lesson_body' => $lesson_body,]);

        //echo $lesson_id;
        return redirect()->route('courseopenerrc',$course_id);        

        //echo $request->lesson_title;

    }

    public function deletelesson($valueid)
    {
        DB::table('lessons')->where('lesson_id', $valueid )->delete();

        return back(); 

    } 

    public function addlesson ($cour_id) 
    {
    
        return view('admin::rashpanel.insertlesson',['course_id' => $cour_id]);
    }

    public function insertles(Request $reql) 
    {
        // dd($reql->all());
        $course_id =  $reql->input('apple');
        $lesson_title = $reql->input('lesson_title');
        $lesson_body = $reql->input('lesson_body');
        $user_id = $reql->input('user_id');
        $l_order = $reql->input('l_order');
        $is_ok = $reql->input('is_ok');

        $data = array(
            'course_id' => $course_id,
            'lesson_title'=>$lesson_title,
            'lesson_body'=>$lesson_body,
            'user_id'=>$user_id,
            'l_order'=>$l_order,
            'is_ok' => $is_ok,
        );

        DB::table('lessons')->insert($data);
       // return view('admin::rashpanel.insertlesson');
       return view('admin::rashpanel.insertlesson',['course_id' => $course_id]);

        //echo "dfsd";
   
    }

    function createcourse() {
        return view('admin::rashpanel.createcourse');

        //echo 'appe';
    }

    function courseinsert(Request $reql) 
    {
        
        $user_id =  '1';
        $course_title = $reql->input('course_title');
        $slag = $reql->input('slg');
        $course_image = $reql->input('course_img');
        $course_intro = $reql->input('course_intros');
        $course_discription = $reql->input('cours_discrip');
        $reccomandproduct_id = $reql->input('rcmmand');

     
        
        

        $id = DB::table('course_list')->insertGetId(
            array(
                'user_id' => $user_id,
                'course_title'=>$course_title,
                'slag'=>$slag,
                'course_image'=>$course_image,
                'course_intro'=>$course_intro,
                'course_discription' => $course_discription,
                'reccomandproduct_id' => $reccomandproduct_id,
            )
        );

        

        $lesdata = array(
            'user_id' => '1',
            'lesson_title'=>'Example Lesson',
            'lesson_body'=>'Hellow WOrd',
            'l_order'=>'1',
            'course_id'=> $id,
            'is_ok' => '1',
        );

       DB::table('lessons')->insert($lesdata);       
        // return view('admin::rashpanel.insertlesson');
        return view('admin::rashpanel.createcourse');


    }

    function deletecourse ($course_id) 
    {
        DB::table('lessons')->where('course_id', $course_id )->delete();
        DB::table('course_list')->where('course_id', $course_id )->delete();

        return back(); 
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

        DB::table('sol_packtable')->insert($data);
        DB::table('products')->where('id', $product_name )->update(['is_pack' => '1']);

       // return view('admin::rashpanel.insertlesson');
       return redirect()->route('packgenerator');
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

        $dot = DB::table('products')->where('id', )->get();

        $data = array(
            'user_id'=>$user_id,
            'pack_id' => $pack_id,
            'product_id'=>$main_product_id, 
            'product_item_id' => $product_item_id,
            'product_item_name'=>$dot->slug,   
            'qty'=>$qty, 
        );

        DB::table('sol_packitem')->insert($data);       
        // return view('admin::rashpanel.insertlesson');
        return redirect()->route('packgenerator');
    }        
}
