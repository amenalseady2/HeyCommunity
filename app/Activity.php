<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends BaseModel
{
    /**
     * Related User
     */
    public function author()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * Relate DailyPaper
     */
    public function dailyPapers()
    {
        return $this->morphMany(DailyPaper::class, 'entity');
    }

    /**
     * Relate Area
     */
    public function area()
    {
        return $this->belongsTo(ActivityArea::class, 'area_id');
    }

    /**
     * Get In DailyPaper
     */
    public function getInDailyPaperAttribute()
    {
        return $this->dailyPapers()->createdAtInToday()->exists();
    }

    /**
     * Get Avatar Attribute
     */
    public function getAvatarAttribute($value)
    {
        return asset($value);
    }
}
