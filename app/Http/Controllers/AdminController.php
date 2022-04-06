<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Reservation;
use App\Models\Order;


class AdminController extends Controller
{
    public function user()
    {
        if (Auth::id()) {
            $data = User::all();
            return view("admin.users", compact('data'));
        } else {
            return redirect("login");
        }
    }


    public function deleteuser($id)
    {
        if (Auth::id()) {
            $data = User::find($id);
            $data->delete();
            return redirect()->back();
        } else {
            return redirect("login");
        }
    }

    public function deletemenu($id)
    {
        if (Auth::id()) {
            $data = Food::find($id);
            $data->delete();
            return redirect()->back();
        } else {
            return redirect("login");
        }
    }

    public function updateview($id)
    {
        if (Auth::id()) {
            $data = Food::find($id);
            return view('admin.updateview', compact('data'));
        } else {
            return redirect("login");
        }
    }


    public function update($id, Request $request)
    {
        if (Auth::id()) {
            $data = Food::find($id);
            $image = $request->image;

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('foodimage', $imagename);

            $data->image = $imagename;
            $data->title = $request->title;
            $data->price = $request->price;
            $data->description = $request->description;

            $data->save();

            return redirect()->back();
        } else {
            return redirect("login");
        }
    }

    public function foodmenu()
    {
        if (Auth::id()) {
            $data = Food::all();
            return view('admin.foodmenu', compact('data'));
        } else {
            return redirect("login");
        }
    }

    public function upload(Request $request)
    {
        if (Auth::id()) {
            $data = new food;
            $image = $request->image;

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('foodimage', $imagename);

            $data->image = $imagename;
            $data->title = $request->title;
            $data->price = $request->price;
            $data->description = $request->description;

            $data->save();

            return redirect()->back();
        } else {
            return redirect("login");
        }
    }

    public function reservation(Request $request)
    {
        if (Auth::id()) {
            $data = new Reservation();

            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->guest = $request->guest;
            $data->date = $request->date;
            $data->time = $request->time;
            $data->message = $request->message;

            $data->save();

            return redirect()->back();
        } else {
            return redirect("login");
        }
    }

    public function viewreservation()
    {
        if (Auth::id()) {
            $data = Reservation::all();
            return view("admin.adminreservation", compact('data'));
        } else {
            return redirect("login");
        }
    }

    public function viewchef()
    {
        if (Auth::id()) {
            $data = Foodchef::all();
            return view("admin.adminchef", compact('data'));
        } else {
            return redirect("login");
        }
    }

    public function uploadchef(Request $request)
    {
        if (Auth::id()) {
            $data = new Foodchef();
            $image = $request->image;

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('chefimage', $imagename);

            $data->image = $imagename;

            $data->name = $request->name;
            $data->speciality = $request->speciality;

            $data->save();

            return redirect()->back();
        } else {
            return redirect("login");
        }
    }

    public function updatechef($id)
    {
        if (Auth::id()) {
            $data = new Foodchef();
            $data = Foodchef::find($id);
            return view('admin.updatechef', compact('data'));
        } else {
            return redirect("login");
        }
    }


    public function updatefoodchef(Request $request, $id)
    {
        if (Auth::id()) {
            $data = Foodchef::find($id);

            $image = $request->image;

            if ($image) {
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $request->image->move('chefimage', $imagename);
                $data->image = $imagename;
            }

            $data->name = $request->name;
            $data->speciality = $request->speciality;

            $data->save();
            return redirect()->back();
        } else {
            return redirect("login");
        }
    }

    public function deletechef($id)
    {
        if (Auth::id()) {
            $data = Foodchef::find($id);
            $data->delete();
            return redirect()->back();
        } else {
            return redirect("login");
        }
    }

    public function orders()
    {
        if (Auth::id()) {
            $data = Order::all();

            return view('admin.orders', compact('data'));
        } else {
            return redirect("login");
        }
    }

    public function search(Request $request)
    {
        if (Auth::id()) {
            $search = $request->search;

            $data = Order::where('name', 'Like', '%' . $search . '%')->orWhere('foodname', 'Like', '%' . $search . '%')->get();

            return view('admin.orders', compact('data'));
        } else {
            return redirect("login");
        }
    }
}
