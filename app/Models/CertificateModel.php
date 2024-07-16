<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Email;

class CertificateModel extends Model
{
    public static function getData()
    {
        $data = DB::table('certificate')->get()->toArray();
        return $data;
    }

    public static function getCertData($id)
    {
        $sql = DB::table('certificate')->select('*')->where('name', '=', $id)->get()->toArray();
        if ($sql) {
            return $sql;
        } else {
            return 500;
        } 
    }

    public static function getApplicationData($app_id)
    {
        $sql = DB::table('applications')->select('*')->where('cert_number', '=', $app_id)->get()->toArray();
        return $sql;
    }

    public static function feedback($company_name, $contact_name, $address, $email, $contact, $audit_date, $audit_std, $company_act, $audit_type, $lead_audit_name, $other_audit_team, $la_audit, $feedback, $suggestion)
    {
        $sql = DB::table('feedback')->insert([
            'company_name' => $company_name, 'contact_name' => $contact_name, 'address' => $address, 'email' => $email, 'contact' => $contact, 'audit_date' => $audit_date, 'audit_std' => $audit_std, 'company_act' => $company_act, 'audit_type' => $audit_type, 'lead_audit_name' => $lead_audit_name, 'other_audit_team' => $other_audit_team, 'la_audit' => $la_audit, 'feedback' => $feedback, 'suggestion' => $suggestion
        ]);
        if ($sql) {
            return 200;
        } else {
            return 500;
        }
    }

    public static function getCountryList()
    {
        $data = DB::table('country')->get()->toArray();
        return $data;
    }

    public static function applyForcertification($company_name, $country, $address, $company_act, $contact_name, $email, $contact_number, $service_required)
    {
        $sql = DB::table('apply_for_certification')->insert([
            'company_name' => $company_name, 'country' => $country, 'address' => $address, 'company_act' => $company_act, 'contact_name' => $contact_name, 'email' => $email, 'contact_number' => $contact_number, 'service_required' => $service_required
        ]);
        if ($sql) {
            return 200;
        } else {
            return 500;
        }
    }

    public static function applyForTraining($name, $country, $email, $contact_number, $required_training, $training_mode)
    {
        $sql = DB::table('apply_for_training')->insert([
            'name' => $name, 'country' => $country, 'email' => $email, 'contact_number' => $contact_number, 'required_training' => $required_training, 'training_mode' => $training_mode
        ]);
        if ($sql) {
            return 200;
        } else {
            return 500;
        }
    }

    public static function contact($name, $email, $subject, $message)
    {
        $sql = DB::table('contacts')->insert([
            'name' => $name, 'email' => $email, 'subject' => $subject, 'message' => $message
        ]);
        if ($sql) {
            return 200;
        } else {
            return 500;
        }
    }

    public static function getCandidateTrainings($id)
    {
        $sql = DB::select(DB::raw("SELECT * FROM `candidate_training` WHERE cert_number ='$id'"));
        return $sql;
    }

    public static function getTrainingList()
    {
        $sql = DB::table('trainings_offered')->select('*')->orderBy('created_date', 'desc')->get();
        return $sql;
    }
}
