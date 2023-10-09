<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Models\Category;
use App\Models\CategoryTranslation;
use App\Models\PostTranslation;
use App\Models\Images;
use App\Models\SectionTranslation;
use App\Models\Customer;

// $locale = App::currentLocale();

class HomeController extends Controller
{
    // function __construct()
    // {

    //     view()->share( [
            
    //     ]);
    // }

    public function index()
    {
        $locale = App::currentLocale();
        $category = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->where('locale', $locale)
            ->select('category_translations.*')->orderBy('categories.view', 'asc')->get();
        $post = PostTranslation::where('locale', $locale)->orderBy('id', 'asc')->get();
        return view('pages.home', compact(
            'category',
            'post'
        ));
    }

    public function img360()
    {
        return view('pages.img360');
    }


    public function about()
    {
        $locale = App::currentLocale();
        $category = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->where('locale', $locale)
            ->select('category_translations.*')->orderBy('categories.view', 'asc')->get();
        return view('pages.about', [
            'category'=>$category,
        ]);
    }

    public function contact()
    {
        $locale = App::currentLocale();
        $category = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->where('locale', $locale)
            ->select('category_translations.*')->orderBy('categories.view', 'asc')->get();
        return view('pages.contact', [
            'category'=>$category,
        ]);
    }

    public function category($slug)
    {
        $locale = App::currentLocale();
        $category = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->where('locale', $locale)
            ->select('category_translations.*')->orderBy('categories.view', 'asc')->get(); //menu
        $data = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->select('category_translations.*')
            ->where('slug', $slug)
            ->where('locale', $locale)->first();
        $post = PostTranslation::where('category_tras_id', $data->id)
            ->where('locale', $locale)
            ->orderBy('id', 'desc')
            ->get();
        if ($data->category->sort_by == 'Product') {
            return view('pages.category', compact(
                'category',
                'data',
                'post'
            ));
        }elseif($data->category->sort_by == 'News'){
            return view('pages.news', compact(
                'category',
                'data',
                'post',
            ));
        }
    }

    public function post($catslug, $slug)
    {
        $locale = App::currentLocale();
        $category = CategoryTranslation::join('categories', 'categories.id', '=', 'category_translations.category_id')
            ->where('locale', $locale)
            ->select('category_translations.*')->orderBy('categories.view', 'asc')->get(); //menu
        $post = PostTranslation::join('posts', 'posts.id', '=', 'post_translations.post_id')
            ->where('locale', $locale)
            ->select('post_translations.*')
            ->where('posts.slug', $slug)
            ->first();
        if ($post->post->sort_by == 'Product') {
            $images = Images::where('post_id', $post->post->id)->get();
            $section = SectionTranslation::where('locale', $locale)->where('post_id', $post->post->id)->orderBy('view', 'asc')->get();
            return view('pages.project', compact(
                'category',
                'post',
                'images',
                'section',
                'catslug',
            ));
        }elseif ($post->post->sort_by == 'News') {
            return view('pages.post', compact(
                'category',
                'post',
            ));
        }
        
    }

    public function dangky(Request $request)
    {
        // $data = $request->all();
        // dd($data);
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->content = $request->content;
        $customer->save();

        return redirect('/')->with('success','updated successfully');
    }
}
