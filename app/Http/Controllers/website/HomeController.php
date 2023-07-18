<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Http\Requests\website\ContactUs\ContactRequest;
use App\Mail\website\ContactUsMail;
use App\Models\Car;
use App\Models\Logo;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //Return Home Page
    public function index()
    {
        $cars = Car::query()->latest()->take(10)->get();
        $makers = Car::query()->select('maker')->distinct()->pluck('maker')->toArray();
        $logos = Logo::query()->whereIn('maker', $makers)->get();

        return view('website.index', compact('cars', 'logos'));
    }

    public function contact_us_send(ContactRequest $request)
    {
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $phone = $request->phone;
        $message = $request->message;
        $email = $request->email;
        Mail::to(Mail)->send(new ContactUsMail($first_name, $last_name, $email, $phone, $message));
        session()->flash('success', 'Your message has been send successfully');

        return redirect()->back();
    }
}
