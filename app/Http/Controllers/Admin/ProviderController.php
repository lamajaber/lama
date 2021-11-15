<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\provider;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;
class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->q;
        $gender = $request->gender;

        $query = provider::whereRaw('true');

       
        if($q){
            $query->whereRaw('(fullname like ?)',["%$q%"]);
        }


        $providers = $query->paginate(7)
        ->appends([
            'q'     =>$q,
           
        ]);

        return view("admin.provider.index",compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provider = provider::all();
      
        return view("admin.provider.create",compact('provider'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = $request->image->store("public/assets/img/providers");
        $imageName = $request->image->hashName();

        $requestData = $request->all();
        $requestData['image'] = $imageName;
        $requestData['password'] = bcrypt($requestData['password']);
        $userData=$requestData;
        $userData['name']=$requestData['fullname'];
        $userData['status']=1;

        //insert on users table
        $user=user::create($userData);
        $lastUserId=$user->id;
        $user->assignRole('provider services');

        //insert on patient table
        $providerData = $requestData;
        $providerData['user_id'] = $lastUserId;
        provider::create($providerData);

        Session::flash("msg","s: تمت الإضافة بنجاح");
        return redirect(route("providers.index"));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
}