<?php

namespace Modules\Admin\Http\Controllers\Admin;

use Modules\User\Entities\User;
use Modules\Order\Entities\Order;
use Illuminate\Routing\Controller;
use Modules\Review\Entities\Review;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\SearchTerm;
use DB;

class DashboardController extends Controller
{
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
        return view('admin::rashpanel.lesson_editor');
        $data['data'] = DB::table('lessons')->where('lesson_id', $lessonid)->get();

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

    public function updatelesson (Request  $request) 
    {
        
       

        $lesson_title = $request->input('lesson_title');
        $lesson_body = $request->input('lesson_body');
        
        echo $lesson_title;
        echo $lesson_body;
        

        //echo $request->lesson_title;
    }
}
