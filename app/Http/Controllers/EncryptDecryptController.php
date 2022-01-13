<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EncryptDecryptController extends Controller
{
    
    public function encryptText(Request $request)
    {
        $text = $request->encrypt_text;
        $encrypted = Crypt::encryptString($request->encrypt_text);
        return view('encrypted_result', compact('encrypted', 'text'));
    }
    public function decryptText(Request $request){
        $encrypted = $request->decrypt_text;
        $decrypted = Crypt::decryptString($encrypted);
        return view('decrypted_result', compact('encrypted', 'decrypted'));
    }

}
