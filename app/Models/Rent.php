<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Carbon\Carbon;

class Rent extends Model
{
    use HasFactory;

    // Fillable fields to allow mass assignment
    protected $fillable = [
        'rentproperty_id',
        'rentproperty_type',
        'rent_description',
        'rent_image',
        'rentproperty_status',
        'rentproperty_price',
        'rent_rooms',
        'bed_rooms',
        'bath_rooms',
        'garages',
        'build_up',
    ];

    private static $image, $imageName, $directory, $imageUrl;

    // Function to upload and resize image
    private static function getImageUrl($request)
    {
        self::$image = $request->file('rent_image');
        if (self::$image) {
            self::$imageName = time() . '_' . self::$image->getClientOriginalName(); // Unique image name
            self::$directory = "upload/rent-images/";
            self::$image->move(self::$directory, self::$imageName);

            // Resize the image using Intervention Image
            $imageManager = new ImageManager(new Driver());
            $image = $imageManager->read(self::$directory . self::$imageName);
            $image->resize(1200, 600); // Resize to required dimensions
            $image->save(self::$directory . self::$imageName);

            self::$imageUrl = self::$directory . self::$imageName;
            return self::$imageUrl;
        }
        return null;
    }

    public static function newRent($request)
    {
        self::$imageUrl = $request->file('rent_image') ? self::getImageUrl($request) : '';

        $rent = new self();
        self::saveBasicInfo($rent, $request, self::$imageUrl);
    }

    public static function updateRent($request, $rent)
    {
        if ($request->file('rent_image')) {
            if (file_exists($rent->rent_image)) {
                unlink($rent->rent_image);
            }
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = $rent->rent_image;
        }

        self::saveBasicInfo($rent, $request, self::$imageUrl);
    }

    private static function saveBasicInfo($rent, $request, $imageUrl)
    {
        $rent->rentproperty_id       = $request->rentproperty_id;
        $rent->rentproperty_type     = $request->rentproperty_type;
        $rent->rent_description      = $request->rent_description;
        $rent->rent_image            = $imageUrl;
        $rent->rentproperty_status   = $request->rentproperty_status;
        $rent->rentproperty_price    = $request->rentproperty_price;
        $rent->rent_rooms            = $request->rent_rooms;
        $rent->bed_rooms             = $request->bed_rooms;
        $rent->bath_rooms            = $request->bath_rooms;
        $rent->garages               = $request->garages;
        $rent->build_up              = Carbon::parse($request->build_up)->format('Y-m-d');
        $rent->save();
    }

    public static function deleteRent($rent)
    {
        if (file_exists($rent->rent_image)) {
            unlink($rent->rent_image);
        }

        $rent->delete();
    }
}
