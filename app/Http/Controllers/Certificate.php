<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\CertificateModel;

class Certificate extends Controller
{
    public function index(Request $request)
    {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();
        $viewPath = $region ? 'sa/index' : 'index';
        return view($viewPath, $data);
    }

    public function qualityPolicy(Request $request)
    {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();
        $viewPath = $region ? 'sa/quality-policy' : 'quality-policy';
        return view($viewPath, $data);
    }

    public function certification_mark_guidelines(Request $request)
    {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();
        $viewPath = $region ? 'sa/certification-mark-guidelines' : 'certification-mark-guidelines';
        return view($viewPath, $data);
    }

    public function impartiality_policy(Request $request)
    {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();
        $viewPath = $region ? 'sa/impartiality-policy' : 'impartiality-policy';
        return view($viewPath, $data);
    }

    public function customer_feedback(Request $request)
    {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();
        $viewPath = $region ? 'sa/customer-feedback' : 'customer-feedback';
        return view($viewPath, $data);
    }

    public function contact(Request $request)
    {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();
        $viewPath = $region ? 'sa/contact' : 'contact';
        return view($viewPath, $data);
    }

    public function chkStatus(Request $request)
    {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();
        $viewPath = $region ? 'sa/check-status' : 'check-status';
        return view($viewPath, $data);
    }

    public function certificate(Request $request)
    {
        $region = collect($request->segments())->contains('sa');
        $id = $region ? $request->segment(2) : $request->segment(1);
        $data['cert'] = CertificateModel::getCertData($id);
        $data['certData'] = CertificateModel::getData();
        $viewPath = $region ? 'sa/certificate' : 'certificate';
        return $data['cert'] == 500 ? '<h3>The ISO standard that you are looking for does not exist</h3>' : view($viewPath, $data);
    }

    public function getAppData(Request $request)
    {
        $result = $request->getContent();
        $data = json_decode($result, true);
        $id = $data['app_id'];
        $res = CertificateModel::getApplicationData($id);
        return response()->json(['data' => $res, 'status' => '200']);
    }

    public function appeal_handling_process(Request $request)
    {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();
        $viewPath = $region ? 'sa/appeal-handling-process' : 'appeal-handling-process';
        return view($viewPath, $data);
    }

    public function complaint_handling_process(Request $request)
    {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();
        $viewPath = $region ? 'sa/complaint-handling-process' : 'complaint-handling-process';
        return view($viewPath, $data);
    }

    public function submitFeedback(Request $request)
    {
        $result = $request->getContent();
        $data = json_decode($result, true);
        $company_name = $data['company_name'];
        $contact_name = $data['contact_name'];
        $address = $data['address'];
        $email = $data['email'];
        $contact = $data['contact'];
        $audit_date = $data['audit_date'];
        $audit_std = $data['audit_std'];
        $company_act = $data['company_act'];
        $audit_type = $data['audit_type'];
        $lead_audit_name = $data['lead_audit_name'];
        $other_audit_team = $data['other_audit_team'];
        $la_audit = $data['la_audit'];
        $feedback = $data['feedback'];
        $suggestion = $data['suggestion'];
        $res = CertificateModel::feedback($company_name, $contact_name, $address, $email, $contact, $audit_date, $audit_std, $company_act, $audit_type, $lead_audit_name, $other_audit_team, $la_audit, $feedback, $suggestion);
        if ($res == 200) {
            return response()->json([
                'status' => '200',
                'message' => 'Feedback submitted successfully!!',
            ]);
        } else {
            return response()->json([
                'status' => '500',
                'message' => 'Server error!!',
            ]);
        }
    }

    public function apply_for_certification(Request $request)
    {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();
        $data['countryData'] = CertificateModel::getCountryList();
        $viewPath = $region ? 'sa/apply-for-certification' : 'apply-for-certification';
        return view($viewPath, $data);
    }

    public function applyForCertification(Request $request)
    {
        $result = $request->getContent();
        $data = json_decode($result, true);
        $company_name = $data['company_name'];
        $country = $data['country'];
        $address = $data['address'];
        $company_act = $data['company_act'];
        $contact_name = $data['contact_name'];
        $email = $data['email'];
        $contact_number = $data['contact_number'];
        $service_required = $data['service_required'];
        $res = CertificateModel::applyForcertification($company_name, $country, $address, $company_act, $contact_name, $email, $contact_number, $service_required);
        if ($res == 200) {
            return response()->json([
                'status' => '200',
                'message' => 'Application for certification submitted successfully!!',
            ]);
        } else {
            return response()->json([
                'status' => '500',
                'message' => 'Server error!!',
            ]);
        }
    }

    public function apply_for_training(Request $request)
    {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();
        $data['countryData'] = CertificateModel::getCountryList();
        $viewPath = $region ? 'sa/apply-for-training' : 'apply-for-training';
        return view($viewPath, $data);
    }

    public function applyForTraining(Request $request)
    {
        $result = $request->getContent();
        $data = json_decode($result, true);
        $name = $data['name'];
        $country = $data['country'];
        $email = $data['email'];
        $contact_number = $data['contact_number'];
        $required_training = $data['required_training'];
        $training_mode = $data['training_mode'];
        $res = CertificateModel::applyForTraining($name, $country, $email, $contact_number, $required_training, $training_mode);
        if ($res == 200) {
            return response()->json([
                'status' => '200',
                'message' => 'Application for training submitted successfully!!',
            ]);
        } else {
            return response()->json([
                'status' => '500',
                'message' => 'Server error!!',
            ]);
        }
    }

    public function contactUs(Request $request)
    {
        $result = $request->getContent();
        $data = json_decode($result, true);
        $name = $data['name'];
        $email = $data['email'];
        $subject = $data['subject'];
        $message = $data['message'];
        $res = CertificateModel::contact($name, $email, $subject, $message);
        if ($res == 200) {
            return response()->json([
                'status' => '200',
                'message' => 'Enquiry submitted successfully!!',
            ]);
        } else {
            return response()->json([
                'status' => '500',
                'message' => 'Server error!!',
            ]);
        }
    }

    public function verifyTrainingCertificate(Request $request)
    {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();
        $viewPath = $region ? 'sa/verify-training-certificate' : 'verify-training-certificate';
        return view($viewPath, $data);
    }
    
    public function getCandidateCertificate(Request $request)
    {
        $id = $request->input('cert_id');
        $response = CertificateModel::getCandidateTrainings($id);
        return response()->json([
                'status' => '200',
                'data' => $response,
            ]);
    }

    public function professionalTrainingAndCertification(Request $request)
    {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();   
        $viewPath = $region ? 'sa/professional-training-and-certification' : 'professional-training-and-certification';
        return view($viewPath, $data);

    }

    public function professionalDevelopmentPrograms(Request $request)
    {
        $region = collect($request->segments())->contains('sa');
        $data['training'] = CertificateModel::getTrainingList();
        $data['certData'] = CertificateModel::getData();   
        $viewPath = $region ? 'sa/professional-development-programs' : 'professional-development-programs';
        return view($viewPath, $data);

    }

    public function trainingServicesOffered(Request $request)
    {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();   
        $viewPath = $region ? 'sa/training-services-offered' : 'training-services-offered';
        return view($viewPath, $data);
    }

    public function managementSystemCertification(Request $request)
    {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();   
        $viewPath = $region ? 'sa/management-system-certification' : 'management-system-certification';
        return view($viewPath, $data);
    }

    public function integratedManagementSystem(Request $request)
    {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();   
        $viewPath = $region ? 'sa/integrated-management-system' : 'integrated-management-system';
        return view($viewPath, $data);
    }

    public function dammam(Request $request) {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();
        $viewPath = $region ? 'sa/iso-consultancy-in-dammam' : 'iso-consultancy-in-dammam';
        return view($viewPath, $data);
    }

    public function makkah(Request $request) {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();
        $viewPath = $region ? 'sa/iso-consultancy-in-makkah' : 'iso-consultancy-in-makkah';
        return view($viewPath, $data);
    }
    
    public function jubail(Request $request) {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();
        $viewPath = $region ? 'sa/iso-consultancy-in-jubail' : 'iso-consultancy-in-jubail';
        return view($viewPath, $data);
    }
    
    public function jeddah(Request $request) {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();
        $viewPath = $region ? 'sa/iso-consultancy-in-jeddah' : 'iso-consultancy-in-jeddah';
        return view($viewPath, $data);
    }
    
    public function buraydah(Request $request) {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();
        $viewPath = $region ? 'sa/iso-consultancy-in-buraydah' : 'iso-consultancy-in-buraydah';
        return view($viewPath, $data);
    }
    
    public function hofuf(Request $request) {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();
        $viewPath = $region ? 'sa/iso-consultancy-in-hofuf' : 'iso-consultancy-in-hofuf';
        return view($viewPath, $data);
    }
    
    public function medina(Request $request) {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();
        $viewPath = $region ? 'sa/iso-consultancy-in-medina' : 'iso-consultancy-in-medina';
        return view($viewPath, $data);
    }
    
    public function yanbu(Request $request) {
        $region = collect($request->segments())->contains('sa');
        $data['certData'] = CertificateModel::getData();
        $viewPath = $region ? 'sa/iso-consultancy-in-yanbu' : 'iso-consultancy-in-yanbu';
        return view($viewPath, $data);
    }

}
