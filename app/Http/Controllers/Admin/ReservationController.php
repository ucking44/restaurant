<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\ReservationConfirmed;
use App\Reservation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Notification;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::paginate(3);
        return view('admin.reservation.index', compact('reservations'));
    }

    public function status($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->status = true;
        $reservation->save();

        Notification::route('email', $reservation->email)
            ->notify(new ReservationConfirmed());

        Toastr::success('Reservation has been successfully confirmed !', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function destroy($id)
    {
        Reservation::findOrFail($id)->delete();

        Toastr::success('Reservation has been successfully deleted !', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
