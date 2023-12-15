<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'slug',
        'folder',
    ];

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }

    public function user(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function relatedArticles(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Article::class, 'article_article', 'article_id', 'related_article_id')
            ->withTimestamps();
    }

    public function relateeArticles()
    {
        return $this->belongsToMany(Article::class, 'article_article', 'related_article_id', 'article_id')
            ->withTimestamps();
    }

    public function allRelatedArticles()
    {
        return $this->relateeArticles->merge($this->relatedArticles);
    }
}
