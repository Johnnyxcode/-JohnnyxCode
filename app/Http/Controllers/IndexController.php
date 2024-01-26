<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Index;
use App\Mail\JohnnyxCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class IndexController extends Controller
{
    public function Index()
    {
        return view ('index'); 
    }
    
    public function storeForm(Request $request)
    {
        try {
            $validateData = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'subject' => 'required|string',
                'message' => 'required|string',
            ]);
    
            Log::info('Form data received:', $validateData);
    
            // Attempt to create a new record
            Index::create($validateData);
    
            session()->flash('success', 'Form submitted successfully');
    
            return response()->json(['message' => 'Form submitted successfully']);
        } catch (\Exception $e) {
            // Log any exceptions
            Log::error('Exception: ' . $e->getMessage());
    
            // Return a response or redirect as needed
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
    
    

// public function storeForm(Request $request)
// {
//     Log::info('Attempting to store form data.');

//     try {
//         $validateData = $request->validate([
//             'name' => 'required|string',
//             'title' => 'required|string',
//             'email' => 'required|email',
//             'description' => 'required|string',
//         ]);

//         Log::info('Form data validated successfully.');

//         Index::create($validateData);

//         Log::info('Form data stored successfully.');

//         session()->flash('success', 'Form submitted successfully');

//         return response()->json(['message' => 'Form submitted successfully']);
//     } catch (\Exception $e) {
//         Log::error('Error storing form data: ' . $e->getMessage());
//         return response()->json(['message' => 'Error submitting form'], 500);
//     }
// }

}

    // public function Form(Request $request)
    // {
    //     $validateData =
    //     $request->validate([
    //         'name' => 'required|string',
    //         'email' => 'required|email',
    //         'title' => 'required|string',
    //         'description' => 'required|string',

    //     ]);
    //     Index::create($validateData);
    //     return "Record inserted successfully";
    // }

    // public function store(Request $request)
    // {
    //     Mail::to('jonnyjamz150@gmail.com')->send(new JohnnyxCode);

    //     return "Record inserted successfully and email sent.";
    // }
    // }