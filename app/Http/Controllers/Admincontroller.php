<?php

namespace App\Http\Controllers;

use App\Models\Aedconverted;
use App\Models\Credit;
use App\Models\Pkrconverted;
use App\Models\Pkrcredit;
use App\Models\Price;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function dashboard()
    {
        $aedprice = Price::where('name','=', 'AED')->first();
        $pkrprice = Price::where('name','=', 'PKR')->first();
        return view('dashboard', ['aedprice'=>$aedprice, 'pkrprice'=>$pkrprice]);
    }


    public function addnewrecord()
    {
        return view("admin.addnewrecord");
    }

    public function addnewrecord_db(Request $request)
    {
        $request->validate([
            'send_name' => 'required|min:3|max:30',
            'send_phone' => 'required|min:4|max:20',
            'rec_name' => 'required|min:3|max:30',
            'rec_phone' => 'required|min:4|max:20',
            'city' => 'required|min:2|max:30',
            'aed_amount' => 'required',
            'ser_chrg' => 'required',
        ]);


        $data = new Aedconverted;
        $data->sender_name = $request->get('send_name');
        $data->sender_phone = $request->get('send_phone');
        $data->reciever_name = $request->get('rec_name');
        $data->reciever_phone = $request->get('rec_phone');
        $data->city = $request->get('city');
        $data->aed_amount = $request->get('aed_amount');
        $data->credit_amount = $request->get('credit_amount');
        $data->aed_rate = $request->get('aed_rate');
        $data->service_charge = $request->get('ser_chrg');
        $data->net_amount =  $request->get('aed_amount') - $request->get('ser_chrg');
        $data->amount = 0;
        $data->pkr_convert_total = (($request->get('aed_amount') - $request->get('ser_chrg')) * $request->get('aed_rate'));
        if($request->get('credit_amount')>0)
        {
            $data->save();
            $data1 = new Credit;
            $data1->sender_name = $request->get('send_name');
            $data1->reciver_name = $request->get('rec_name');
            $data1->sended_amount = $request->get('aed_amount');
            $data1->credit_amount = $request->get('credit_amount');
            $data1->reciver_phone = $request->get('send_phone');

            $data1->save();
            return  back()->with('success', 'Data Enter successfully!');
        }
        else
        {
            return  back()->with('fail', 'Data Enter failed!');
        }
    }

    public function aed_to_pkr()
    {
        $data = Aedconverted::all();

        return view("admin.aedtopkr", ['data'=>$data]);
    }

    public function deleteaedtopkrecord($id)
    {
        $res=Aedconverted::where('id', '=', $id)->delete();
        if ($res)
        {
            return back()->with('success', 'Record Deleted successfully!');
        }
        else
        {
            return back()->with('fail', 'Record cannot be deleted!');
        }
    }

    function creditbook()
    {
        $credit = Credit::all();
        return view('admin.credit_aed_pkr', ['credit'=>$credit]);
    }

    public function editaedtopkcredit(Request $request)
    {
        $data = Credit::where('id', '=',$request->get('credit_id'))->first();
        return view('admin.updatecredit', ['data'=>$data]);
    }

    public function editaedtopkcreditdb(Request $request)
    {
        // send_id
        // pre_amount
        // paid_amount
        $data = Credit::where('id', '=', $request->get('send_id'))->first();
        $data->credit_amount = ($request->get('pre_amount')-$request->get('paid_amount'));
        $data->update();
        $check_data = new Credit;
        $data1 = Credit::where('id', '=', $request->get('send_id'))->first();
        if($data1->credit_amount<=0)
        {
            $res=Credit::where('id', '=', $request->get('send_id'))->delete();
            return redirect('/creditbook')->with('success', 'The credit is 0, so deleted from credit-book');
        }
        else
        {
            return redirect('/creditbook')->with('success', "Now yor can check the remaining amount");
        }
    }


    // let strat new one
    public function addpkrnewrecord()
    {
        return view("admin.addpkrnewrecord");
    }

    public function addpkrnewrecorddb(Request $request)
    {
        $request->validate([
            'send_name' => 'required|min:3|max:30',
            'send_phone' => 'required|min:4|max:20',
            'rec_name' => 'required|min:3|max:30',
            'rec_phone' => 'required|min:4|max:20',
            'city' => 'required|min:2|max:30',
            'pkr_amount' => 'required',
            'ser_chrg' => 'required',
            'pkr_rate' => 'required',
        ]);


        $data = new Pkrconverted;
        $data->sender_name = $request->get('send_name');
        $data->sender_phone = $request->get('send_phone');
        $data->reciever_name = $request->get('rec_name');
        $data->reciever_phone = $request->get('rec_phone');
        $data->city = $request->get('city');
        $data->pkr_amount = $request->get('pkr_amount');
        $data->credit_amount = $request->get('credit_amount');
        $data->pkr_rate = $request->get('pkr_rate');
        $data->service_charge = $request->get('ser_chrg');
        $data->net_amount =  $request->get('pkr_amount') - $request->get('ser_chrg');
        $data->amount = 0;
        $data->aed_convert_total = (($request->get('pkr_amount') - $request->get('ser_chrg')) * $request->get('pkr_rate'));
        if($request->get('credit_amount')>0)
        {
            $data->save();
            $data1 = new Pkrcredit;
            $data1->sender_name = $request->get('send_name');
            $data1->reciver_name = $request->get('rec_name');
            $data1->sended_amount = $request->get('pkr_amount');
            $data1->credit_amount = $request->get('credit_amount');
            $data1->sender_phone = $request->get('send_phone');

            $data1->save();
            return  back()->with('success', 'Data Enter successfully!');
        }
        else
        {
            return  back()->with('fail', 'Data Enter failed!');
        }
    }

    public function pkr_to_aed()
    {
        $data = Pkrconverted::all();

        return view("admin.pkrtoaed", ['data'=>$data]);
    }

    function pkrcreditbook()
    {
        $credit = Pkrcredit::all();
        return view('admin.credit_pkr_aed', ['credit'=>$credit]);
    }

    public function editpkrtoaedcredit(Request $request)
    {
        $data = Pkrcredit::where('id', '=',$request->get('credit_id'))->first();
        return view('admin.updatepkrcredit', ['data'=>$data]);
    }

    public function editpkrtoaedcreditdb(Request $request)
    {
        // send_id
        // pre_amount
        // paid_amount
        $data = Pkrcredit::where('id', '=', $request->get('send_id'))->first();
        $data->credit_amount = ($request->get('pre_amount')-$request->get('paid_amount'));
        $data->update();
        $check_data = new Credit;
        $data1 = Credit::where('id', '=', $request->get('send_id'))->first();
        if($data1->credit_amount<=0)
        {
            $res=Credit::where('id', '=', $request->get('send_id'))->delete();
            return redirect('/pkrcreditbook')->with('success', 'The credit is 0, so deleted from credit-book');
        }
        else
        {
            return redirect('/pkrcreditbook')->with('success', "Now yor can check the remaining amount");
        }
    }












}
