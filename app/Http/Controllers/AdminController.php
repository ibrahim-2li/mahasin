<?php

namespace App\Http\Controllers;

use App\Models\SiteContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $sections = ['hero', 'about', 'services', 'contact'];
        $contents = [];
        
        foreach ($sections as $section) {
            $contents[$section] = SiteContent::where('section', $section)->get()->pluck('value', 'key')->toArray();
        }
        
        return view('admin.dashboard', compact('contents'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'section' => 'required|string',
            'key' => 'required|string',
            'value' => 'required|string',
        ]);

        SiteContent::set($request->section, $request->key, $request->value);

        return response()->json(['success' => true, 'message' => 'تم التحديث بنجاح']);
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'section' => 'required|string',
            'key' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = $image->move(public_path('images'), $filename);
            
            $imagePath = '/images/' . $filename;
            
            SiteContent::set($request->section, $request->key, $imagePath);

            return response()->json([
                'success' => true,
                'message' => 'تم رفع الصورة بنجاح',
                'path' => $imagePath
            ]);
        }

        return response()->json(['success' => false, 'message' => 'فشل رفع الصورة'], 400);
    }

    // Send Message (Public)
    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        \App\Models\Message::create($validated);

        return response()->json(['success' => true, 'message' => 'تم إرسال رسالتك بنجاح، سنتواصل معك قريباً.']);
    }

    // Get Messages (Admin)
    public function getMessages()
    {
        $messages = \App\Models\Message::latest()->get();
        return response()->json($messages);
    }

    // Mark Message as Read (Admin)
    public function markAsRead($id)
    {
        $message = \App\Models\Message::findOrFail($id);
        $message->update(['is_read' => true]);
        return response()->json(['success' => true]);
    }

    // Delete Message (Admin)
    public function deleteMessage($id)
    {
        $message = \App\Models\Message::findOrFail($id);
        $message->delete();
        return response()->json(['success' => true]);
    }

    // Get Branches (Admin & Public)
    public function getBranches()
    {
        $branches = \App\Models\Branch::latest()->get();
        return response()->json($branches);
    }

    // Store Branch (Admin)
    public function storeBranch(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'map_url' => 'required|url',
        ]);

        \App\Models\Branch::create($validated);

        return response()->json(['success' => true, 'message' => 'تم إضافة الفرع بنجاح']);
    }

    // Delete Branch (Admin)
    public function deleteBranch($id)
    {
        $branch = \App\Models\Branch::findOrFail($id);
        $branch->delete();
        return response()->json(['success' => true]);
    }
}
