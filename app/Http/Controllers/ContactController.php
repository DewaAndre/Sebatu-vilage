<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'nama_depan' => 'required|string|max:100',
            'nama_belakang' => 'required|string|max:100',
            'email' => 'required|email',
            'subjek' => 'required|string|max:150',
            'pesan' => 'required|string',
        ]);

        try {
            Mail::send('emails.contact', $data, function ($mail) use ($data) {
                $mail->to('andreariandika20@gmail.com') // EMAIL TUJUAN
                     ->subject($data['subjek'])
                     ->replyTo($data['email'], $data['nama_depan']);
            });

            // ✅ Redirect ke HOME setelah berhasil
            return redirect('/')
                ->with('success', 'Pesan berhasil dikirim!');

        } catch (\Exception $e) {

            // ❌ Jika gagal kirim email
            return back()
                ->with('error', 'Gagal mengirim pesan. Silakan coba lagi.');
        }
    }
}
