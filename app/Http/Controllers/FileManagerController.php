<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class FileManagerController extends Controller
{


    # Making constants for validation
    const VALIDATE_LOGO 	= ['file'  	=> 'required|mimes:png'];
    const VALIDATE_IMAGES 	= ['file'  	=> 'required|mimes:png,jpeg,jpg,gif,svg'];
    const VALIDATE_UPLOADS 	= ['file'  	=> 'required|mimes:png,jpeg,jpg,gif,svg,mp4,webp'];
    const VALIDATE_VIDEO 	= ['file'  	=> 'required|mimes:mp4,3gp,m3u8,mov,avi'];

    # Making constants for path
    const PATH_LOGO 	= 'public/logotypes';
    const PATH_IMAGES 	= 'images';
    const PATH_UPLOADS 	= 'public/uploads';
    const PATH_VIDEO 	= 'public/videos';


    # For file uploading with some params
    public function store(Request $request){
        if(isset($request->store_type)){

            # For logotype store in storage
            if($request->store_type == 'logotype'){
                # For checking file format
                $request->validate(static::VALIDATE_LOGO);

                # Got file and save in $path
                $path = $request->file('file')->store(static::PATH_LOGO);
                $filename = $request->file('file')->hashName();

                return $this->returnAs(null, $path, $filename, 200);

                # For files store in storage
            } elseif($request->store_type == 'files') {
                # For checking file format
                $request->validate(static::VALIDATE_UPLOADS);

                # Got file and save in $path
                $path = $request->file('file')->store(static::PATH_UPLOADS);
                $filename = $request->file('file')->hashName();

                return $this->returnAs(null, $path, $filename, 200);

                # For files store in storage
            } elseif($request->store_type == 'all') {

                # Got file and save in $path
                $path = $request->file('file')->store(static::PATH_UPLOADS);
                $filename = $request->file('file')->hashName();

                return $this->returnAs(null, $path, $filename, 200);

                # For images store in storage
            } elseif($request->store_type == 'images') {
                # For checking file format
                $request->validate(static::VALIDATE_IMAGES);

                # Got file and save in $path
                // $path = $request->file('file')->store(static::PATH_IMAGES);
                // $filename = $request->file('file')->hashName();

                $path = $request->file('file');

                // returns Intervention\Image\Image
                // $resize = Image::make($path);
                $resize = Image::make($path)->widen(500, function ($constraint) {
                    $constraint->upsize();
                });
                $resize->orientate();
                // $resize->encode('jpg', 40);

                // calculate md5 hash of encoded image
                $hash = md5($resize->__toString().time());

                // use hash as a name
                $mime = $resize->mime();
                if($mime == 'image/jpeg') {
                    $path = static::PATH_IMAGES."/{$hash}.jpg";
                    $url = "images/{$hash}.jpg";
                } elseif($mime == 'image/png') {
                    $path = static::PATH_IMAGES."/{$hash}.png";
                    $url = "images/{$hash}.png";
                } elseif($mime == 'image/gif') {
                    $path = static::PATH_IMAGES."/{$hash}.gif";
                    $url = "images/{$hash}.gif";
                } else {
                    $path = static::PATH_IMAGES."/{$hash}.jpg";
                    $url = "images/{$hash}.jpg";
                }

                // save it locally to ~/public/images/{$hash}.jpg
                $resize->save(storage_path('app/public/') . $path);

                return $this->returnAs(null, $url, null, 200);

                # For video store in storage
            } elseif($request->store_type == 'video') {
                # For checking file format
                $request->validate(static::VALIDATE_VIDEO);

                # Got file and save in $path
                $path = $request->file('file')->store(static::PATH_VIDEO);
                $filename = $request->file('file')->hashName();

                return $this->returnAs(null, $path, $filename, 200);
            } else {
                return $this->returnAs(null, null, null, 405);
            }
        } else {
            return $this->returnAs(null, null, null, 406);
        }
    }

    # For destroing files
    public function destroy(Request $request) {
        if(isset($request->filename)) {
            # First, check the file for existence
            if(Storage::disk('local')->exists($request->filename) && FileUploads::where('id_mod', $request->id_mod)->exists()){

                # Then, starting delete file
                Storage::delete($request->filename);

                return $this->returnAs('Файл успешно удален', null, null, 200);
            } else {
                return $this->returnAs(null, null, null, 404);
            }
        } else {
            return $this->returnAs(null, null, null, 400);
        }
    }

    # For returning function with some params
    public function returnAs($message = null, $url = null, $filename = null, $code) {
        $originalUrl = null;
        # For messages
        if($code === 200 && !$message){
            $message = 'Успешное выполнение';
        } elseif($code === 405 && !$message) {
            $message = 'Метод не поддерживается';
        } elseif($code === 406 && !$message) {
            $message = 'Не указан обязательный метод';
        } elseif($code === 400 && !$message) {
            $message = 'Неверный запрос к серверу';
        } elseif($code === 404 && !$message) {
            $message = 'Файл не существует или был удален';
        } else {
            $message = $message;
        }

        if($url){
            # For url's settings
            $originalUrl = $url;
            $url = Storage::url($url);

            # For adding to database
            // $date = Carbon::now('Asia/Almaty');
            // $data = [
            // 	'filename' 		=> $filename,
            // 	'path' 			=> $url,
            // 	'originalPath' 	=> $originalUrl,
            // 	'id_mod'		=> $idmod ?? null,
            // 	'created_at'	=> $date,
            // 	'updated_at'	=> $date,
            // ];
            // FileUploads::insert($data);
        }

        return response()->json(['message' => $message, 'url' => $url, 'originalUrl' => $originalUrl], $code);
    }

    # For image rorate
    public function imageRotate(Request $request) {
        // create Image from file
        $img = Image::make(url($request->image));
        $img->rotate(-90);

        $fileName = basename($request->image);

        // use hash as a name
        $path = static::PATH_IMAGES."/{$fileName}";

        // save it locally to ~/public/images/{$hash}.jpg
        $img->save(storage_path($path));

        $url = "/storage/images/{$fileName}";

        return response()->json(['success' => true, 'message' => 'Вроде все', 'url' => $url], 200);
    }
}
