<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class ExternalAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleProviderCallback()
    {
        try {
            $socialUser = Socialite::driver('google')->user();

            // ჯერ ვამოწმებთ customers ცხრილში
            $customer = User::where('email', $socialUser->getEmail())->first();

            if ($customer) {
                Auth::guard('customer')->login($customer);

                $externalUser = User::firstOrCreate(
                    ['email' => $socialUser->getEmail()],
                    [
                        'name' => $socialUser->getName(),
                        'email' => $socialUser->getEmail(),
                        'username' => Str::slug($socialUser->getNickname() ?? $socialUser->getName()) . rand(100, 999),
                        'password' => bcrypt(Str::random(16)),
                    ]
                );

                Auth::guard('web')->login($externalUser);
            }

            return redirect()->route('dashboard');

        } catch (\Exception $e) {
            Log::error('Google authentication failed: ' . $e->getMessage());
            return redirect()->route('login')->withErrors([
                'socialite' => 'Google ავთენტიფიკაცია ვერ მოხერხდა. გთხოვთ სცადოთ თავიდან.'
            ]);
        }
    }

    public function callback(Request $request)
    {
        try {
            $user = Socialite::driver('google')->user();

            $customer = User::where('email', $user->email)->first();

            if ($customer) {
                Auth::guard('web')->login($customer);
            } else {
                // თუ არ არის customers-ში, მაშინ external_users-ში
                $externalUser = User::firstOrCreate(
                    ['email' => $user->email],
                    [
                        'name' => $user->name,
                        'password' => bcrypt(Str::random(16)),
                    ]
                );


//                if (Auth::attempt($externalUser)) {
//                    $request->session()->regenerate();
//
//                    return redirect()->intended(route('dashboard')); // ან სადაც გინდა
//                }
                if ($externalUser) {
                    Auth::login($externalUser);
                    $request->session()->regenerate();

                    return redirect()->intended(route('dashboard'));
                }
            }

            return redirect()->route('dashboard');

        } catch (Throwable $e) {
            return redirect('/')->with('error', 'Google authentication failed.');
        }
    }

    public function HandleTiktok(Request $request){
        return Socialite::driver('tiktok')->redirect();

    }

    public function tiktokCallBack(Request $request){
        $tiktokUser = Socialite::driver('tiktok')->user();

        $user = User::firstOrCreate([
            'tiktok_id' => $tiktokUser->getId(),
        ], [
            'email' => $tiktokUser->getEmail() ?? $tiktokUser->getId() . '@tiktok.fake',
            'name' => $tiktokUser->getName() ?? 'TikTok User',
            'password' => bcrypt(Str::random(24)),
            'avatar' => $tiktokUser->getAvatar(),
        ]);

//        $user = \App\Models\User::firstOrCreate([
//            'email' => $tiktokUser->email ?? $tiktokUser->getId().'@tiktok.fake', // fallback თუ email არ აქვს
//        ], [
//            'name' => $tiktokUser->getName(),
//            'tiktok_id' => $tiktokUser->getId(),
//            'password' => bcrypt(Str::random(24)), // შემთხვევითი პაროლი
//        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }

}
