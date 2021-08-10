<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Service;
use App\Models\User;
use App\Models\Organization;
use App\Models\Vacancies;
use App\Models\Contact;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $home = Home::find(1);
        $service = Service::find(1);
        $organization = Organization::find(1);
        $vacancie = Vacancies::find(1);
        $contact = Contact::find(1);
        return view('admin', ['home' => $home, 'service' => $service, 'organization' => $organization, 'vacancie' => $vacancie, 'contact' => $contact]);
    }
    public function update_home(Request $request)
    {
        $home = Home::find(1);
        $home->name_cover = $request->name_cover;
        $home->description_cover = $request->description_cover;
        $home->name_section1 = $request->name_section1;
        $home->description_section1 = $request->description_section1;
        $home->name_section2 = $request->name_section2;
        $home->description_section2 = $request->description_section2;
        $home->client_review_desc = $request->client_review_desc;
        $home->description_footer = $request->description_footer;
        $home->save();
        return redirect()->back();
    }
    public function update_service(Request $request)
    {
        $service = Service::find(1);
        $service->name_cover = $request->name_cover;
        $service->description_cover = $request->description_cover;
        $service->name_section1 = $request->name_section1;
        $service->description_section1 = $request->description_section1;
        $service->name_section2 = $request->name_section2;
        $service->description_section2 = $request->description_section2;
        $service->name_section3 = $request->name_section3;
        $service->description_section3 = $request->description_section3;

        $service->name_section4 = $request->name_section4;
        $service->description_section4 = $request->description_section4;
        $service->name_section5 = $request->name_section5;
        $service->description_section5 = $request->description_section5;

        $service->name_section6 = $request->name_section6;
        $service->description_section6 = $request->description_section6;

        $service->description_footer = $request->description_footer;
        $service->save();
        return redirect()->back();
    }
    public function update_organization(Request $request)
    {
        $organization = Organization::find(1);
        $organization->name_cover = $request->name_cover;
        $organization->description_cover = $request->description_cover;
        $organization->name_section1 = $request->name_section1;
        $organization->description_section1 = $request->description_section1;
        $organization->name_section2 = $request->name_section2;
        $organization->description_section2 = $request->description_section2;
        $organization->name_section3 = $request->name_section3;
        $organization->description_section3 = $request->description_section3;


        $organization->description_footer = $request->description_footer;
        $organization->save();
        return redirect()->back();
    }

    public function update_vacancies(Request $request)
    {
        $vacancie = Vacancies::find(1);
        $vacancie->name_cover = $request->name_cover;
        $vacancie->description_cover = $request->description_cover;
        $vacancie->name_section1 = $request->name_section1;
        $vacancie->description_section1 = $request->description_section1;



        $vacancie->description_footer = $request->description_footer;
        $vacancie->save();
        return redirect()->back();
    }
    public function update_contact(Request $request)
    {
        $contact = Contact::find(1);
        $contact->name_cover = $request->name_cover;
        $contact->description_cover = $request->description_cover;
        $contact->adresse = $request->adresse;
        $contact->numero = $request->numero;
        $contact->email = $request->email;



        $contact->description_footer = $request->description_footer;
        $contact->save();
        return redirect()->back();
    }
}
