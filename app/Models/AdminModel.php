<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
    public static function auth($name, $password)
    {
        $data = DB::table('admin')->select('*')->where([
            ['username', '=', $name],
            ['password', '=', $password]
        ])->get();
        if (count($data) > 0) {
            return 200;
        } else {
            return 400;
        }
    }

    public static function uploadCert($cert_name, $name, $file, $content)
    {
        $sql = DB::table('certificate')->insert([
            "name" => $cert_name,
            "cer_name" => $name,
            "description" => $content,
            "img" => $file,
            "status" => 1
        ]);
        if ($sql) {
            return 200;
        } else {
            return 400;
        }
    }

    public static function getCerList()
    {
        $sql = DB::table('certificate')->select('cer_name')->get()->toArray();
        return $sql;
    }

    public static function addApp($name, $number, $stdName, $scope, $status, $date)
    {
        $sql = DB::table('applications')->insert([
            "comp_name" => $name,
            "cert_number" => $number,
            "cert_name" => $stdName,
            "scope" => $scope,
            "issue_date" => $date,
            "exp_date" =>  date("Y-m-d", strtotime("+3 years", strtotime($date))),
            "status" => $status
        ]);
        if ($sql) {
            return 200;
        } else {
            return 400;
        }
    }

    public static function getAppDatas($id = null)
    {
        if ($id) {
            $sql = DB::table('applications')->select('*')->where('id', '=', $id)->get()->toArray();
        } else {
            $sql = DB::table('applications')->select('*')->get()->toArray();
        }
        return $sql;
    }

    public static function updateAppData($id, $name, $cert_number, $scope, $date, $std_name)
    {
        $sql = DB::table('applications')->where('id', $id)->update([
            "comp_name" => $name,
            "cert_number" => $cert_number,
            "scope" => $scope,
            "cert_name" => $std_name,
            "issue_date" => $date
        ]);
        if ($sql) {
            return 200;
        } else {
            return 400;
        }
    }

    public static function deleteApp($id)
    {
        $sql = DB::table('applications')->where('id', $id)->delete();
        if ($sql) {
            return 200;
        } else {
            return 400;
        }
    }

    public static function getSingleCertData($id)
    {
        $sql = DB::table('certificate')->select('*')->where('id', '=', $id)->get()->toArray();
        return $sql;
    }

    public static function updateCert($id, $name, $content)
    {
        $sql = DB::table('certificate')->where('id', $id)->update([
            "cer_name" => $name,
            "description" => $content
        ]);
        if ($sql) {
            return 200;
        } else {
            return 400;
        }
    }

    public static function getCertificationEnquiryList()
    {
        $sql = DB::select(DB::raw('SELECT a.*, c.name FROM apply_for_certification AS a INNER JOIN country AS c ON a.country=c.id ORDER BY a.applied_date DESC'));
        return $sql;
    }

    public static function getTrainingEnquiryList()
    {
        $sql = DB::select(DB::raw('SELECT a.*, c.name AS countryName FROM apply_for_training AS a INNER JOIN country AS c ON a.country=c.id ORDER BY a.applied_date DESC'));
        return $sql;
    }

    public static function getContactEnquiryList()
    {
        $sql = DB::table('contacts')->select('*')->orderBy('created_at', 'desc')->get();
        return $sql;
    }

    public static function getFeedbackList()
    {
        $sql = DB::select(DB::raw('SELECT f.*, c.cer_name from feedback AS f INNER JOIN certificate AS c ON f.audit_type=c.id ORDER BY created_at DESC'));
        return $sql;
    }

    public static function getTrainingList()
    {
        $sql = DB::table('trainings_offered')->select('*')->orderBy('created_date', 'desc')->get();
        return $sql;
    }

    public static function addTraining($tName)
    {
        $sql = DB::table('trainings_offered')->insert([
            "training_name" => $tName,
            "status" => 1
        ]);
        if ($sql) {
            return 200;
        } else {
            return 500;
        }
    }

    public static function deleteTraining($id)
    {
        $sql = DB::table('trainings_offered')->where('id', $id)->update([
            "status" => 0
        ]);
        if ($sql) {
            return 200;
        } else {
            return 400;
        }
    }

    public static function insertCandidateCertificate($name, $cert_number, $training_done, $issueDate, $status)
    {
        $sql = DB::table('candidate_training')->insert([
            "name" => $name,
            "cert_number" => $cert_number,
            "training_done" => $training_done,
            "issueDate" => $issueDate,
            "status" => $status
        ]);
        if ($sql) {
            return 200;
        } else {
            return 500;
        }
    }

    public static function getCandiateCertificate() {
        $sql = DB::table('candidate_training')->select('*')->orderBy('issueDate', 'desc')->get();
        return $sql;
    }

    public static function disableCandidateTrainingCertificate($id)
    {
        $sql = DB::table('candidate_training')->where('id', $id)->update([
            "status" => "invalid"
        ]);
        if ($sql) {
            return 200;
        } else {
            return 400;
        }
    }
}
