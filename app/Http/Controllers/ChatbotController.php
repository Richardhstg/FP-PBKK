<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;

class ChatbotController extends Controller
{
    public function handleChat(Request $request)
    {
        $message = $request->input('message');

        try {
            $result = Gemini::geminiPro()->generateContent($message);

            // Ambil teks dari respons
            $reply = $result->text();

            return response()->json(['reply' => $reply]);
        } catch (\Exception $e) {
            // Tampilkan pesan error jika ada masalah
            return response()->json(['reply' => 'Maaf, ada kesalahan dalam memproses pesan Anda.'], 500);
        }
    }
}
