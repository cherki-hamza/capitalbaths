<?php

namespace App\Http\Controllers\frontend;

use App\Brand;
use App\Colection;
use App\Color;
use App\Contact;
use App\Http\Controllers\Controller;
use App\Instagram;
use App\Mail\ContactEmail;
use App\Models\About;
use App\Product;
use App\Productcategory;
use App\Productsubcategory;
use App\Project;
use App\Review;
use App\Service;
use App\Showroom;
use App\Slider;
use App\Subproject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{

    // method for home page
    public function index(){
        $slider_data = Slider::with('translations')->first();
        $categories = Productcategory::with('translations')->get();
        $colections = Colection::with('translations')->get();
        $reviews = Review::with('translations')->get();
        $instagrams = Instagram::with('translations')->get();
        return view('bathrooms' , compact('slider_data','categories','colections','reviews','instagrams'));
    }

     // method for about page
     public function about(){
        $about_data = About::with('translations')->firstOrFail();
        return view('frontend.site.pages.about' , compact('about_data'));
    }

    // method for services page
    public function services(){
        $service = Service::with('translations')->first();
        return view('frontend.site.pages.services',compact('service'));
    }

     // method for contact page
     public function contact(){
        return view('frontend.site.pages.contact');
    }

    // method for brands page
    public function brands(){
        $brands = Brand::with('translations')->paginate(12);
        return view('frontend.site.pages.brands',compact('brands'));
    }

    // method for contact page
    public function projects(){
        $projects = Project::with('translations')->paginate(12);
        return view('frontend.site.pages.projects',compact('projects'));
    }

     // method for projects_page page
     public function subprojects(Request $request){
        //$project_with_subprojects = Project::where('project_slug' , $request->project_slug)->with('subprojects','translations')->first();

        // Fetch the project based on the project_slug
        $project = Project::where('project_slug', $request->project_slug)->with('translations')->firstOrFail();
        $project_name = $project->project_name;

        // Paginate the subprojects related to the fetched project
        $subprojects = SubProject::where('project_id', $project->id)->paginate(10);

        return view('frontend.site.pages.subprojects',compact('subprojects', 'project' ,'project_name'));
    }

    // method for show single project details
    public function show_subproject(Request $request){
        $subproject = Subproject::where('sub_project_slug' , $request->subproject_slug)->with('project','translations')->firstOrFail();

        return view('frontend.site.pages.show_subproject',compact('subproject'));
    }

    // method for category_products page
    public function category_products(Request $request){

        // Fetch the main product category
        $category = ProductCategory::where('slug', $request->category_slug)
            ->with('translations') // Load translations for the main category
            ->first(); // Get the first matching category

        if (!$category) {
        return redirect()->back();
        }

        // Paginate the subcategories
        $subcategories = $category->subcategories()->paginate(10); // Change 10 to the number of items per page


        return view('frontend.site.pages.category_products' , compact('subcategories','category'));
    }

    // method for get the shop products by category and subcategory
    public function shop_by_category(Request $request){

        // get the categoy and childrens categories
        $productSubcategory = Productsubcategory::where('slug', $request->category_slug)
                    ->with('translations', 'parent_category')
                    ->first();

        // get the products of the category from url slug
        $products = Product::where('productSubcategory_id',$productSubcategory->id)->with( 'translations','category','subcategory',)->paginate(12);

        return view('frontend.site.pages.shop_by_category',compact('productSubcategory','products'));
    }

    // method for get the shop products by category and subcategory by one row
    public function shop_by_category_row(Request $request){

        // get the categoy and childrens categories
        $productSubcategory = Productsubcategory::where('slug', $request->category_slug)
                    ->with('translations', 'parent_category')
                    ->first();

        // get the products of the category from url slug
        $products = Product::where('productSubcategory_id',$productSubcategory->id)->with( 'translations','category','subcategory',)->paginate(12);

        return view('frontend.site.pages.shop_single_list',compact('productSubcategory','products'));
    }

    // method for show product by id
    public function show_product(Request $request){
     $product = Product::where('id',$request->product_id)->with( 'translations','category','subcategory',)->first();

     //return $product;
     //return $product;
     $colors = Color::all();
     return view('frontend.site.product.custom_product_details',compact('colors','product'));
    }

    // method for shop page
    public function shop(){
        return view('frontend.site.pages.shop');
    }

     // method for get brand by shop
     public function brand_shop(Request $request){
        $brand = Brand::where('slug',$request->brand_name)->first();

        return view('frontend.site.pages.shop',compact('brand'));
    }

     // method for single_listing_shop page
     public function single_listing_shop(){
        return view('frontend.site.pages.shop_single_list');
    }

    // method for normal_product_detail
    public function normal_product_detail(Request $request){
        $colors = Color::all();
        return view('frontend.site.product.single_product_details',compact('colors'));
    }

    // method for custom_product_detail
    public function custom_product_detail(Request $request){
        $colors = Color::all();
        return view('frontend.site.product.custom_product_details',compact('colors'));
    }


    // method for showrooms
    public function showrooms(Request $request){
        $showrooms = Showroom::with('translations')->paginate(12);
        return view('frontend.site.pages.showrooms', compact('showrooms'));
    }

    // method for shoping cart
    public function shoping_cart(Request $request){
        return view('frontend.site.pages.shoping_cart');
    }

    // method for checkout page
    public function checkout_page(Request $request){
        return view('frontend.site.pages.checkout_page');
    }

    // method for shoping_cart
    public function confirm_page(Request $request){
        return view('frontend.site.pages.confirm_page');
    }

    // // meethod for store contact
    public function contact_store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'country_name' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->fullname = $request->name;
        $contact->email = $request->email;
        $contact->mobile = $request->area_code .' '. $request->phone;
        $contact->country = $request->country_name;
        $contact->message = $request->message;

        $contact->save();

        try {
            // send email
            Mail::to($data['email'])->send(new ContactEmail($data));
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', 'Oops Error email not sending');
        }

        $contact->save();

        return redirect()->back()->with('success', trans('site.contact_message_tank_you')." {$request->name} ".trans('site.contact_message_last'));
    }

}
