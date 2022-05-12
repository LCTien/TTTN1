<?php

namespace App\Http\Controllers;

use App\Models\Givenumber;
use App\Http\Requests\StoreGivenumberRequest;
use App\Http\Requests\UpdateGivenumberRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
class GivenumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serial = DB::table('givenumbers')
        ->join('services','services.Code','=','service_id')
        ->join('equipments','equipments.Code','=','equipment_id')
        ->select('givenumbers.*','services.name as service_name','equipments.name as equipment_name')
        ->get();
        $service = DB::table('services')->get();
        $equip = DB:: table('equipments')->get();
        return view('givenumber',['isGivenumber'=> true,'serial'=> $serial,'services'=> $service,'equip'=>$equip]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function creating()
    {
        $service = DB::table('services')->get();
        return view('add-givenumber',['service' => $service,'isGivenumber'=> true]);
        
    }
    public function create(Request $request)
    {
        $equipment = DB::select('select equipments.Code as code from equipments where equipments.service_use like "%'.$request->service.'%" and not EXISTS (select equipment_id from givenumbers WHERE equipments.Code = givenumbers.equipment_id )');
        if(count($equipment)==0)
        {
            $equipment = DB::table('equipments')
            ->select([
                DB::raw('Count(*) as tong'),
                DB::raw('Code as code')
            ])
            ->join('givenumbers','givenumbers.equipment_id','=','equipments.Code')
            ->where('equipments.service_use','like','%'.$request->service.'%')
            ->groupBy('Code','equipments.name')
            ->orderBy('tong')
            ->get();
        }
        $service = DB::table('services')->where('name','=',$request->service)->get();
        $STT = $service[0]->Code;
        if($service[0]->auto_incre != "")
        {
            $STT .= explode('-',$service[0]->auto_incre)[0];
        }
        if($service[0]->prefix != "")
        {
            $STT = $service[0]->prefix . $STT;
        }
        if($service[0]->surfix != "")
        {
            $STT .= $service[0]->surfix;
        }
        $time = Carbon::now('Asia/Ho_Chi_Minh');
        $limit_time =Carbon::now('Asia/Ho_Chi_Minh')->addHours(5);
        $insert =  DB::insert('insert into givenumbers (serial,name,phonenumber,email,service_id,equipment_id,limit_time,created_at,status) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [$STT,$request->name,$request->phonenumber,$request->email,$service[0]->Code,$equipment[0]->code,$limit_time,$time,1]);
        $output = ' <div class="modal-give-content">
                    <span class="close">x</span>
                    <div class="modal-give-content-child1">
                        <div class="modal-give-content-child1-title">Số thứ tự được cấp</div>
                        <div class="modal-give-content-child1-STT"> '.$STT.'</div>
                        <div class="modal-give-content-child1-service">DV:'.$request->service.'</div>
                    </div>
                    <div class="times">
                        <p>Thời gian cấp: '.$time.'</p>
                        <p>Hạn sử dụng: '.$limit_time.'</p>
                    </div>
                    </div>';

        return response()->json($output);
    }
    public function detail($stt)
    {
        $serial = DB::table('givenumbers')
        ->join('services','services.Code','=','service_id')
        ->join('equipments','equipments.Code','=','equipment_id')
        ->select('givenumbers.*','services.name as service_name','equipments.name as equipment_name')
        ->where('serial','=',$stt)
        ->get();
        return view('detail-givenumber',['serial'=>$serial]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGivenumberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGivenumberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Givenumber  $givenumber
     * @return \Illuminate\Http\Response
     */
    public function show(Givenumber $givenumber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Givenumber  $givenumber
     * @return \Illuminate\Http\Response
     */
    public function edit(Givenumber $givenumber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGivenumberRequest  $request
     * @param  \App\Models\Givenumber  $givenumber
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGivenumberRequest $request, Givenumber $givenumber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Givenumber  $givenumber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Givenumber $givenumber)
    {
        //
    }
}
