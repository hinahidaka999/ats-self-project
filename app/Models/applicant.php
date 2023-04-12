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

    public function getAllApplicants()
    {
        return $this->get();
    }
}
