<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class OtherImage extends Model
{
    use HasFactory;

    private static $otherImage, $otherImages, $imageExtension, $directory, $imageUrl;



    public static function getImageUrl($otherImage)
    {
        self::$imageExtension = 'contest-otherImage'.'-'.Str::random(4). '.' .$otherImage->getClientOriginalExtension();
        self::$directory = 'contest-otherImages/';
        $otherImage->move(self::$directory, self::$imageExtension);
        self::$imageUrl = self::$directory . self::$imageExtension;
        return self::$imageUrl;
    }

    public static function createOtherImages($request, $contestId)
    {
        self::$otherImages = $request->file('other_images');
        foreach (self::$otherImages as $otherImage)
        {
            self::$otherImage = new OtherImage();
            self::$otherImage->contest_id = $contestId;
            self::$otherImage->image = self::getImageUrl($otherImage);
            self::$otherImage->save();
        }
    }

    public static function updateOtherImage($request, $contestId)
    {
        self::$otherImages = OtherImage::where('contest_id', $contestId)->get();
        foreach (self::$otherImages as $otherImage)
        {
            if (file_exists($otherImage->image))
            {
                unlink($otherImage->image);
            }
            $otherImage->delete();
        }
        self::createOtherImages($request, $contestId);
    }
}
