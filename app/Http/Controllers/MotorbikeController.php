<?php

namespace App\Http\Controllers;

use App\Http\Requests\MotorbikeRequest;
use App\Motorbike;
use App\User;

class MotorbikeController extends Controller
{
    public function pubMotorbikeIndex()
    {
        $motorbikes = Motorbike::with('admin')->orderBy('id', 'desc')->paginate(5);
        return view('v1.public.pages.motorbike-index', compact('motorbikes'));
    }

    public function pubMotorbikeShow($model)
    {
        $motorbike = Motorbike::where('model', $model)->orderBy('id', 'desc')->first();
        return view('v1.public.pages.motorbike-show', compact('motorbike'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motorbikes = Motorbike::with('admin')->orderBy('id', 'desc')->paginate(5);
        return view('v1.admin-panel.pages.motorbike-index', compact('motorbikes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('v1.admin-panel.pages.motorbike-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MotorbikeRequest $request)
    {
        $admin = User::findOrFail(100);
        try{
            $motorbike = Motorbike::create([
                'model' => $request->get('model'),
                'color' => $request->get('color'),
                'weight' => $request->get('weight'),
                'price' => $request->get('price'),
                'admin_id' => $admin->id,
            ]);
            session()->flash('msg', ['notification' => 'موتورسیکلت جدید با موفقیت درج شد', 'notification_type'=>'success']);
        return $motorbike;
                return redirect()->route('pubmotorbike.show', ['model' => $motorbike->model]);

        }catch(\Exception $e){
            session()->flash('msg', ['notification' => 'بروز خطا در اجرای عملیات. لطفا مجددا سعی کنید', 'notification_type'=>'error']);
            return redirect()->back();
        }
    }

}
