<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Projects;
use Illuminate\Http\Request;
use Spatie\Newsletter\Newsletter;

/**
 * Class IndexController
 *
 * Basic controller to handle unauthenticated actions.
 */
class IndexController extends Controller
{
    /**
     * Shows the home page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Shows the whitepaper page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function whitepapers()
    {
        return view('whitepapers');
    }

    /**
     * Shows the get started page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getStarted()
    {
        return view('get_started');
    }

    /**
     * Shows the voting page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function voting()
    {
        return view('voting');
    }

    /**
     * Shows the contact page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }

    public function projects()
    {
        return view('projects', [
            'projects' => Projects::orderBy('title', 'ASC')->get()
        ]);
    }

    /**
     * Handles the submit of the contact form.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function contactSubmit(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->getMessageBag()->messages()
            ]);
        }

        $contact = Contact::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'message' => $request->get('message'),
        ]);

        \Mail::send(new \App\Mail\Contact($contact));

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Handles the request to subscribe to the newsletter.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function newsletterSubmit(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->getMessageBag()->messages()
            ]);
        }

        \Newsletter::subscribe($request->get('email'), [
            'firstName' => $request->get('name')
        ], getenv('MAILCHIMP_LIST'));

        return response()->json([
            'success' => true
        ]);
    }
}