<?php

namespace App\Http\Controllers;

use App\Models\Subscribers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Faker\Factory as Faker;


class SubscriberController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function subscribe()
    {
        return view('subscribe');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',//email:rfc,dns
            'password' => 'required'
        ]);

        $subscriber = new Subscribers;
        $subscriber->first_name = $request->firstName;
        $subscriber->last_name = $request->lastName;
        $subscriber->email = $request->email;
        $subscriber->password = $request->password;
        $subscriber->notif_event = $request->has('notifEvent') ? true : false;
        $subscriber->notif_custom = $request->has('notifCustom') ? true : false;
        $subscriber->notif_suggest = $request->has('notifSuggest') ? true : false;

        $subscriber->save();
        $id = $subscriber->id;
        return redirect(route('dashboard', ['id' => $id]))->with('successMsg', 'Registration Successful!');
    }

    public function edit($id)
    {
        $subscriber = Subscribers::find($id);
        return view('edit', compact('subscriber'));
    }

    public function update(Request $request, $id)
    {
        if ($request->has('cancel')) {
            return redirect()->back();
        }

        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i'//email:rfc,dns
        ]);
        $subscriber = Subscribers::find($id);

        if ($subscriber) {
            $subscriber->first_name = $request->firstName;
            $subscriber->last_name = $request->lastName;
            $subscriber->email = $request->email;
            $subscriber->notif_event = $request->has('notifEvent') ? true : false;
            $subscriber->notif_custom = $request->has('notifCustom') ? true : false;
            $subscriber->notif_suggest = $request->has('notifSuggest') ? true : false;

            $subscriber->save();
            return redirect(route('dashboard', ['id' => $id]))->with('successMsg', 'Update Successful!');
        } else {
            return redirect()->back()->with('errorMsg', 'Subscriber not found.');
        }
    }


    public function delete($id)
    {
        $subscriber = Subscribers::find($id);
        if (!$subscriber) {
            return redirect(route('home'))->with('errorMsg', 'User not found');
        }

        $subscriber->delete();

        return redirect(route('home'))->with('successMsg', 'Account Deleted');
    }

    public function dashboard($id)
    {
        $subscriber = Subscribers::find($id);
        if (!$subscriber) {
            return redirect(route('home'))->with('errorMsg', 'User not found');
        }

        return view('dashboard', ['user' => $subscriber]);
    }

    public function localDateTime($id)
    {
        $subscriber = Subscribers::find($id);

        $localDateTime = Carbon::now()->format('F j, Y H:i');

        return view('dashboard', ['user' => $subscriber, 'localDateTime' => $localDateTime]);
    }

    public function admin()
    {
        $subscribers = Subscribers::simplePaginate(10);
        return view('admin', compact('subscribers'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $searchCols = ['id', 'first_name', 'last_name', 'email', 'notif_event', 'notif_custom', 'notif_suggest', 'created_at', 'updated_at'];
        $subscribers = Subscribers::where(function ($queryBuilder) use ($query, $searchCols) {
            foreach ($searchCols as $column) {
                $queryBuilder->orWhere($column, 'LIKE', '%' . $query . '%');
            }
        })->simplePaginate(10);
        return view('admin', compact('subscribers'));
    }

    public function fillSubForm()
    {
        $faker = Faker::create();

        $fakeData = [
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'email' => $faker->email,
            'password' => $faker->password,
            'notifEvent' => $faker->boolean,
            'notifCustom' => $faker->boolean,
            'notifSuggest' => $faker->boolean
        ];

        return view('subscribeFaker', ['fakeData' => $fakeData]);
    }
}
