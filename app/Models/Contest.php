<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Contest extends Model
{
    use HasFactory;

    private static $contest, $image, $imageExtension, $imageUrl, $directory;


    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageExtension = 'contest-image'. '-'.time(). '.' .self::$image->getClientOriginalExtension();
        self::$directory = 'contest-images/';
        self::$image->move(self::$directory,self::$imageExtension);
        self::$imageUrl = self::$directory.self::$imageExtension;
        return self::$imageUrl;
    }

    public static function createNewContest($request)
    {
        self::$contest = new Contest();
        self::$contest->category_id = $request->category_id;
        self::$contest->slug = Str::slug($request->title);
        self::$contest->title = $request->title;
        self::$contest->code = $request->code;
        self::$contest->draw_date = $request->draw_date;
        self::$contest->draw_status = 'not_drawn';
        self::$contest->price = $request->price;
        self::$contest->qty = $request->qty;
        self::$contest->start_date = $request->start_date;
        self::$contest->end_date = $request->end_date;
        self::$contest->description = $request->description;
        self::$contest->details = $request->details;
        self::$contest->image = self::getImageUrl($request);
        if ($request->status)
        {
            self::$contest->status = $request->status;
        }
        else
        {
            self::$contest->status = 2;
        }
        self::$contest->save();
        return self::$contest;
    }

    public static function updateContest($request, $id)
    {
        self::$contest = Contest::find($id);
        self::$contest->category_id = $request->category_id;
        self::$contest->slug = Str::slug($request->title);
        self::$contest->title = $request->title;
        self::$contest->code = $request->code;
        self::$contest->draw_date = $request->draw_date;
        self::$contest->price = $request->price;
        self::$contest->qty = $request->qty;
        self::$contest->start_date = $request->start_date;
        self::$contest->end_date = $request->end_date;
        self::$contest->description = $request->description;
        self::$contest->details = $request->details;
        if ($request->file('image'))
        {
            if (file_exists(self::$contest->image))
            {
                unlink(self::$contest->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$contest->image;
        }
        self::$contest->image = self::$imageUrl;
        if ($request->status)
        {
            self::$contest->status = $request->status;
        }
        else
        {
            self::$contest->status = 2;
        }
        self::$contest->save();
        return self::$contest;
    }

    public function otherImages()
    {
        return $this->hasMany(OtherImage::class);
    }

}
