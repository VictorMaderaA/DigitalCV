<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

/**
 * Class File
 * @package App\Models
 * @version July 19, 2020, 10:16 am UTC
 *
 * @property \App\Models\User $user
 * @property string $name
 * @property string $path
 * @property bigIncrements $user_id
 */
class File extends Model
{
    use SoftDeletes;

    public $table = 'files';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'path',
        'user_id',
        'mimeType'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'path' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public static function storeFile(UploadedFile $file){
        $realName = $file->getClientOriginalName();
        $internalName = $file->hashName();
        $path = 'cv/userFiles/';

        Storage::disk('s3')->put($path, $file);

        $media = new File();
        $media->name = $realName;
        $media->path = $path = 'cv/userFiles/' . $internalName;
        $media->user_id = auth()->id();
        $media->mimeType = $file->getMimeType();
        $media->saveOrFail();
        $media->syncOriginal();
        return $media;
    }

    public function getPublicLink(){
        return route('profile.file', [$this->getAttributeValue('user_id'), $this->getAttributeValue('id')]);
    }
}
