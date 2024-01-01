<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Main.home');
    }

    public function services(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Main.services');
    }

    public function registration(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Main.registration');
    }

    public function enquiry(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Main.enquiry');
    }

    public function privacy(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Main.privacy');
    }


    public function book(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('Main.book');
    }

    public function studyIn($state): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return match ($state) {
            "usa" => view('Main.Study.usa'),
            "canada" => view('Main.Study.canada'),
            "australia" => view('Main.Study.australia'),
            default => view('Main.home'),
        };
    }
















    public function blog()
    {
        return view('Main.blog');
    }

    public function article(Request $request, $Article)
    {
        $Article = Article::where('slug',$Article)->firstOrFail();
        $folder = $Article->folder;
        $markdownFilePath = public_path("Articles\\{$folder}\\article.md");
        $cssFilePath = public_path("Articles\\{$folder}\\style.css");

        if (File::exists($markdownFilePath) && File::exists($cssFilePath)) {
            $markdownContent = file_get_contents($markdownFilePath);
            $markdownWithCss = "<link rel='stylesheet' type='text/css' href='/Articles/$folder/style.css'>".Str::of($markdownContent)->markdown(['html_input' => 'strip']);
        } else {
            $markdownWithCss = "Not Found";
        }

        $markdown = Str::of($markdownWithCss)->markdown();

        $related = $Article->allRelatedArticles();

        return view('Main.article', [
            'markdown' => $markdown,
            'article' => $Article,
            'related' => $related
        ]);
    }

    public function about()
    {
        return view('Main.about');
    }

    public function contact()
    {
        return view('Main.contact');
    }

    public function login()
    {
        return view('Main.login');
    }

    public function register()
    {
        return view('Main.register');
    }
}
