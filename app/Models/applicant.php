<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    //テーブル名
    protected $table = 'applicants';

    //可変項目
    protected $fillable =
    [
        'name',
        'age',
        'occupation',
        'applicant_route',
        'current_affiliation',
        'final_education',
        'tel',
        'email',
        'resume',
        'cv',
        'other_file',
        'career',
        'link',
        'memo'
    ];
    /**
     * 全てのレコードを取得
     */
    public static function getAllApplicants()
    {
        return self::all();
    }

    /**
     * 選考段階別の応募者情報を取得
     * @param int $selectionStage
     * @return array
     */
    public function getTypeData($selectionStage)
    {
        return $this->where('selectionStage', $selectionStage)->get();
    }

    /**
     * idからレコードを取得
     * @param int $id
     * @return Model
     */
    public static function getApplicantById(int $id)
    {
        return self::where('id', $id)->first();
    }
}
