<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Livewire\WithFileUploads;


class ArticleEntry extends Component
{
    use WithFileUploads;

    #[Locked]
    public $id;

    public $title;
    public $description;
    public $photo;

    public $mode;
    public $banner;

    public function mount( $mode = null , $id = null)
    {
        $this->mode = $mode;


        if ($id != null){
            $article = Article::find($id);

            $this->id = $article->id;
            $this->title = $article->title;
            $this->description = $article->description;
            $this->banner = $article->banner;
        }
    }

    public function render()
    {
        return view('livewire.article-entry');
    }

    public function create()
    {
        Gate::allowIf(fn() => Auth::user()->account_type == 'Moderator' || Auth::user()->account_type == 'Administrator' || Auth::user()->account_type == 'Super Administrator');

        //validate
//        if (Auth::user()->account_type != 'Administrator' || Auth::user()->account_type == 'Super Administrator') {
            $validated = Validator::make([
                'title' => $this->title,
                'description' => $this->description,
                'photo' => $this->photo,
            ], [
                'title' => ['required', 'min:3', 'max:190', Rule::unique('articles', 'title')],
                'description' => ['required', 'min:3', 'max:500'],
                'photo' => ['nullable', "image", "mimes:jpeg,png,gif", "max:2048"],
            ])->setAttributeNames([
                'title' => 'Title',
                'description' => 'description',
                'photo' => 'Banner'
            ])
                ->validate();
//        }

        $folder = $this->generateFiles();

        $article = new Article();

        $article->user()->associate(Auth::user());

        $article->fill([
            'title' => $this->title,
            'description' => $this->description,
            'slug' => Str::slug($this->title),
            'folder' => $folder,
        ]);

        if ($this->photo != null) {
            $article->banner = $this->performUpload();
        }

        $article->save();
        $article->refresh();

        return $this->redirect('/dashboard/blog/' . $article->id);
    }

    public function update()
    {
        Gate::allowIf(fn() => Auth::user()->account_type == 'Moderator' || Auth::user()->account_type == 'Administrator' || Auth::user()->account_type == 'Super Administrator');

        //validate
        if (Auth::user()->account_type != 'Administrator' || Auth::user()->account_type == 'Super Administrator') {
            $validated = Validator::make([
                'title' => $this->title,
                'description' => $this->description,
                'photo' => $this->photo,
            ], [
                'title' => ['required', 'min:3', 'max:190', Rule::unique('articles', 'title')],
                'description' => ['required', 'min:3', 'max:500'],
                'photo' => ['nullable', "image", "mimes:jpeg,png,gif", "max:2048"],
            ])->setAttributeNames([
                'title' => 'Title',
                'description' => 'description',
                'photo' => 'Banner'
            ])
                ->validate();
        }

        $folder = $this->generateFiles();

        $article = Article::find($this->id);

        $article->fill([
            'title' => $this->title,
            'description' => $this->description,
            'slug' => Str::slug($this->title),
            'folder' => $folder,
        ]);

        if ($this->photo != null) {
            $article->banner = $this->performUpload();
        }

        $article->save();
        $article->refresh();

        return $this->redirect('/dashboard/blog/' . $article->id);
    }

    public function delete(){
        $article = Article::find($this->id);

        $article->delete();

        return $this->redirect('/dashboard/blog');

    }

    private function performUpload()
    {
        $path = $this->photo->store('', 'ArticleBanners');
        return $path;
    }

    private function generateFiles()
    {
        $filename = $this->filter_filename($this->title);
        Storage::disk('Articles')->makeDirectory($filename, $mode = 0777, true, true);
        Storage::disk('Articles')->put('/' . $filename . '/article.md', '');
        Storage::disk('Articles')->put('/' . $filename . '/style.css', '');
        return $filename;
    }

    private function filter_filename($filename, $beautify = true): string
    {
        // sanitize filename
        $filename = preg_replace(
            '~
        [<>:"/\\\|?*]|            # file system reserved https://en.wikipedia.org/wiki/Filename#Reserved_characters_and_words
        [\x00-\x1F]|             # control characters http://msdn.microsoft.com/en-us/library/windows/desktop/aa365247%28v=vs.85%29.aspx
        [\x7F\xA0\xAD]|          # non-printing characters DEL, NO-BREAK SPACE, SOFT HYPHEN
        [#\[\]@!$&\'()+,;=]|     # URI reserved https://www.rfc-editor.org/rfc/rfc3986#section-2.2
        [{}^\~`]                 # URL unsafe characters https://www.ietf.org/rfc/rfc1738.txt
        ~x',
            '-', $filename);
        // avoids ".", ".." or ".hiddenFiles"
        $filename = ltrim($filename, '.-');
        // optional beautification
        if ($beautify) $filename = $this->beautify_filename($filename);
        // maximize filename length to 255 bytes http://serverfault.com/a/9548/44086
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $filename = mb_strcut(pathinfo($filename, PATHINFO_FILENAME), 0, 255 - ($ext ? strlen($ext) + 1 : 0), mb_detect_encoding($filename)) . ($ext ? '.' . $ext : '');
        return $filename;
    }

    private function beautify_filename($filename): string
    {
        // reduce consecutive characters
        $filename = preg_replace(array(
            // "file   name.zip" becomes "file-name.zip"
            '/ +/',
            // "file___name.zip" becomes "file-name.zip"
            '/_+/',
            // "file---name.zip" becomes "file-name.zip"
            '/-+/'
        ), '-', $filename);
        $filename = preg_replace(array(
            // "file--.--.-.--name.zip" becomes "file.name.zip"
            '/-*\.-*/',
            // "file...name..zip" becomes "file.name.zip"
            '/\.{2,}/'
        ), '.', $filename);
        // lowercase for windows/unix interoperability http://support.microsoft.com/kb/100625
        $filename = mb_strtolower($filename, mb_detect_encoding($filename));
        // ".file-name.-" becomes "file-name"
        $filename = trim($filename, '.-');
        return $filename;
    }
}
