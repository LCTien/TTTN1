<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = DB::table('services')->get();
        return view('service',['isService' => true,'listService'=> $service]);
    }
    public function listService(Request $request)
    {
        $list = DB::table('services')->where('name','LIKE','%'.$request->service.'%')->get();
        $output = '';
        if(count($list) > 0)
        {
            foreach($list as $item)
            {
                $output .= '<p onclick="addTag2(`'.$item->name.'`)">'.$item->name.'</p>';
            }
        }
        else{
            $output .= '<span style="color: red"> Không có dịch vụ này</span>';
        }
        
        return response()->json($output);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $code = $request->code;
        $name = $request->name;
        $description = $request->description;
        $auto = "";
        $prefix = "";
        $surfix = "";
        $reset = 0;
        if($request->auto_incre == "on")
        {
            $auto = $request->start_value ."-". $request->end_value;
        }
        if($request->prefix == "on")
        {
            $prefix = $request->prefix_value;
        }
        if($request->surfix == "on")
        {
            $surfix = $request->surfix_value;
        }
        if($request->reset == "on")
        {
            $reset = 1;
        }
        DB::insert('insert into services (Code, name, description, auto_incre, prefix, surfix, reset_everyday, created_at, status_active) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [$code , $name, $description ,$auto, $prefix, $surfix, $reset, Carbon::now(),1]);
        return redirect()->route('service');
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {
        //
    }
    public function updating()
    {
        $service = DB::table('services')
        ->where('Code','=',$_GET['id'])
        ->get();
        $auto = "";
        $startvalue = "0001";
        $endvalue = "9999";
        if($service[0]->auto_incre != "")
        {
            $auto = explode('-',$service[0]->auto_incre);
            $starvalue = $auto[0];
            $endvalue = $auto[1];
        }
        return view('update-service',['isService' => true,'item'=>$service,'startvalue' => $startvalue,'endvalue'=>$endvalue]);
    }
    public function update(Request $request)
    {
        $code = $request->code;
        $name = $request->name;
        $description = $request->description;
        $auto = "";
        $prefix = "";
        $surfix = "";
        $reset = 0;
        if($request->auto_incre == "on")
        {
            $auto = $request->start_value ."-".$request->end_value;
        }
        if($request->prefix == "on")
        {
            $prefix = $request->prefix_value;
        }
        if($request->surfix == "on")
        {
            $surfix = $request->surfix_value;
        }
        if($request->reset == "on")
        {
            $reset = 1;
        }
        DB::update('update services set Code = ?, name = ?, description = ?, auto_incre = ?, prefix = ?, surfix = ?, reset_everyday = ?, updated_at = ? where Code = ?', [$code , $name, $description ,$auto, $prefix, $surfix, $reset, Carbon::now(),$request->oldCode]);
        return redirect()->route('service');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = DB::table('services')->where('Code','=',$id)->get();
        $listNumber = DB::table('givenumbers')
        ->where('service_id','=',$id)
        ->get();
        return view('detail-service',['isService' => true,'service'=> $service,'listNumber'=>$listNumber]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
