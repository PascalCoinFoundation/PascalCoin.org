<?php

namespace App\Http\Controllers;

use App\Extend\ParsedownExt;
use App\GetStartedContent;
use App\HomeBox;
use App\HowToMineContent;
use App\News;
use App\Contact;
use App\FaqGroup;
use App\Http\Requests\ContactRequest;
use App\Page;
use App\Press;
use App\Projects;
use App\WhitePaperContent;
use Illuminate\Http\Request;
use Spatie\Newsletter\Newsletter;
use TCG\Voyager\Models\Menu;

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
    public function home(Request $request)
    {
        $faqGroups = FaqGroup::where('published', true)
            ->orderBy('position', 'ASC')
            ->with('faq_entries')
            ->get();

        $news = News::where('published', true)
            ->orderBy('pub_date', 'DESC')
            ->paginate(3);

        $boxes = HomeBox::where('published', true)
            ->orderBy('position', 'ASC')
            ->get();

        return view('home', [
            'faq' => $faqGroups,
            'news' => $news,
            'boxes' => $boxes
        ]);
    }

    /**
     * Shows the whitepaper page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function whitepapers()
    {
        $contents = WhitePaperContent::where('published', true)
            ->orderBy('position', 'ASC')
            ->get();

        return view('whitepapers', [
            'contents' => $contents
        ]);
    }

    /**
     * Shows the whitepaper page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function howToMine()
    {
        $contents = HowToMineContent::where('published', true)
            ->orderBy('position', 'ASC')
            ->get();

        return view('how_to_mine', [
            'contents' => $contents
        ]);
    }

    /**
     * Shows the get started page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getStarted()
    {
        $contents = GetStartedContent::where('published', true)
            ->orderBy('position', 'ASC')
            ->get();

        return view('get_started', [
            'contents' => $contents
        ]);
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

    /**
     * Displays the list of projects.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function projects()
    {
        return view('projects', [
            'projects' => Projects::orderBy('title', 'ASC')->get()
        ]);
    }

    /**
     * Displays a single project.
     *
     * @param Projects $project
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function project(Projects $project)
    {
        return view('project', [
            'project' => $project,
            'markdown' =>  ParsedownExt::instance()->parse($project->description)
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
            'g-recaptcha-response' => 'required|captcha'
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

        \Mail::to(getenv('MAIL_CONTACT_TO'))->send(new \App\Mail\Contact($contact));

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

        \App\Newsletter::create([
            'email' => $request->get('email')
        ]);

        \Newsletter::subscribe($request->get('email'), [], getenv('MAILCHIMP_LIST'));

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Delegates the request to the first submenu item.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function development()
    {
        return redirect()->route('exchange');
    }

    /**
     * Shows a list of all PIPs.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pips()
    {
        $pips = include storage_path('app/PIP/database.php');
        return view('pips', ['pips' => array_reverse($pips)]);
    }

    /**
     * Shows a single PIP.
     *
     * @param Request $request
     * @param int $pip
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pip(Request $request, int $pip)
    {
        $pips = include storage_path('app/PIP/database.php');
        $pipData = [];
        $pipText = '';
        foreach($pips as $pipItem)
        {
            if($pipItem['pip_no'] !== $pip) {
                continue;
            }
            $pipData = $pipItem;
            $pipText = ParsedownExt::instance()->parse(\Storage::get('PIP/' . $pipData['pip'] . '.md'));

            // rewrite resource links
            $pipText = str_replace('resources/PIP-', asset('storage/PIP/resources/PIP-'), $pipText);

            break;
        }

        if(count($pipData) === 0) {
            // TODO: 404
            exit;
        }

        return view('pip', [
            'pip' => $pipText,
            'pipData' => $pipData
        ]);
    }

    /**
     * Display the JSON RPC api documentation.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function rpc(Request $request)
    {
        $rpc = ParsedownExt::instance()->parse(\Storage::get('RPC.md'));
        return view('rpc', ['rpc' => $rpc]);
    }

    /**
     * Display the exchange integration guide.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function exchange(Request $request)
    {
        $exchange = ParsedownExt::instance()->parse(\Storage::get('exchange.md'));
        return view('exchange', ['exchange' => $exchange]);
    }

    /**
     * Displays the external press releases.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function press(Request $request)
    {
        $pressNews = Press::where('published', true)
            ->orderBy('pub_date', 'DESC')
            ->get();
        return view('press', ['news' => $pressNews]);
    }

    /**
     * Displays a dynamic content page.
     *
     * @param Request $request
     * @param string $page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function content(Request $request, string $page)
    {
        $content = Page::where('menu_ident', $page)->where('published', true)->first();
        return view('content', ['content' => $content]);
    }

    public function fundingTransparency()
    {
        return view('funding_transparency');
    }
}