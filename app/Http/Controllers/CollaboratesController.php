<?php

namespace App\Http\Controllers;

use App\Models\Collaborates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CollaboratesController extends Controller
{
    public function adminDashboard()
    {
        return view('AdminPanel.dashboard');
    }
    public function adminLogout()
    {
        Auth::logout();
        return redirect('admin/login');
    }
    public function createCollaborator()
    {
        return view('AdminPanel.collaborators.create');
    }
    public function collaboratorCreated(Request $request)
    {
        $image = $request->file('image');
        $fileExtension = $image->getClientOriginalExtension();
        $fileName = (Str::uuid() . '.' . $fileExtension);
        $image->storeAs('public/Uploads/Collaborators', $fileName);
        $user = Collaborates::create([
            'name' => $request->name,
            'role' => $request->role,
            'des' => $request->des,
            'image' => $fileName,

        ]);
        return redirect('admin/collaborators-list');
    }
    public function collaboratorsList()
    {
        $collaborators = Collaborates::all();
        // dd($collaborators);
        return view('AdminPanel.collaborators.list', compact('collaborators'));
    }
    public function updateCollaborator($id)
    {
        $collaborator = Collaborates::find($id);
        // dd($collaborator);
        return view('AdminPanel.collaborators.update', compact('collaborator'));
    }
    public function collaboratorUpdated(Request $request)
    {
        $collaborator = Collaborates::find($request->collaborator_id);
        
        // dd('public/Uploads/Collaborators/'.$collaborator->image);
        if ($request->file('image')) {
            Storage::delete('public/Uploads/Collaborators/'.$collaborator->image);
            $extension = $request->file('image')->getClientOriginalExtension();
            $image = Str::uuid() . '.' . $extension;
            $request->file('image')->storeAs('public/Uploads/Collaborators', $image);
        }else{
            $image =$collaborator->image;
        }
        $collaborator->update([
            'name' => $request->name,
            'des' => $request->des,
            'role' => $request->role,
            'image' => $image,
        ]);
        return redirect('admin/collaborators-list');
    }
    public function collaboratorDeleted($id)
    {
        Collaborates::destroy($id);
        return redirect()->back();
    }
}
