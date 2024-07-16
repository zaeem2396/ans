<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use App\Models\CertificateModel;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;
use Cloudinary\Cloudinary;
use Illuminate\Support\Facades\DB;
use R;

class Admin extends Controller
{
    public function index()
    {
        return view('auth/index');
    }

    public function auth(Request $request)
    {
        $result = $request->getContent();
        $data = json_decode($result, true);
        $name = $data['name'];
        $password = $data['password'];
        $res = AdminModel::auth($name, $password);
        if ($res == 200) {
            return response()->json([
                "status" => 200
            ]);
        } else {
            return response()->json([
                "status" => 400
            ]);
        }
    }

    public function dashboard()
    {
        $data['x'] = 1;
        $data['certData'] = CertificateModel::getData();
        return view('auth/dashboard', $data);
    }

    public function addStd()
    {
        return view('auth/addstd');
    }

    public function uploadStd(Request $request)
    {
        $cert_name = $request->input('cert_name');
        $name = $request->input('name');
        $file = $request->file('fileToUpload')->getRealPath();
        $content = addslashes($request->input('content'));
        Cloudder::upload($file, null, array(
            "folder" => "ans",  "overwrite" => FALSE,
            "resource_type" => "image", "responsive" => TRUE
        ));

        $image_url = Cloudder::show(Cloudder::getPublicId());
        $sql = AdminModel::uploadCert($cert_name, $name, $image_url, $content);
        if ($sql == 200) {
            return redirect()->back()->with('message', 'Standard added successfully');
        } else {
            return redirect()->back()->with('message', 'Something went wrong');
        }
    }

    public function addApp()
    {
        $data['certList'] = AdminModel::getCerList();
        return view('auth/addapp', $data);
    }

    public function addApplication(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $name = $data['name'];
        $cert_number = $data['cert_number'];
        $cer_name = $data['cer_name'];
        $scope = $data['scope'];
        $status = $data['status'];
        $date = $data['date'];
        $res = AdminModel::addApp($name, $cert_number, $cer_name, $scope, $status, $date);
        if ($res == 200) {
            return response()->json([
                "status" => 200
            ]);
        } else {
            return response()->json([
                "status" => 400
            ]);
        }
    }

    public function getAppData()
    {
        $data['allAppData'] = AdminModel::getAppDatas();
        return view('auth/viewapp', $data);
    }

    public function getSingleAppData(Request $request)
    {
        $id = $request->segment(2);
        $data['singleApp'] = AdminModel::getAppDatas($id);
        return view('auth/appedit', $data);
    }

    public function editApp(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $cert_number = $request->input('cert_number');
        $scope = $request->input('scope');
        $date = $request->input('date');
        $cer_name = $request->input('cer_name');
        $res = AdminModel::updateAppData($id, $name, $cert_number, $scope, $date, $cer_name);
        if ($res == 200) {
            return response()->json([
                "status" => 200
            ]);
        } else {
            return response()->json([
                "status" => 400
            ]);
        }
    }

    public function deleteRecord(Request $request)
    {
        $id = $request->input("id");
        $res = AdminModel::deleteApp($id);
        if ($res == 200) {
            return response()->json([
                "status" => 200
            ]);
        } else {
        return response()->json([
                "status" => 400
            ]);
        }
    }

    public function getSingleCert(Request $request)
    {
        $id = $request->segment(3);
        $data['certData'] = AdminModel::getSingleCertData($id);
        return view('auth/certedit', $data);
    }

    public function editCert(Request $request)
    {
        $id = $request->input('stdid');
        $name = $request->input('name');
        // $file = $request->file('fileToUpload')->getRealPath();
        $content = addslashes($request->input('editor1'));
        // Cloudder::upload($file, null, array(
        //     "folder" => "ans",  "overwrite" => FALSE,
        //     "resource_type" => "image", "responsive" => TRUE
        // ));
        // $image_url = Cloudder::show(Cloudder::getPublicId());
        $res = AdminModel::updateCert($id, $name, $content);
        if ($res == 200) {
            return redirect()->back()->with('message', 'Standard updated successfully');
        } else {
            return redirect()->back()->with('message', 'Something went wrong');
        }
    }

    public function deleteCert(Request $request)
    {
        $id = $request->input("id");
        $sql = DB::table('certificate')->where("id", $id)->delete();
        if ($sql) {
            return response()->json([
                "status" => 200
            ]);
        } else {
            return response()->json([
                "status" => 400
            ]);
        }
    }

    public function certificationEnquiry()
    {
        $data['x'] = 1;
        $data['enqData'] = AdminModel::getCertificationEnquiryList();
        return view('auth/certification-enquiry', $data);
    }

    public function trainingEnquiry()
    {
        $data['x'] = 1;
        $data['trainData'] = AdminModel::getTrainingEnquiryList();
        return view('auth/training-enquiry', $data);
    }

    public function contactEnquiry()
    {
        $data['x'] = 1;
        $data['contactData'] = AdminModel::getContactEnquiryList();
        return view('auth/contact-enquiry', $data);
    }

    public function feedback()
    {
        $data['x'] = 1;
        $data['feedback'] = AdminModel::getFeedbackList();
        return view('auth/customer-feedback', $data);
    }

    public function training()
    {
        $data['x'] = 1;
        $data['training'] = AdminModel::getTrainingList();
        return view('auth/training', $data);
    }

    public function addtraining(Request $request)
    {
        $trainingName = $request->input("trainingName");
        $response = AdminModel::addTraining($trainingName);
        if ($response == 200) {
            return response()->json([
                "status" => 200,
                "message" => "Training added"
            ]);
        } else {
            return response()->json([
                "status" => 500,
                "message" => "Server error"
            ]);
        }
    }

    public function deleteTraining(Request $request)
    {
        $id = $request->input('id');
        $response = AdminModel::deleteTraining($id);
        if ($response == 200) {
            return response()->json([
                "status" => 200,
                "message" => "Training deleted"
            ]);
        } else {
            return response()->json([
                "status" => 500,
                "message" => "Server error"
            ]);
        }
    }

    public function trainingCertificates()
    {
        $data['trainings'] = AdminModel::getTrainingList();
        return view('auth/training-certificates', $data);
    }

    public function addCadidateTrainingCertificates(Request $request)
    {
        $cname = $request->input('cname');
        $cert_number = $request->input('cert_number');
        $trainingDone = $request->input('trainingDone');
        $issueDate = $request->input('issueDate');
        $status = $request->input('status');
        $response = AdminModel::insertCandidateCertificate($cname, $cert_number, $trainingDone, $issueDate, $status);
        if ($response == 200) {
            return response()->json([
                "status" => 200,
                "message" => "Candidate Training certificate added"
            ]);
        } else {
            return response()->json([
                "status" => 500,
                "message" => "Server error"
            ]);
        }
    }

    public function mamageTrainngCertificates()
    {
        $data['x'] = 1;
        $data['candidate'] = AdminModel::getCandiateCertificate();
        return view('auth/manage-training-certificates', $data);   
    }

    public function disableCandidateCertificate(Request $request)
    {
        $id = $request->input('id');
        $response = AdminModel::disableCandidateTrainingCertificate($id);
        if ($response == 200) {
            return response()->json([
                "status" => 200,
                "message" => "Candidate Certificate Disabled"
            ]);
        } else {
            return response()->json([
                "status" => 500,
                "message" => "Server error"
            ]);
        }
    }
}
