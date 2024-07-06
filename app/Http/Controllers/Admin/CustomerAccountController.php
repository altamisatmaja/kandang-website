<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerAccountController extends Controller
{
    public function index(){
        $users = User::where('id_user_role', 2)->paginate(10);

        return view('admin.pages.customer.index', compact('users'));
    }

    public function status_handling(Request $request, $id) {
        try {
            $user = User::find($id);

            if(!$user) {
                throw new \Exception("User with ID {$id} not found.");
            }

            $validator = Validator::make($request->all(), [
                'status' => 'required',
            ]);

            if($validator->fails()){
                return redirect()->back()->withErrors($validator);
            }

            $newStatus = $request->status;
            $oldStatus = $user->status;

            $user->status = $newStatus;
            $user->save();

            $message = '';
            if($newStatus == 'Tidak Aktif') {
                $message = 'Data berhasil dinonaktifkan';
            } elseif ($newStatus == 'Aktif' && $oldStatus == 'Tidak Aktif') {
                $message = 'Data berhasil diaktifkan kembali';
            }

            return redirect()->route('admin.customer.account')->with('success', $message);

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: '. $e->getMessage());
        }
    }



}
