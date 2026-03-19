<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAllianceMemberRequest;
use App\Mail\AllianceMemberSubmitted;
use App\Models\AllianceMember;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Throwable;

class HomeController extends Controller
{
    /**
     * Show the home page.
     */
    public function index(): View
    {
        return view('home');
    }

    public function contact(): View
    {
        return view('contact');
    }

    public function contact_form(StoreAllianceMemberRequest $request): JsonResponse
    {
        try {
            $validated = $request->validated();

            $allianceMember = AllianceMember::create([
                'full_name' => $validated['full_name'],
                'phone' => $validated['phone'],
                'email' => $validated['email'],
                'country' => $validated['country'],
                'role' => $validated['role'],
                'message' => $validated['message'] ?? null,
                'source_page' => $validated['source_page'] ?? 'contact',
                'source_section' => $validated['source_section'] ?? 'contact-form',
                'source_button' => $validated['source_button'] ?? 'Direct contact form',
                'source_program_slug' => $validated['source_program_slug'] ?? null,
                'source_program_title' => $validated['source_program_title'] ?? null,
                'source_url' => $validated['source_url'] ?? $request->fullUrl(),
                'referrer_url' => $validated['referrer_url'] ?? $request->headers->get('referer'),
            ]);

            Mail::to(config('mail.lead_notification_to'))->send(new AllianceMemberSubmitted($allianceMember));

            return response()->json([
                'success' => true,
                'message' => 'Successfully joined the alliance!',
            ]);
        } catch (Throwable $throwable) {
            Log::error('Alliance form submission failed.', [
                'error' => $throwable->getMessage(),
                'exception' => get_class($throwable),
                'source_page' => $request->input('source_page'),
                'source_section' => $request->input('source_section'),
                'source_button' => $request->input('source_button'),
                'source_program_slug' => $request->input('source_program_slug'),
                'email' => $request->input('email'),
                'full_name' => $request->input('full_name'),
                'request_url' => $request->fullUrl(),
                'referrer' => $request->headers->get('referer'),
                'trace' => $throwable->getTraceAsString(),
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Submission failed. Please check storage/logs/laravel.log for the error details.',
                'debug_message' => app()->hasDebugModeEnabled() ? $throwable->getMessage() : null,
            ], 500);
        }
    }
}
