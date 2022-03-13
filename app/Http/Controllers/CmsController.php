<?php

namespace App\Http\Controllers;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Support\Facades\App;
use App\Models\Setting;
use App\Models\AboutUs;
use App\Models\Product;
use App\Models\Category;
use App\Models\Service;
use App\Models\Post;
use App\Models\Gallery;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Value;
use App\Models\Goal;
use App\Models\Mission;



use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function index()
    {
        // get lacale langauge
        $locale = app()->getLocale();
        // settings query
        $setting = Setting::select(['id', 'site_name_' . $locale, 'slogan_' . $locale])
        ->whereNotNull('site_name_' . $locale)
        ->where('site_name_' . $locale, '!=', '')
        ->first()
        ->get();
        // products query\
        $products = Product::with(['category', 'media'])->get();
        // $products = Product::select(['id', 'name_' . $locale, 'description_' . $locale, 'price'])
        // ->with(['category', 'media'])
        // ->whereNotNull('name_' . $locale)
        // ->where('name_' . $locale, '!=', '')
        // ->get();
        // categories query
        $categories = Category::with(['products','media'])->get();
        // $categories = Category::select(['id', 'name_' . $locale])
        // ->with('products')
        // ->whereNotNull('name_' . $locale)
        // ->where('name_' . $locale, '!=', '')
        // ->get();
        // services query\
        $services = Service::select(['id', 'name_' . $locale, 'description_' . $locale])
        ->whereNotNull('name_' . $locale)
        ->where('name_' . $locale, '!=', '')
        ->get();
        // blog
        $posts = Post::select(['id', 'title_' . $locale, 'body_' . $locale, 'created_at'])
        ->whereNotNull('body_' . $locale)
        ->where('body_' . $locale, '!=', '')
        ->get();
        // gallery
        $galleries = Gallery::with(['media'])->get();
        // clients
        $clients = Client::with(['media'])->get();
        //get contacts
        $contact = Contact::first();
        // App::setLocale('ar');

        // dd($clients);

        return view('cms.index',
        compact(['setting', 'products', 'categories', 'services', 'posts', 'galleries', 'clients','contact']));
        
    }

    public function about()
    {
        $locale = app()->getLocale();
        //setting 
        $setting = Setting::select(['id', 'site_name_' . $locale, 'slogan_' . $locale])
        ->whereNotNull('site_name_' . $locale)
        ->where('site_name_' . $locale, '!=', '')
        ->first()
        ->get();
        //get about data
        $about = AboutUs::select(['id', 'title_' . $locale, 'description_' . $locale])
        ->whereNotNull('title_' . $locale)
        ->where('title_' . $locale, '!=', '')
        ->first()
        ->with(['media'])
        ->get();
        // get contacts
        $contact = Contact::first();
        // get values
        $values = Value::all();
        $goals = Goal::all();
        $missions = Mission::all();
        // dd($values);
        return view('cms.about', compact(['about', 'setting', 'contact', 'values', 'goals', 'missions']));
    }
    public function blog()
    {
        $locale = app()->getLocale();
        $setting = Setting::select(['id', 'site_name_' . $locale, 'slogan_' . $locale])
        ->whereNotNull('site_name_' . $locale)
        ->where('site_name_' . $locale, '!=', '')
        ->first()
        ->get();
        $contact = Contact::first();
        $posts = Post::with(['media'])->get();
        return view('cms.blogindex', compact(['posts', 'setting', 'contact']));
    }
    public function product()
    {
        $locale = app()->getLocale();
        $setting = Setting::select(['id', 'site_name_' . $locale, 'slogan_' . $locale])
        ->whereNotNull('site_name_' . $locale)
        ->where('site_name_' . $locale, '!=', '')
        ->first()
        ->get();
        $contact = Contact::first();

        $products = Product::with(['category', 'media'])->get();
        $categories = Category::with(['products','media'])->get();

        return view('cms.productindex', compact(['setting', 'contact','products', 'categories']));

    }
    public function show(Post $post)
    {
        $locale = app()->getLocale();
        $setting = Setting::select(['id', 'site_name_' . $locale, 'slogan_' . $locale])
        ->whereNotNull('site_name_' . $locale)
        ->where('site_name_' . $locale, '!=', '')
        ->first()
        ->get();
        $contact = Contact::first();
        // dd($post);
        return view('cms.showpost', compact(['post', 'setting', 'contact']));
    }

    public function showProduct(Product $product)
    {
        $locale = app()->getLocale();
        $setting = Setting::select(['id', 'site_name_' . $locale, 'slogan_' . $locale])
        ->whereNotNull('site_name_' . $locale)
        ->where('site_name_' . $locale, '!=', '')
        ->first()
        ->get();
        $contact = Contact::first();

        return view('cms.product', compact(['product', 'setting', 'contact']));
    }

}
