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
    private $x;
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
        echo $cour_id;
        return view('admin::rashpanel.insertlesson');
    }

    public function insertles(Request $reql) 
    {
        $course_id = '1';
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

        return view('admin::rashpanel.insertlesson');

        //echo "dfsd";
   
    }
}
