<?php

namespace App\Http\Controllers;

use App\Mail\RentalRequestMail;
use App\Models\Rental;
use Illuminate\Http\Request;
use App\Notifications\TelegramNotification;
use Illuminate\Support\Facades\Notification;

class RentalController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'car_name' => 'required|string',
            'base_price' => 'required|numeric',
            'period' => 'required|integer', 
            'services' => 'nullable|json',
            'pickup_location' => 'required|string',
            'pickup_date' => 'required|date',
            'pickup_time' => 'required|date_format:H:i',
            'return_location' => 'required|string',
            'return_date' => 'required|date',
            'return_time' => 'required|date_format:H:i',
            'customer_type' => 'required|string',
            'customer_first_name' => 'required|string',
            'customer_last_name' => 'required|string',
            'customer_email' => 'required|email',
            'customer_phone' => 'required|string',
        ]);

        Rental::create($validatedData);

        $text = [
            'car' => 'Машина: ' . $validatedData['car_name'],
            'base_price' => 'Базовая цена: ' .  $validatedData['base_price'] . ' тенге',
            'period' => 'Период: ' . $validatedData['period'] . ' дней',
            'pickup_location' => 'Место и время получения: ' . $validatedData['pickup_location'] . ' ' . $validatedData['pickup_date'] . ' ' . $validatedData['pickup_time'],
            'return_location' => 'Место и время возврата: ' . $validatedData['return_location'] . ' ' . $validatedData['return_date'] . ' ' . $validatedData['return_time'],
            'customer_type' => 'Тип: ' . ($validatedData['customer_type'] === 'fiz' ? 'физическое лицо' : 'юридическое лицо'),
            'customer_full_name' => 'ФИО: ' . $validatedData['customer_first_name'] . ' ' . $validatedData['customer_last_name'],
            'customer_email' => 'Почта: ' . $validatedData['customer_email'],
            'customer_phone' => 'Номер: ' . $validatedData['customer_phone'],
        ];

        Notification::send([$text], new TelegramNotification($text));

        return 'success. Post created successfully.';
    }

}
