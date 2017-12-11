<?php

namespace SEO\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property varchar $path path
 * @property varchar $route_name route name
 * @property varchar $robot_index robot index
 * @property varchar $robot_follow robot follow
 * @property varchar $canonical_url canonical url
 * @property varchar $title title
 * @property timestamp $created_at created at
 * @property timestamp $updated_at updated at
 * @property \Illuminate\Database\Eloquent\Collection $seoPageImage hasMany
 * @property \Illuminate\Database\Eloquent\Collection $seoPageMetaTag hasMany
 */
class Page extends Model
{

    /**
     * Database table name
     */
    protected $table = 'seo_pages';
    /**
     * Protected columns from mass assignment
     */
    protected $guarded = ['id'];


    /**
     * Date time columns.
     */
    protected $dates = [];

    /**
     * seoPageImages
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function seoPageImages()
    {
        return $this->hasMany(SeoPageImage::class, 'page_id');
    }

    /**
     * seoPageMetaTags
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function seoPageMetaTags()
    {
        return $this->hasMany(SeoPageMetaTag::class, 'seo_page_id');
    }


}